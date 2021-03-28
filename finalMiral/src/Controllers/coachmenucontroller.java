package Controllers;

import java.io.FileNotFoundException;
import java.io.IOException;
import java.net.URL;
import java.text.ParseException;
import java.util.List;
import java.util.ResourceBundle;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import Models.coach;
import Models.session;
import Services.servicecoach;

public class coachmenucontroller {


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
    private Button btncategEvent;

    @FXML
    private Button btnParticipation;

    @FXML
    private Button btnArticle;

    @FXML
    private Button btnmodifier;

    @FXML
    private TableView<coach> tvcoach;


    @FXML
    private TableColumn<coach, String> tvnom;

    @FXML
    private TableColumn<coach, String> tvprenom;

    @FXML
    private TableColumn<coach, String> tvemail;

    @FXML
    private TableColumn<coach, Integer> tvnum_tel;

    @FXML
    private TableColumn<coach, String> tvrole;

    @FXML
    private TableColumn<coach, Float> tvsalaire;
    @FXML
    private Button btnReclam;
    @FXML
    private Button btnPub;

    @FXML
    private void displayCustomers(ActionEvent event) {

    }

    @FXML
    private void gererAbonnement(ActionEvent event) {

    }

    @FXML
    private void gerercateg(ActionEvent event) {

    }

    @FXML
   private  void gérerActivite(ActionEvent event) {

    }

    @FXML
    private void gérerArticle(ActionEvent event) {

    }

    @FXML
    private void gérerCategevent(ActionEvent event) {

    }

    @FXML
    private void gérerCoach(ActionEvent event) {

    }

    @FXML
    private void gérerEvent(ActionEvent event) {

    }

    @FXML
    private void gérerParticipation(ActionEvent event) {

    }

    @FXML
   private  void modifiercoach(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/modifiercoach.fxml"));
        btnmodifier.getScene().setRoot(root);
    }

    @FXML
    private void settings_security(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/settings.fxml"));
        btnSettings.getScene().setRoot(root);
    }

    @FXML
   private  void acceuil(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/coachmenu.fxml"));
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
    public ObservableList<coach> getpeople() throws FileNotFoundException, ParseException{
        session se = new session();
        se.readfromfile();
        servicecoach sc= new servicecoach();
        List<coach> listc = sc.affichercecoach(se.getid());
        ObservableList<coach> people = FXCollections.observableArrayList(listc);
        return people;
    }

   public void initialize() throws FileNotFoundException, ParseException {
        tvnom.setCellValueFactory(new PropertyValueFactory<coach, String>("nom"));
        tvprenom.setCellValueFactory(new PropertyValueFactory<coach, String>("prenom"));
        tvemail.setCellValueFactory(new PropertyValueFactory<coach, String>("email"));
        tvnum_tel.setCellValueFactory(new PropertyValueFactory<coach, Integer>("numtel"));
        tvrole.setCellValueFactory(new PropertyValueFactory<coach, String>("role"));
        tvsalaire.setCellValueFactory(new PropertyValueFactory<coach, Float>("salaire"));

        tvcoach.setItems(getpeople());
    }

 
}
