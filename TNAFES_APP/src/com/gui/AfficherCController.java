/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gui;

import com.models.categorie;
import com.service.ServiceCategorie;
import com.utils.DataSource;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;
import javafx.stage.Stage;

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
    
    
//    public ObservableList<categorie> data =FXCollections.observableArrayList();

    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
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
    
}
