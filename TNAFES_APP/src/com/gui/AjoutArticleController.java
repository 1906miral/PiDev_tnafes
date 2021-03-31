/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gui;

import com.models.article;
import com.service.ServiceArticle;
import java.awt.Desktop;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.regex.Pattern;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.BorderPane;
import javafx.stage.FileChooser;
import javafx.stage.FileChooser.ExtensionFilter;
import javafx.stage.Stage;
import javax.swing.JOptionPane;

/**
 * FXML Controller class
 *
 * @author HP
 */
public class AjoutArticleController implements Initializable {

    @FXML
    private TextField tfTitre;
    @FXML
    private TextField tfDesc;
    
    @FXML
    private ImageView imgView;
    
    
    @FXML
    private TextArea tArea;
    private FileChooser fileChooser;
    private File file;
    private Desktop desktop = Desktop.getDesktop();
    private Image image;

    /**
     * Initializes the controller class.
     */
    
    
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        tArea.setPromptText("path du fichier selectionné");
        tArea.setEditable(false);
        fileChooser = new FileChooser();
        fileChooser.getExtensionFilters().addAll(
        new ExtensionFilter("Image Files","*.png","*.jpg"),
        new ExtensionFilter("All Files","*.*")
        );
    }

// browse for an image 
@FXML
private void browse(ActionEvent event) throws IOException{
    file = fileChooser.showOpenDialog(null);
    if(file !=null){
    desktop.open(file);
    tArea.setText(file.getAbsolutePath());
    // declarer l'image dans l'image view
    //image = new Image(file.toURI().toString(), 100,150,true,true);//path,PreWidth,PreHeight,PreservedRatio,Smooth
    imgView.setImage(new Image(file.toURL().toString()));
    // proprietes de l'image
    imgView = new ImageView(image);
    imgView.setFitWidth(200);
    imgView.setFitHeight(150);
    imgView.setPreserveRatio(true);
//   
//    BorderPane.setAlignment(imgView, Pos.TOP_LEFT);
    }
}


    @FXML
    private void AjoutArt(ActionEvent event) {
         ServiceArticle sa = new ServiceArticle();
       if (tfTitre.getText().equals("") || tfDesc.getText().equals("") )
       {
           JOptionPane.showMessageDialog(null, "Il faut remplir toutes les informations !");
       }
       else if(tArea.getText().equals("")){
           JOptionPane.showMessageDialog(null, "Vous devez ajouter une image !");
       }
       else if(!( Pattern.matches("[a-zA-Z]*", tfTitre.getText()))){
           JOptionPane.showMessageDialog(null, "Titre doit etre de type String !");
       }
       else if(!( Pattern.matches("[a-zA-Z]*", tfDesc.getText()))){
           JOptionPane.showMessageDialog(null, "Description doit etre un texte !");
       }
       else{
       sa.ajouter(new article(tfTitre.getText(),tfDesc.getText(),tArea.getText()));
       
       JOptionPane.showMessageDialog(null, "article ajouté !");
       }
    }

    @FXML
    private void retourmenu(ActionEvent event) throws IOException {
         Parent gestionView = FXMLLoader.load(getClass().getResource("menuArt.fxml"));
     Scene gestionViewScene = new Scene(gestionView);
     
     //les informations du stage
     Stage window = (Stage)(((Node)event.getSource()).getScene().getWindow());
     
     window.setScene(gestionViewScene);
     window.show();
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
