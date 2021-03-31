/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gui;


import com.models.activite;
import com.models.categorie;
import com.service.ServiceActivite;
import com.service.ServiceCategorie;
import com.utils.DataSource;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;
import javafx.stage.Stage;
import javafx.util.Callback;
import javax.swing.JOptionPane;

/**
 * FXML Controller class
 *
 * @author HP
 */
public class AfficherCController implements Initializable {

    @FXML
    private TableView<categorie> table;
    @FXML
    private TableColumn<categorie, String> nom;
    @FXML
    private TableColumn delCol;
    @FXML
    private ComboBox<String> comb;
    @FXML
    private TextField SNom;
    
    
//    public ObservableList<categorie> data =FXCollections.observableArrayList();

    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        ServiceCategorie sc = new ServiceCategorie();
        //tri
         List<String> lt = new ArrayList();
         lt.add("ascendant");
         lt.add("descendant");
        ObservableList<String>  list = FXCollections.observableArrayList(lt);
        comb.setItems(list);
        
        List<categorie> l = sc.afficher();
        ObservableList<categorie> data =FXCollections.observableArrayList(l);
        
        nom.setCellValueFactory(new PropertyValueFactory<categorie, String>("nom_categorie"));
        sc.afficher().forEach(e->{
            data.add(e);
        });
        //BOUTTON DE SUPPRESSION
        //creation du cell factory pour inserer le boutton dans chaque ligne
        Callback<TableColumn<categorie,String>, TableCell<categorie,String>> cellFactory =(param) -> {
          final TableCell<categorie,String> cell=new TableCell<categorie,String>(){
          
          //override de la methode updateItem
         @Override
         public void updateItem(String item,boolean empty){
             super.updateItem(item, empty);
             if (empty) {
                 setGraphic(null);
                 setText(null);
             }
                else{
                // creation du boutton
                final Button deleteButton = new Button("supprimer");
                //liaison avec listener
                
                 setGraphic(deleteButton);
                 setText(null);
                 deleteButton.setOnAction(e -> {
                     //extraire les infos de la ligne selectionnée
                     categorie cat = getTableView().getItems().get(getIndex());
                     sc.supprimer(cat.getId_categorie());
                     JOptionPane.showMessageDialog(null, "catégorie supprimée !");
                 });
             }
            };
          };  
            return cell;   
        };
        delCol.setCellFactory(cellFactory);
        table.setItems(data);
        
        
        //modification au niveau du tableview
        table.setEditable(true);
        nom.setCellFactory(TextFieldTableCell.forTableColumn());
        
        
        
            FilteredList<categorie> filteredData = new FilteredList<> (data,b -> true);
          SNom.textProperty().addListener((Observable, oldValue , newValue)-> {
              filteredData.setPredicate(event-> {
              if(newValue == null || newValue.isEmpty()) {
                  return true;
              }
              
                      String lowerCaseFilter = newValue.toLowerCase();
                      if(event.getNom_categorie().toLowerCase().indexOf(lowerCaseFilter) != -1){return true;}
                      else return false;
            
          });
          });
          SortedList<categorie> sorteddata = new SortedList<>(filteredData);
          sorteddata.comparatorProperty().bind(table.comparatorProperty());
          table.setItems(sorteddata);
    }
@FXML
    private void retourmenu(ActionEvent event) throws IOException {
        Parent gestionView = FXMLLoader.load(getClass().getResource("menuCat.fxml"));
     Scene gestionViewScene = new Scene(gestionView);
     
     //les informations du stage
     Stage window = (Stage)(((Node)event.getSource()).getScene().getWindow());
     
     window.setScene(gestionViewScene);
     window.show();
    }
