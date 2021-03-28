//////////////////////////@made by farouk belhassine @author///////////////////////////////////////////////////////////////////////////////////////

package Controllers;

import java.io.IOException;
import java.net.URL;
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
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import Models.client;
import Models.session;
import Services.serviceclient;

public class ajoutclientcontroller {


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
    private TableView<client> tvclient;

    @FXML
    private TableColumn<client, Integer> tvid;

    @FXML
    private TableColumn<client, String> tvnom;

    @FXML
    private TableColumn<client, String> tvprenom;

    @FXML
    private TableColumn<client, String> tvemail;

    @FXML
    private TableColumn<client, Integer> tvnum_tel;

    @FXML
    private TextField tfnom;

    @FXML
    private TextField tfprenom;

    @FXML
    private TextField tfemail;

    @FXML
    private TextField tfnum_tel;

    @FXML
    private TextField tfpassword;

    @FXML
    private Button btnajout;
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
     private void ajouterclient(ActionEvent event) {
        int inum = Integer.parseInt(tfnum_tel.getText());//string to int
        client cl = new client(tfnom.getText(),tfprenom.getText(),tfemail.getText(),inum,tfpassword.getText());
        serviceclient sc= new serviceclient();
        sc.ajouter(cl);
        JOptionPane.showMessageDialog(null, "client ajouté !");
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
        Parent root = FXMLLoader.load(getClass().getResource("../fxml/login.fxml"));
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
    public ObservableList<client> getpeople(){
        serviceclient sc= new serviceclient();
        //List<coach> listc = new ArrayList<coach>();
        List<client> listc = sc.afficher();
        ObservableList<client> people = FXCollections.observableArrayList(listc);
        return people;
    }

     public void initialize() {
        tvid.setCellValueFactory(new PropertyValueFactory<client, Integer>("id"));
        tvnom.setCellValueFactory(new PropertyValueFactory<client, String>("nom"));
        tvprenom.setCellValueFactory(new PropertyValueFactory<client, String>("prenom"));
        tvemail.setCellValueFactory(new PropertyValueFactory<client, String>("email"));
        tvnum_tel.setCellValueFactory(new PropertyValueFactory<client, Integer>("numtel"));

        tvclient.setItems(getpeople());
    }

}


