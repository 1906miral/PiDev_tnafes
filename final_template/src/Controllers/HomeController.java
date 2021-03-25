/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controllers;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;

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
    private Button btnOrders1;
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

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void logout(ActionEvent event) {
    }

    @FXML
    private void settings_security(ActionEvent event) {
    }

    @FXML
    private void gérerActivite(ActionEvent event) {
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
    private void gérerCoach(ActionEvent event) {
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
