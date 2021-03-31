//////////////////////////@made by farouk belhassine @author///////////////////////////////////////////////////////////////////////////////////////

package Controllers;

import java.io.IOException;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import javax.swing.JOptionPane;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import Services.servicesession;
import Services.serviceuser;
import Models.admin;
import Models.coach;
import Models.hash;
import Models.session;
import Models.user;
import javafx.scene.control.PasswordField;

public class logincontroller {


    @FXML
    private TextField tfmail;


   @FXML
   private PasswordField passwordField;
    @FXML
    private Button btnlogin;

    @FXML
    private Button btnsignup;

    @FXML
    private void login(ActionEvent event) throws IOException, ParseException {//ken famma erreur houni tafih yemchi 3adi(Refactor this method to reduce its Cognitive Complexity from 16 to the 15 allowed)
        session se;
        
        
//        servicesession scc = new servicesession();
//        List<coach> listcc = new ArrayList<coach>();
//        listcc = scc.recherchecoach(tfmail.getText());
        servicesession ss = new servicesession();
        List<coach> listc = new ArrayList<coach>();
        listc = ss.recherchecoach(tfmail.getText());
        List<admin> lista = new ArrayList<admin>();
        lista = ss.rechercheadmin(tfmail.getText());
        List<user> listu = new ArrayList<user>();
        serviceuser su = new serviceuser();
        listu = su.rechercheuser(tfmail.getText());
        if(listu.isEmpty()) JOptionPane.showMessageDialog(null, "Le mail que vous avez entré n'appartient à aucun compte. Veuillez vérifier votre mail et réessayer.");//mail 8alet
        else if(!(lista.isEmpty())){//mail mta3 admin
            for (user u : listu) {
                hash h = new hash();
                String pass = h.encryptThisString(passwordField.getText());
                if(pass.equals(u.getPassword())){
                    Boolean permaban = ss.bancheck(tfmail.getText());////////////houni win y4abet fel ban
                    Date dateblock = ss.dateblockcheck(tfmail.getText());////////wala block
                    se = new session(u.getId(),"admin",permaban,dateblock);//////w y9ayadhom
                    se.writetofile();////////////////////////////////////////////fi ficher
                    Parent root = FXMLLoader.load(getClass().getResource("../GUI/Home.fxml"));//li 3andou des fonctions admin yzidhom fel fxml he4i
                    btnlogin.getScene().setRoot(root);
                }
                else JOptionPane.showMessageDialog(null, "Désolé, votre mot de passe est incorrect. Veuillez vérifier votre mot de passe.");
            }
        }
        else if(!(listc.isEmpty())){//mail mta3 coach
            for (user u : listu) {
                hash h = new hash();
                String pass = h.encryptThisString(passwordField.getText());
                if(pass.equals(u.getPassword())){
                    Boolean permaban = ss.bancheck(tfmail.getText());
                    Date dateblock = ss.dateblockcheck(tfmail.getText());
                    se = new session(u.getId(),"coach",permaban,dateblock);
                    se.writetofile();
                    Parent root = FXMLLoader.load(getClass().getResource("../GUI/coachmenu.fxml"));//li 3andou des fonctions coach yzidhom fel fxml he4i
                    btnlogin.getScene().setRoot(root);
                }
                else JOptionPane.showMessageDialog(null, "Désolé, votre mot de passe est incorrect. Veuillez vérifier votre mot de passe.");
            }
        }
        else {
            for (user u : listu) {//mail mta3 client
                hash h = new hash();
                String pass = h.encryptThisString(passwordField.getText());
                if(pass.equals(u.getPassword())){
                    Boolean permaban = ss.bancheck(tfmail.getText());
                    Date dateblock = ss.dateblockcheck(tfmail.getText());
                    se = new session(u.getId(),"client",permaban,dateblock);
                    if(permaban) JOptionPane.showMessageDialog(null, "Accès refusé.");
                    else if(!(permaban)&&dateblock!=null) {
                        DateTimeFormatter dtf = DateTimeFormatter.ofPattern("yyyy/MM/dd");  
                        LocalDateTime now = LocalDateTime.now();
                        Date datelyoum = new SimpleDateFormat("yyyy/MM/dd").parse(dtf.format(now));
                        //DateFormat dateFormat = new SimpleDateFormat("yyyy/mm/dd");
                        //String strDate = dateFormat.format(dateblock);
                        if(dateblock.compareTo(datelyoum)>0) JOptionPane.showMessageDialog(null, "Accès refusé jusqu'au "+dateblock);
                        else {
                            se.writetofile();
                            Parent root = FXMLLoader.load(getClass().getResource("../GUI/acceuil.fxml"));//li 3andou des fonctions client yzidhom fel fxml he4i
                            btnlogin.getScene().setRoot(root);
                            
                        }
                    }
                    else if(!(permaban)&&dateblock==null){
                        se.writetofile();
                        Parent root = FXMLLoader.load(getClass().getResource("../GUI/acceuil.fxml"));//li 3andou des fonctions client yzidhom fel fxml he4i
                        btnlogin.getScene().setRoot(root);
                    }
                }
                else JOptionPane.showMessageDialog(null, "Désolé, votre mot de passe est incorrect. Veuillez vérifier votre mot de passe.");
            }
        }
    }

    @FXML
    private void signup(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/signup.fxml"));
        btnsignup.getScene().setRoot(root);
    }

   public void initialize() {
        assert tfmail != null : "fx:id=\"tfmail\" was not injected: check your FXML file 'login.fxml'.";
        assert passwordField != null : "fx:id=\"tfpassword\" was not injected: check your FXML file 'login.fxml'.";
        assert btnlogin != null : "fx:id=\"btnlogin\" was not injected: check your FXML file 'login.fxml'.";
    }
}
