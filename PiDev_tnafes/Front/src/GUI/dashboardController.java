/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

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
import javafx.scene.control.Button;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author user
 */
public class dashboardController implements Initializable {

    @FXML
    private Button btnEvent;
    @FXML
    private Button btnArticle;
    @FXML
    private Button btnPub;
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

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void gérerEvent(ActionEvent event) throws IOException {
         Parent home_page_parent= FXMLLoader.load(getClass().getResource("../gui/afficherEvent.fxml"));
        Scene home_page_scene = new Scene(home_page_parent);
        Stage app_stage= (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.hide();
        app_stage.setScene(home_page_scene);
        app_stage.show();
    }

    @FXML
    private void gérerArticle(ActionEvent event) {
    }

    @FXML
    private void GérerPublication(ActionEvent event) {
    }

    @FXML
    private void acceuil(ActionEvent event) {
    }

    @FXML
    private void logout(ActionEvent event) {
    }
    
}