@FXML
    public void onEditChangeT(TableColumn.CellEditEvent<activite,String> categorieStringCellEditEvent){
        categorie cat=table.getSelectionModel().getSelectedItem();
        cat.setNom_categorie(categorieStringCellEditEvent.getNewValue());
        ServiceCategorie sc = new ServiceCategorie();
        
        sc.modifier(new categorie(cat.getId_categorie(),cat.getNom_categorie()));
    }    

    @FXML
    private void display(ActionEvent event) {
        
//        try{
//            Connection cnx = DataSource.getInstance().getCnx();
//            String requete = "SELECT * FROM categorie";
//            PreparedStatement pst = cnx.prepareStatement(requete);
//            ResultSet rs = pst.executeQuery();
//            while (rs.next()) {
//                data.add(new categorie(rs.getInt(1), rs.getString(2)));
//            }
//            
//     
//     } catch (Exception e) {
//            e.printStackTrace();
//        }
//       
//
//      nom.setCellValueFactory(new PropertyValueFactory<>("nom_categorie"));
//      table.setItems(data);
//      nom.setCellFactory(TextFieldTableCell.forTableColumn());
       
//22222222222222222222222

////ServiceAbonnement sc = new ServiceAbonnement();
////        List<Abonnement> l = sc.afficher();
////        ObservableList<Abonnement> data =FXCollections.observableArrayList(l);
////       // data.add(new Abonnement(sc.getInt(1), sc.getString(2), sc.getString(3),sc.getString(4)));
////       idabonnement.setCellValueFactory(new PropertyValueFactory<Abonnement, Integer>("id_abonnement"));
////      datedebut.setCellValueFactory(new PropertyValueFactory<Abonnement, String>("date_debut"));
////      datefin.setCellValueFactory(new PropertyValueFactory<Abonnement, String>("date_fin"));
////      type.setCellValueFactory(new PropertyValueFactory<Abonnement, String>("type"));
////      sc.afficher().forEach(e->{
////            data.add(e);
////        });
////      tabview.setItems(data);





        
        ServiceCategorie sc = new ServiceCategorie();
        List<categorie> l = sc.afficher();
        ObservableList<categorie> data =FXCollections.observableArrayList(l);
        
        nom.setCellValueFactory(new PropertyValueFactory<categorie, String>("nom_categorie"));
        sc.afficher().forEach(e->{
            data.add(e);
        });
        table.setItems(data);
    }
    //tri ascendant
//    @FXML
//    private void displayOrder(ActionEvent event) {
//        ServiceCategorie sc = new ServiceCategorie();
//        List<categorie> l = sc.trier();
//        ObservableList<categorie> data =FXCollections.observableArrayList(l);
//        
//        nom.setCellValueFactory(new PropertyValueFactory<categorie, String>("nom_categorie"));
//        
//        table.setItems(data);
//    } 
//    
//    //tri descendant
//    @FXML
//    private void displayOrder1(ActionEvent event) {
//        ServiceCategorie sc = new ServiceCategorie();
//        List<categorie> l = sc.trier1();
//        ObservableList<categorie> data =FXCollections.observableArrayList(l);
//        
//        nom.setCellValueFactory(new PropertyValueFactory<categorie, String>("nom_categorie"));
//        
//        table.setItems(data);
//    }
    
     @FXML
    private void SelectedNom(ActionEvent event) {
      ServiceCategorie sc = new ServiceCategorie();
      String tri=  (String)comb.getSelectionModel().getSelectedItem();
      if(tri.equals("ascendant")){
          
        List<categorie> l = sc.trier();
        ObservableList<categorie> data =FXCollections.observableArrayList(l);
        
        nom.setCellValueFactory(new PropertyValueFactory<categorie, String>("nom_categorie"));
        
        table.setItems(data);
      }
      else {
          List<categorie> l = sc.trier1();
        ObservableList<categorie> data =FXCollections.observableArrayList(l);
        
        nom.setCellValueFactory(new PropertyValueFactory<categorie, String>("nom_categorie"));
        
        table.setItems(data);
      }
      
        
    }
    @FXML
    private void logout(ActionEvent event) {
    }

    @FXML
    private void settings_security(ActionEvent event) {
    }

    @FXML
    private void gérerActivite(ActionEvent event) throws IOException {
         Parent gestionView = FXMLLoader.load(getClass().getResource("menuAct.fxml"));
     Scene gestionViewScene = new Scene(gestionView);
     
     //les informations du stage
     Stage window = (Stage)(((Node)event.getSource()).getScene().getWindow());
     
     window.setScene(gestionViewScene);
     window.show();
    }

    @FXML
    private void gererAbonnement(ActionEvent event) {
    }

    @FXML
    private void displayCustomers(ActionEvent event) {
    }

    @FXML
    private void GérerPublication(ActionEvent event) {
    }

    @FXML
    private void acceuil(ActionEvent event) {
    }

    @FXML
    private void gérerCoach(ActionEvent event) throws IOException {
        
    }

    @FXML
    private void gérerEvent(ActionEvent event) {
    }

    @FXML
    private void gerercateg(ActionEvent event) throws IOException {
          Parent gestionView = FXMLLoader.load(getClass().getResource("menuCat.fxml"));
     Scene gestionViewScene = new Scene(gestionView);
     
     //les informations du stage
     Stage window = (Stage)(((Node)event.getSource()).getScene().getWindow());
     
     window.setScene(gestionViewScene);
     window.show();
    }

    @FXML
    private void gérerCategevent(ActionEvent event) {
    }

    @FXML
    private void gérerParticipation(ActionEvent event) {
    }

    @FXML
    private void gérerArticle(ActionEvent event) throws IOException {
         Parent gestionView = FXMLLoader.load(getClass().getResource("menuArt.fxml"));
     Scene gestionViewScene = new Scene(gestionView);
     
     //les informations du stage
     Stage window = (Stage)(((Node)event.getSource()).getScene().getWindow());
     
     window.setScene(gestionViewScene);
     window.show();
    }
}
