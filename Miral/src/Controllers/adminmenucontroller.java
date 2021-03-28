//////////////////////////@made by farouk belhassine @author///////////////////////////////////////////////////////////////////////////////////////

package Controllers;

import java.io.IOException;
import java.net.URL;
import java.util.Date;
import java.util.List;
import java.util.ResourceBundle;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import Models.admin;
import Models.session;
import Services.serviceadmin;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;

public class adminmenucontroller {

    @FXML
    private TableView<admin> tvadmin;

    @FXML
    private TableColumn<admin, String> tvnom;

    @FXML
    private TableColumn<admin, String> tvprenom;

    @FXML
    private TableColumn<admin, String> tvemail;

    @FXML
    private TableColumn<admin, Integer> tvnum_tel;


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
    private Button btnAcceuil;


    @FXML
    private Button btncoach;

    @FXML
    private Button btnEvent;

    @FXML
    private Button btnCateg;

    @FXML
    private Button btnmodifier;

    @FXML
    private Button btncategEvent;

    @FXML
    private Button btnParticipation;

    @FXML
    private Button btnArticle;
    @FXML
    private Button btnReclam;
    @FXML
    private Button btnPub;

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
     private void gérerCategevent(ActionEvent event) {

    }

    @FXML
     private void gérerEvent(ActionEvent event) {

    }

    @FXML
     private void gérerParticipation(ActionEvent event) {

    }
      @FXML
    private void GérerReclamation(ActionEvent event) throws IOException {
        
                FXMLLoader loader=new FXMLLoader(getClass().getResource("../GUI/Reclamations.fxml"));
                Parent root=loader.load();
                ReclamationsController rc=loader.getController();
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
     private void modifieradmin(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/modifieradmin.fxml"));
        btnmodifier.getScene().setRoot(root);
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

    public ObservableList<admin> getpeople(){
        serviceadmin sc= new serviceadmin();
        List<admin> listc = sc.afficher();
        ObservableList<admin> people = FXCollections.observableArrayList(listc);
        return people;
    }

     public void initialize() {
        tvnom.setCellValueFactory(new PropertyValueFactory<admin, String>("nom"));
        tvprenom.setCellValueFactory(new PropertyValueFactory<admin, String>("prenom"));
        tvemail.setCellValueFactory(new PropertyValueFactory<admin, String>("email"));
        tvnum_tel.setCellValueFactory(new PropertyValueFactory<admin, Integer>("numtel"));

        tvadmin.setItems(getpeople());
    }


}
