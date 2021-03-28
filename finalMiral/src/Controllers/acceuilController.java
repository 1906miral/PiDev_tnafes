/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controllers;

import static Controllers.AfficherPublicationController.selectedpub;
import static Controllers.ReclamationsController.stageAffichageUnique;
import Models.Avis;
import Models.Publication;
import Models.session;
import Models.user;
import Services.ServiceAvis;
import Services.ServicePublication;
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.text.ParseException;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;
import javafx.util.Callback;
import org.controlsfx.control.Rating;

/**
 * FXML Controller class
 *
 * @author miral
 */
public class acceuilController implements Initializable {

    @FXML
    private Button btnEvent;
    @FXML
    private Button btnArticle;
    @FXML
    private Button bntReclam;
    @FXML
    private Button btnAcceuil;
    @FXML
    private Button btnSignout;
    @FXML
    private Button btn_connecter;
    @FXML
    private Button btn_rendez_vous;
    @FXML
    private Button btn_creer;
    static Stage stageAffichageUnique;
    @FXML
    private TableView<Publication> tableViewPub;
    @FXML
    private TableColumn<Publication,String> col_contenupub;
    @FXML
    private TableColumn<Publication,Date> col_datepub;
    @FXML
    private TableColumn<Publication,ImageView> col_image;
    @FXML
    private TextField searchpub;
    @FXML
    private ComboBox<String> combo_tri;
    static Publication selectedpub;
    /**
     * Initializes the controller class.
     */
    Services.ServicePublication sp=new ServicePublication();
    List<Publication> lp=sp.afficher_pub();
    ObservableList<Publication> data=FXCollections.observableArrayList(lp);
    @FXML
    private TableColumn<Avis,Rating> col_rate;
    @FXML
    private TableView<Avis> tableRate;
    @Override
    public void initialize(URL url, ResourceBundle rb) {
//        setTableRate();
        ObservableList<String> combo=FXCollections.observableArrayList("Date ASC","Date DESC");
        combo_tri.setItems(combo);
        col_contenupub.setCellValueFactory(new PropertyValueFactory<>("contenu"));
        col_datepub.setCellValueFactory(new PropertyValueFactory<>("date_publication"));
        col_image.setCellValueFactory(new PropertyValueFactory<>("img"));
        col_rate.setCellValueFactory(new PropertyValueFactory<>("rating"));
        tableViewPub.setItems(data);
        SortedList<Publication> sortedData=tableViewSearchFilter(data);
        tableViewPub.setItems(sortedData);
        openReclamationWindow();
        openReclamationWindow2();
//           //create cell factory to insert rating in every row
//        Callback<TableColumn<List<Avis>,Rating>,TableCell<List<Avis>,Rating>> cellFactory=(param) -> {
//            //make the table cell containing rating
//            final TableCell<List<Avis>,Rating> cell;
//              cell = new TableCell<List<Avis>,Rating>(){
//                  @Override
//                  protected void updateItem(Rating item, boolean empty) {
//                      super.updateItem(item, empty); //To change body of generated methods, choose Tools | Templates.
//                      //ensure that cell is created only on non-empty rows
//                      if (empty){
//                          setGraphic(null);
//                          setText(null);
//                          
//                      }else{
//                          //create rating
//                          Avis a=new Avis();
//                         
//                          final Rating rate=new Rating(5);
////                            System.out.println(r);
//                          rate.setDisable(true);
//                          setGraphic(rate);
//                          setText(null);
//                          
//                      }
//                  }
//                  
//              };
//        return cell;
//        };
//        col_rate.setCellFactory(cellFactory);
    }    

    @FXML
    private void gérerEvent(ActionEvent event) {
    }

    @FXML
    private void gérerArticle(ActionEvent event) {
    }

    @FXML
    private void envoyerReclamation(ActionEvent event) throws IOException {
       openReclamationWindow();
    }

    @FXML
    private void acceuil(ActionEvent event) throws IOException {
        FXMLLoader loader=new FXMLLoader(getClass().getResource("../GUI/acceuil.fxml"));
        Parent root=loader.load();
        acceuilController ec=loader.getController();
        bntReclam.getScene().setRoot(root);
    }

