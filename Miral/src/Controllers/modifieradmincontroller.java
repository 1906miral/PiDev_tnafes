//////////////////////////@made by farouk belhassine @author///////////////////////////////////////////////////////////////////////////////////////

package Controllers;

import java.io.FileNotFoundException;
import java.io.IOException;
import java.net.URL;
import java.text.ParseException;
import java.util.ResourceBundle;
import javax.swing.JOptionPane;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import Models.admin;
import Models.session;
import Services.serviceadmin;

public class modifieradmincontroller {


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

    @FXML
    private Button btnmodifier;

    @FXML
    private TextField tfnom;

    @FXML
    private TextField tfprenom;

    @FXML
    private TextField tfemail;

    @FXML
    private TextField tfnum_tel;
    @FXML
    private Button btnReclam;

    @FXML
    private void gererAbonnement(ActionEvent event) {

    }

    @FXML
    private void gerercateg(ActionEvent event) {

    }

    @FXML
    private void gérerActivite(ActionEvent event) {

    }

    @FXML
    private void gérerArticle(ActionEvent event) {

    }

    @FXML
   private  void gérerCategevent(ActionEvent event) {

    }

    @FXML
    private void gérerEvent(ActionEvent event) {

    }

    @FXML
   private  void gérerParticipation(ActionEvent event) {

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
   private  void displayCustomers(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/clientfromadminmenu.fxml"));
        btnCustomers.getScene().setRoot(root);
    }

    @FXML
    private void acceuil(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/adminmenu.fxml"));
        btnAcceuil.getScene().setRoot(root);
    }

    @FXML
    private void logout(ActionEvent event) throws IOException {
        session s = new session();
        s.deletefile();
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/login.fxml"));
        btnSignout.getScene().setRoot(root);
    }

    @FXML
    private void GérerReclamation(ActionEvent event) throws IOException {
        
                FXMLLoader loader=new FXMLLoader(getClass().getResource("../GUI/Reclamations.fxml"));
                Parent root=loader.load();
                ReclamationsController gr=loader.getController();
                btnAbonnement.getScene().setRoot(root);
    }
      @FXML
    private void GererPub(ActionEvent event) throws IOException {
        FXMLLoader loader=new FXMLLoader(getClass().getResource("../GUI/AfficherPublication.fxml"));
        Parent root=loader.load();
        AfficherPublicationController rc=loader.getController();
        btnAbonnement.getScene().setRoot(root);
    }
    @FXML
    private void modifieradmin(ActionEvent event) throws FileNotFoundException, ParseException {
        session se = new session();
        se.readfromfile();
        int inum = Integer.parseInt(tfnum_tel.getText());
        serviceadmin sc = new serviceadmin();
        admin a = new admin(se.getid(),tfnom.getText(),tfprenom.getText(),tfemail.getText(),inum,"");
        sc.modifier(a);
        JOptionPane.showMessageDialog(null, "Admin modifié !");
    }

  public  void initialize() {
        assert btnSignout != null : "fx:id=\"btnSignout\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert btnSettings != null : "fx:id=\"btnSettings\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert btnActivity != null : "fx:id=\"btnActivity\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert btnAbonnement != null : "fx:id=\"btnAbonnement\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert btnCustomers != null : "fx:id=\"btnCustomers\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert btnPub != null : "fx:id=\"btnPub\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert btnAcceuil != null : "fx:id=\"btnAcceuil\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert btnOrders1 != null : "fx:id=\"btnOrders1\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert btncoach != null : "fx:id=\"btncoach\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert btnEvent != null : "fx:id=\"btnEvent\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert btnCateg != null : "fx:id=\"btnCateg\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert btncategEvent != null : "fx:id=\"btncategEvent\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert btnParticipation != null : "fx:id=\"btnParticipation\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert btnArticle != null : "fx:id=\"btnArticle\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert btnmodifier != null : "fx:id=\"btnmodifier\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert tfnom != null : "fx:id=\"tfnom\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert tfprenom != null : "fx:id=\"tfprenom\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert tfemail != null : "fx:id=\"tfemail\" was not injected: check your FXML file 'modifieradmin.fxml'.";
        assert tfnum_tel != null : "fx:id=\"tfnum_tel\" was not injected: check your FXML file 'modifieradmin.fxml'.";

    }

}
