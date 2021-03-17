/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Reclamation;

import Services.ServiceReclamation;
import Utils.javaMail;
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.util.List;
import java.util.Optional;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Modality;
import javafx.stage.Stage;
import javafx.stage.Window;
import javafx.util.Callback;



/**
 * FXML Controller class
 *
 * @author miral
 */
public class GérerLesReclamationsController implements Initializable {

    @FXML
    private TableView<Reclamation> tableViewReclamation;
    @FXML
    private TableColumn<Reclamation,String> col_nomuser;
    @FXML
    private TableColumn<Reclamation,String>  col_prenomuser;
    @FXML
    private TableColumn<Reclamation,String>  col_emailuser;
    @FXML
    private TableColumn<Reclamation,String>  col_objet;
    @FXML
    private TableColumn<Reclamation,String>  col_desc;
    @FXML
    private TableColumn<Reclamation,String>  col_state;
    @FXML
    private TableColumn<Reclamation,Date>  col_date;
    @FXML
    private TableColumn col_actions;
    @FXML
    private TextField searchbox;
    @FXML
    private ComboBox<String> combo_tri;
    @FXML
    private TableColumn<Reclamation,Date> col_datetrait;

    /**
     * Initializes the controller class.
     */
    ServiceReclamation sr=new ServiceReclamation();
    List<Reclamation> lr=sr.afficher_reclamation();
    ObservableList<Reclamation> data=FXCollections.observableArrayList(lr);
//      List<Integer> id=sr.getIdreclamation();
   
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
          ObservableList<String> sort = FXCollections
            .observableArrayList("Date ASC","Date DESC","Etat ASC","Etat DESC");
        combo_tri.setItems(sort);
    
    
    col_nomuser.setCellValueFactory(new PropertyValueFactory<>("nom_user"));
    col_prenomuser.setCellValueFactory(new PropertyValueFactory<>("prenom_user"));
    col_emailuser.setCellValueFactory(new PropertyValueFactory<>("email"));
    col_desc.setCellValueFactory(new PropertyValueFactory<>("description"));
    col_objet.setCellValueFactory(new PropertyValueFactory<>("objet"));
    col_state.setCellValueFactory(new PropertyValueFactory<>("etat"));
    col_date.setCellValueFactory(new PropertyValueFactory<>("date"));
    col_datetrait.setCellValueFactory(new PropertyValueFactory<>("date_traitement"));
//    col_id.setCellValueFactory(new PropertyValueFactory<>("id_reclamation"));
    //create cell factory to insert a button in every row
        Callback<TableColumn<Reclamation,String>,TableCell<Reclamation,String>> cellFactory=(param) -> {
            //make the table cell containing button
            final TableCell<Reclamation,String> cell=new TableCell<Reclamation,String>(){
                @Override
                protected void updateItem(String item, boolean empty) {
                    super.updateItem(item, empty); //To change body of generated methods, choose Tools | Templates.
                    //ensure that cell is created only on non-empty rows
                    if (empty){
                        setGraphic(null);
                        setText(null);
                        
                    }else{
                        //create the action buton
                        final Button editbutton=new Button("Modifier");
                        editbutton.setOnAction(edit->{
                           if (getTableView().getItems().get(getIndex()) == null) {
                                 System.out.println("**************");
                                } else {
                                    
                                    Reclamation selectedreclam = getTableView().getItems().get(getIndex());
                                    Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
                                    alert.setTitle("Confirmation Dialog");
                                    alert.setHeaderText(null);
                                    alert.setContentText("Vous voulez vraiment modifier cette reclamation");
                                    Optional<ButtonType> action = alert.showAndWait();
                                    if (action.get() == ButtonType.OK) {
                                        sr.modifier_reclamation(new Reclamation(selectedreclam.getId_reclamation(),selectedreclam.getNom_user(),selectedreclam.getPrenom_user(),selectedreclam.getEmail(),selectedreclam.getDescription(),selectedreclam.getObjet(),selectedreclam.getEtat()));
                                        tableViewReclamation.setItems(data);
                                        if(selectedreclam.getEtat().equals("Traitée")){
                                           javaMail mailling=new javaMail();
                                            mailling.message(selectedreclam.getEmail(),"Mr/Mme "+selectedreclam.getNom_user()+" "+selectedreclam.getPrenom_user()+" votre réclamation est traitée,merci pour votre confiance");
                                       }
                                    }
//                else{
//                                        tableViewReclamation.setItems(data); 
//                                    }
                                }
                            
                        });
                        setGraphic(editbutton);
                        setText(null);
            
                    }
                }
                
            };
        return cell;
        };
               // Wrap the ObservableList in a FilteredList (initially display all data).
        FilteredList<Reclamation> filteredData = new FilteredList<>(data, b -> true);
		// 2. Set the filter Predicate whenever the filter changes.
		searchbox.textProperty().addListener((observable, oldValue, newValue) -> {
			filteredData.setPredicate(reclamation -> {
				// If filter text is empty, display all persons.
								
				if (newValue == null || newValue.isEmpty()) {
					return true;
				}
				// Compare first name and last name of every person with filter text.
				String lowerCaseFilter = newValue.toLowerCase();
				
				if (reclamation.getNom_user().toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
					return true; // Filter matches first name.
				} else if (reclamation.getPrenom_user().toLowerCase().indexOf(lowerCaseFilter) != -1) {
					return true; // Filter matches last name.
				}
				else if (reclamation.getObjet().toLowerCase().indexOf(lowerCaseFilter) != -1){
                                     return true;
                                } else  
				    	 return false; // Does not match.
			});
		});
		// 3. Wrap the FilteredList in a SortedList. 
		SortedList<Reclamation> sortedData = new SortedList<>(filteredData);
		// 4. Bind the SortedList comparator to the TableView comparator.
		// 	  Otherwise, sorting the TableView would have no effect.
		sortedData.comparatorProperty().bind(tableViewReclamation.comparatorProperty());
		 col_actions.setCellFactory(cellFactory);  
        // 5. Add sorted (and filtered) data to the table.
    tableViewReclamation.setItems(sortedData);
    tableViewReclamation.setEditable(true);
    col_state.setCellFactory(TextFieldTableCell.forTableColumn());
    
    }

    /**
     *
     * @param edittedcell 
     */
    @FXML
    public void changeEtat(TableColumn.CellEditEvent<Reclamation,String> edittedcell){
    Reclamation selectedreclam=tableViewReclamation.getSelectionModel().getSelectedItem();
    selectedreclam.setEtat(edittedcell.getNewValue());
     }    

  
    @FXML
    public void showReclamstat() {
          try {
        // Load the fxml file and create a new stage for the popup.
        FXMLLoader loader = new FXMLLoader(getClass().getResource("StatReclamation.fxml"));
        AnchorPane page = (AnchorPane) loader.load();
        Stage dialogStage = new Stage();
        dialogStage.setTitle("Statistiques réclamation");
        dialogStage.initModality(Modality.WINDOW_MODAL);
              Window primaryStage = null;
        dialogStage.initOwner(primaryStage);
        Scene scene = new Scene(page);
        dialogStage.setScene(scene);

        // Set the persons into the controller.
        StatReclamationController controller = loader.getController();
        controller.setReclamationData(data);

        dialogStage.show();

    } catch (IOException e) {
        e.printStackTrace();
    }
    }

    @FXML
    private void trierReclamation(MouseEvent event) {
        combo_tri.setOnAction(e->{
                  if((combo_tri.getSelectionModel().getSelectedItem().equals("Date ASC"))){
                   sr.trierReclamationparDate(lr);
//                   sr.afficher_reclamation();
        }
        else if(combo_tri.getSelectionModel().getSelectedItem().equals("Date DESC")){
            sr.trierReclamationparDatedesc(lr);
//            sr.afficher_reclamation();
        }
           if(combo_tri.getSelectionModel().getSelectedItem().equals("Etat ASC")){
         sr.trierReclamationparEtat(lr);
//         sr.afficher_reclamation();
        }
        else if(combo_tri.getSelectionModel().getSelectedItem().equals("Etat DESC")){
            sr.trierReclamationparEtatdesc(lr);
//            sr.afficher_reclamation();
//               System.out.println("************");
//               data.sorted((r1,r2)->r1.getObjet().compareTo(r2.getObjet()));
        }
        });
  
    }
    
    
     
    
}
