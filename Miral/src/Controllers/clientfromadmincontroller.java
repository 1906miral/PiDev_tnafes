package Controllers;

import java.io.IOException;
import java.net.URL;
import java.util.Date;
import java.util.List;
import java.util.ResourceBundle;

import javax.swing.JOptionPane;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import Models.client;
import Models.session;
import Models.user;
import Services.serviceclient;
import Services.serviceuser;

public class clientfromadmincontroller {


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
    private TableView<user> tvclient;

    @FXML
    private TableColumn<user, Integer> tvid;

    @FXML
    private TableColumn<user, String> tvnom;

    @FXML
    private TableColumn<user, String> tvprenom;

    @FXML
    private TableColumn<user, String> tvemail;

    @FXML
    private TableColumn<user, Integer> tvnum_tel;

    @FXML
    private TableColumn<user, Boolean> tvperma_ban;

    @FXML
    private TableColumn<user, Date> tvdate_bloc;

    @FXML
    private Button btnaffecter;

    @FXML
    private TextField tfclientid;

    @FXML
    private Button btndesaffecter;

    @FXML
    private TextField tfclientid1;

    @FXML
    private Button btnaffecter1;

    @FXML
    private TextField tfclientid2;

    @FXML
    private DatePicker dpdateblock;

    @FXML
    private Button btndebloquer;

    @FXML
    private TextField tfclientid3;

    @FXML
    private Button btnclient;
    @FXML
    private Button btnReclam;
    @FXML
    private Button btnPub;

    void GérerPublication(ActionEvent event) {

    }

    @FXML
     private void affecterban(ActionEvent event) {
        serviceuser su = new serviceuser();
        int id = Integer.parseInt(tfclientid.getText());//string to int
        su.ban(id, true);
        JOptionPane.showMessageDialog(null, "Client banni !");
    }

    @FXML
     private void affecterbloc(ActionEvent event) {
        serviceuser su = new serviceuser();
        int id = Integer.parseInt(tfclientid2.getText());//string to int
        su.block(id, dpdateblock.getValue().toString());//edate string toul ashel meli tjibha Date
        JOptionPane.showMessageDialog(null, "Client bloqué !");
    }

    @FXML
     private void clickclient(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/ajoutclient.fxml"));
        btnclient.getScene().setRoot(root);
    }

    @FXML
     private void debloquer(ActionEvent event) {
        serviceuser su = new serviceuser();
        int id = Integer.parseInt(tfclientid3.getText());//string to int
        su.block(id,"null");
        JOptionPane.showMessageDialog(null, "Client débloqué !");
    }

    @FXML
    private void desaffecterban(ActionEvent event) {
        serviceuser su = new serviceuser();
        int id = Integer.parseInt(tfclientid1.getText());//string to int
        su.ban(id, false);
        JOptionPane.showMessageDialog(null, "Client réactivé !");
    }

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
    public ObservableList<user> getpeople(){
        serviceuser sc= new serviceuser();
        List<user> listc = sc.allclients();
        ObservableList<user> people = FXCollections.observableArrayList(listc);
        return people;
    }

    public void initialize() {
        
        tvid.setCellValueFactory(new PropertyValueFactory<user, Integer>("id"));
        tvnom.setCellValueFactory(new PropertyValueFactory<user, String>("nom"));
        tvprenom.setCellValueFactory(new PropertyValueFactory<user, String>("prenom"));
        tvemail.setCellValueFactory(new PropertyValueFactory<user, String>("email"));
        tvnum_tel.setCellValueFactory(new PropertyValueFactory<user, Integer>("numtel"));
        tvdate_bloc.setCellValueFactory(new PropertyValueFactory<user, Date>("dateblock"));
        tvperma_ban.setCellValueFactory(new PropertyValueFactory<user, Boolean>("permaban"));

        tvclient.setItems(getpeople());
    }

  
}
