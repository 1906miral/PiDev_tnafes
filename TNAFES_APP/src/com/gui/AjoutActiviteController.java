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
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import javax.swing.JOptionPane;

/**
 * FXML Controller class
 *
 * @author HP
 */
public class AjoutActiviteController implements Initializable {

    @FXML
    private TextField tfTitre;
    @FXML
    private TextField tfDesc;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void AjoutAct(ActionEvent event) {
        ServiceActivite sa = new ServiceActivite();
       if (tfTitre.getText().equals("") || tfDesc.getText().equals(""))
       {
           JOptionPane.showMessageDialog(null, "Il faut remplir toutes les informations !");
       }
       else{
       sa.ajouter(new activite(tfTitre.getText(),tfDesc.getText()));
       
       JOptionPane.showMessageDialog(null, "activite ajoutée !");
       }
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
