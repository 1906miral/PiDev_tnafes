/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gui;

import com.models.categorie;
import com.service.ServiceCategorie;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.regex.Pattern;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import javax.swing.JOptionPane;

/**
 * FXML Controller class
 *
 * @author HP
 */
public class AjoutCategorieController implements Initializable {

    @FXML
    private TextField tfNom;
    @FXML
    private Button btn;

    /**
     * Initializes the controller class.
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
    private void AjouterCategorie(ActionEvent event) {
       ServiceCategorie sc = new ServiceCategorie();
       if (tfNom.getText().equals(""))
       {
           Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
            alert.setTitle("Information Dialog");
            alert.setHeaderText(null);
            alert.setContentText("Il faut taper le nom !!!!!!");
            alert.showAndWait();
           //JOptionPane.showMessageDialog(null, "Il faut taper le nom !");
       }
       
       else if(!( Pattern.matches("[a-zA-Z]*", tfNom.getText()))){
           Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("Information Dialog");
            alert.setHeaderText(null);
            alert.setContentText("Nom de la catégorie doit etre de type String!!!!!!!!");
            alert.showAndWait();
           //JOptionPane.showMessageDialog(null, "Nom de la catégorie doit etre de type String! !");
       }
       else{
       sc.ajouter(new categorie(tfNom.getText()));
       
       JOptionPane.showMessageDialog(null, "catégorie ajoutée !");
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
