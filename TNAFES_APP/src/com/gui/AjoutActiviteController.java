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
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;
import java.util.regex.Pattern;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
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
    @FXML
    private ComboBox<String> comb;
    

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        ServiceCategorie sc = new ServiceCategorie();
        List<String> l = sc.getNC();
        ObservableList<String>  list = FXCollections.observableArrayList(l);
        comb.setItems(list);
    }    

    @FXML
    private void AjoutAct(ActionEvent event) {
        ServiceActivite sa = new ServiceActivite();
       if (tfTitre.getText().equals("") || tfDesc.getText().equals(""))
       {
           JOptionPane.showMessageDialog(null, "Il faut remplir toutes les informations !");
       }
       else if(!( Pattern.matches("[a-zA-Z]*", tfTitre.getText()))){
           JOptionPane.showMessageDialog(null, "Titre doit etre de type String !");
       }
       else if(!( Pattern.matches("[a-zA-Z]*", tfDesc.getText()))){
           JOptionPane.showMessageDialog(null, "Description doit etre un texte !");
       }
       else{
       sa.ajouter(new activite(tfTitre.getText(),tfDesc.getText(),(String)comb.getSelectionModel().getSelectedItem()));
       
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
    
    @FXML
    private void SelectedCat(MouseEvent event) {
        comb.setOnAction(e->{
          String requete="select nom_categorie from categorie ";
          try{
              Connection cnx = DataSource.getInstance().getCnx();
              PreparedStatement pst=cnx.prepareStatement(requete);
              pst.setString(1,(String)comb.getSelectionModel().getSelectedItem());
              ResultSet rs=pst.executeQuery();
//              while(rs.next()){
//                  titreA.setText(rs.getString("titre"));
//                  descriptionA.setText(rs.getString("description"));
//              }
          } catch (SQLException ex){
              System.out.println(ex);
          }
           
       }
               
               
               
               
               
               
       
       );
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
