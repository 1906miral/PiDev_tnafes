/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Reclamation;
import Entities.Utilisateur;
import Services.ServiceReclamation;
import java.io.IOException;
import java.net.URL;
import java.sql.Timestamp;
import java.time.LocalDateTime;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author miral
 */
public class EnvoyerReclamationController implements Initializable {

    @FXML
    private TextField objet_rec;
    @FXML
    private TextArea desc_rec;

    /**
     * Initializes the controller class.
     */
    Services.ServiceReclamation sr=new ServiceReclamation();
    Utilisateur user=new Utilisateur(4,"Cherni","Eya","eya.cherni@esprit.tn");
    Reclamation r=new Reclamation(user);
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void envoyer_reclamation(ActionEvent event) throws IOException {
        sr.ajouter_reclamation(new Reclamation(user,objet_rec.getText(),desc_rec.getText(),r.getDate()));
        FXMLLoader loader=new FXMLLoader(getClass().getResource("GérerLesReclamations.fxml"));
        Parent root=loader.load();
        GérerLesReclamationsController gr=loader.getController();
        objet_rec.getScene().setRoot(root);
    }
    
}
