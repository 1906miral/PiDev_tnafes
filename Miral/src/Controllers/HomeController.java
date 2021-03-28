/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controllers;

import Models.session;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.image.ImageView;

/**
 * FXML Controller class
 *
 * @author miral
 */
public class HomeController implements Initializable {

    @FXML
    private Button btnSignout;
    @FXML
    private Button btnSettings;
    @FXML
    private Button btnActivity;
    @FXML
    private Button btnAbonnement;
    @FXML
    private Button btnCustomers;
    @FXML
    private Button btnPub;
    @FXML
    private Button btnAcceuil;
    @FXML
    private Button btncoach;
    @FXML
    private Button btnEvent;
    @FXML
    private Button btnCateg;
    @FXML
    private Button btncategEvent;
    @FXML
    private Button btnParticipation;
    @FXML
    private Button btnArticle;
    @FXML
    private Button btnReclam;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
          
//        btnReclam.setOnMouseDragReleased(e->btnReclam.setStyle("-fx-background-color:ffffff;-fx-text-fill:#000000"));
////        btnReclam.setOnMouseDragExited(btn->btnReclam.setStyle("-fx-background-color:000000;-fx-text-fill:#ffffff"));
////      btnReclam.setOnMouseDragOver(e->btnReclam.setStyle("-fx-background-color:ffffff;-fx-text-fill:#000000"));
           
    }    
    @FXML
    private void logout(ActionEvent event) throws IOException {
         session s = new session();
        s.deletefile();
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/login.fxml"));
        btnSignout.getScene().setRoot(root);
    }
     private void modifieradmin(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/modifieradmin.fxml"));
        btnAbonnement.getScene().setRoot(root);
    }

    @FXML
     private void gérerCoach(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/coachfromadminmenu.fxml"));
        btncoach.getScene().setRoot(root);
    }

    @FXML
     private void settings_security(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/settings.fxml"));
        btnSettings.getScene().setRoot(root);
    }

    @FXML
     private void displayCustomers(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/clientfromadminmenu.fxml"));
        btnCustomers.getScene().setRoot(root);
    }
    

    @FXML
    private void gérerActivite(ActionEvent event) {
    }

    @FXML
    private void gererAbonnement(ActionEvent event) {
    }

  

    @FXML
    private void GérerReclamation(ActionEvent event) throws IOException {
        FXMLLoader loader=new FXMLLoader(getClass().getResource("../GUI/Reclamations.fxml"));
        Parent root=loader.load();
        ReclamationsController rc=loader.getController();
        btnAbonnement.getScene().setRoot(root);
    }

    @FXML
    private void acceuil(ActionEvent event) throws IOException {
         Parent root = FXMLLoader.load(getClass().getResource("../GUI/adminmenu.fxml"));
        btnAcceuil.getScene().setRoot(root);
    }

     @FXML
    private void GererPub(ActionEvent event) throws IOException {
        FXMLLoader loader=new FXMLLoader(getClass().getResource("../GUI/AfficherPublication.fxml"));
        Parent root=loader.load();
        AfficherPublicationController rc=loader.getController();
        btnAbonnement.getScene().setRoot(root);
    }


    @FXML
    private void gérerEvent(ActionEvent event) {
    }

    @FXML
    private void gerercateg(ActionEvent event) {
    }

    @FXML
    private void gérerCategevent(ActionEvent event) {
    }

    @FXML
    private void gérerParticipation(ActionEvent event) {
    }

    @FXML
    private void gérerArticle(ActionEvent event) {
    }
    
}