    @FXML
    private void logout(ActionEvent event) {
    }
     private void openReclamationWindow(){
//      tableViewReclamation.setItems(ReclamationClientController.dataU);
      stageAffichageUnique = new Stage();
      tableViewPub.setOnMouseClicked(event
                -> {
            if (event.getClickCount() >= 2) {
               
                   if (tableViewPub.getSelectionModel().getSelectedItem() != null) {
                    selectedpub= tableViewPub.getSelectionModel().getSelectedItem();
                    Parent root;
                    try {
                           Services.ServiceAvis sa=new ServiceAvis();
              List<Avis> la=sa.afficher_avis(selectedpub.getId_pub());
              ObservableList<Avis> oa=FXCollections.observableArrayList(la);
           col_rate.setCellValueFactory(new PropertyValueFactory<>("rating"));
            tableRate.setItems(oa);
                        FXMLLoader loader=new FXMLLoader(getClass().getResource("../GUI/acceuilPub.fxml"));
                        root = loader.load();
                        Scene scene = new Scene(root);
                        stageAffichageUnique.setScene(scene);
                        stageAffichageUnique.show();
               

                    } catch (IOException ex) {
                        Logger.getLogger(ReclamationClientController.class.getName()).log(Level.SEVERE, null, ex);
                    }
                   }
                }
          
            });
        
}
         private void openReclamationWindow2(){
//      tableViewReclamation.setItems(ReclamationClientController.dataU);
      stageAffichageUnique = new Stage();
      bntReclam.setOnMouseClicked(event
                -> {
            if (event.getClickCount() >= 2) {
                   

                    Parent root;
                    try {
                        FXMLLoader loader=new FXMLLoader(getClass().getResource("../GUI/envoyerReclam.fxml"));
                        root = loader.load();
                        Scene scene = new Scene(root);
                        stageAffichageUnique.setScene(scene);
                        stageAffichageUnique.show();

                    } catch (IOException ex) {
                        Logger.getLogger(ReclamationClientController.class.getName()).log(Level.SEVERE, null, ex);
                    }

                }
            });
        
}

     private SortedList<Publication> tableViewSearchFilter(ObservableList<Publication> olist){
          
             // Wrap the ObservableList in a FilteredList (initially display all data).
            FilteredList<Publication> filteredData = new FilteredList<>(olist, b -> true);
            // 2. Set the filter Predicate whenever the filter changes.
            searchpub.textProperty().addListener((observable, oldValue, newValue) -> {
                filteredData.setPredicate(pub -> {
                    // If filter text is empty, display all persons.
                    
                    if (newValue == null || newValue.isEmpty()) {
                        return true;
                    }
                    // Compare first name and last name of every person with filter text.
                    String lowerCaseFilter = newValue.toLowerCase();
                    
                    if (pub.getContenu().toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
                        return true; // Filter matches first name.
                    } else
                        return false; // Does not match.
                });
            });
            // 3. Wrap the FilteredList in a SortedList.
            SortedList<Publication> sortedData = new SortedList<>(filteredData);
            // 4. Bind the SortedList comparator to the TableView comparator.
            // 	  Otherwise, sorting the TableView would have no effect.
            sortedData.comparatorProperty().bind(tableViewPub.comparatorProperty());
                 // 5. Add sorted (and filtered) data to the table. 
                 return sortedData;
    }
private void trierPubDate(){
    List<Publication> l=sp.trierParDate();
    ObservableList<Publication> datapub=FXCollections.observableArrayList(l);
    tableViewPub.setItems(datapub);
    SortedList<Publication> sortedData=tableViewSearchFilter(datapub);
    tableViewPub.setItems(sortedData);
}
private void trierPubDatedesc(){
    List<Publication> l=sp.trierParDatedesc();
    ObservableList<Publication> datapub=FXCollections.observableArrayList(l);
    tableViewPub.setItems(datapub);
    SortedList<Publication> sortedData=tableViewSearchFilter(datapub);
    tableViewPub.setItems(sortedData);
}
    @FXML
    private void trierPublication(ActionEvent event) {
        if(combo_tri.getSelectionModel().getSelectedItem().equals("Date ASC")){
            trierPubDate();
        }
        else{
            trierPubDatedesc();
        }
    }

    @FXML
    private void refreshtableView(ActionEvent event) {
          Services.ServiceAvis sa=new ServiceAvis();
              List<Avis> la=sa.afficher_avis(selectedpub.getId_pub());
              ObservableList<Avis> oa=FXCollections.observableArrayList(la);
           col_rate.setCellValueFactory(new PropertyValueFactory<>("rating"));
            tableRate.setItems(oa);
    }
   
}

