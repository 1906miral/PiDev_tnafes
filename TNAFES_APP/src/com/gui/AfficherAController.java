/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gui;

import com.models.activite;
import com.service.ServiceActivite;
import java.io.IOException;
import java.net.URL;
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
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author HP
 */
public class AfficherAController implements Initializable {
    
    @FXML
    private TextField STitre;
    @FXML
    private TableView<activite> tableA;
    @FXML
    private TableColumn<activite, String> titre;
    @FXML
    private TableColumn<activite, String> description;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void display(ActionEvent event) {
        ServiceActivite sa = new ServiceActivite();
        List<activite> l = sa.afficher();
        ObservableList<activite> data =FXCollections.observableArrayList(l);
        
        titre.setCellValueFactory(new PropertyValueFactory<activite, String>("titre"));
        description.setCellValueFactory(new PropertyValueFactory<activite, String>("description"));
        tableA.setItems(data);
    }
    
    @FXML
    private void displayOrder(ActionEvent event) {
        ServiceActivite sa = new ServiceActivite();
        List<activite> l = sa.trier();
        ObservableList<activite> data =FXCollections.observableArrayList(l);
        
        titre.setCellValueFactory(new PropertyValueFactory<activite, String>("titre"));
        description.setCellValueFactory(new PropertyValueFactory<activite, String>("description"));
        tableA.setItems(data);
    } 
    
    @FXML
    private void search(ActionEvent event) {
        ServiceActivite sa = new ServiceActivite();
        List<activite> l = sa.rechercher(STitre.getText());
        ObservableList<activite> data =FXCollections.observableArrayList(l);
        
        titre.setCellValueFactory(new PropertyValueFactory<activite, String>("titre"));
        description.setCellValueFactory(new PropertyValueFactory<activite, String>("description"));
        tableA.setItems(data);
    }
    
    

    @FXML
    private void retourmenu(ActionEvent event) throws IOException {
        Parent gestionView = FXMLLoader.load(getClass().getResource("menuAct.fxml"));
     Scene gestionViewScene = new Scene(gestionView);
     
     //les informations du stage
     Stage window = (Stage)(((Node)event.getSource()).getScene().getWindow());
     
     window.setScene(gestionViewScene);
     window.show();
    }
    
}
