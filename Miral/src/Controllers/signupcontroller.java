//////////////////////////@made by farouk belhassine @author///////////////////////////////////////////////////////////////////////////////////////

package Controllers;

import Models.client;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javax.swing.JOptionPane;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import Services.serviceclient;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.Button;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;

public class signupcontroller {


    @FXML
    private TextField tfnom;

    @FXML
    private TextField tfprenom;

    @FXML
    private TextField tfemail;

    @FXML
    private TextField tfnum_tel;

   @FXML
   private PasswordField passwordField;

    @FXML
    private Button btnajout;

    @FXML
    private Button btnretour;

    @FXML
   private  void ajouterclient(ActionEvent event) {
        int inum = Integer.parseInt(tfnum_tel.getText());//string to int
        client cl = new client(tfnom.getText(),tfprenom.getText(),tfemail.getText(),inum,passwordField.getText());
        serviceclient sc= new serviceclient();
        sc.ajouter(cl);
        JOptionPane.showMessageDialog(null, "Compte ajouté !");
    }

    @FXML
    private void retourmenuclient(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("../GUI/login.fxml"));
        btnretour.getScene().setRoot(root);
    }

  public  void initialize() {
        assert tfnom != null : "fx:id=\"tfnom\" was not injected: check your FXML file 'signup.fxml'.";
        assert tfprenom != null : "fx:id=\"tfprenom\" was not injected: check your FXML file 'signup.fxml'.";
        assert tfemail != null : "fx:id=\"tfemail\" was not injected: check your FXML file 'signup.fxml'.";
        assert tfnum_tel != null : "fx:id=\"tfnum_tel\" was not injected: check your FXML file 'signup.fxml'.";
        assert passwordField != null : "fx:id=\"tfpassword1\" was not injected: check your FXML file 'signup.fxml'.";
        assert btnajout != null : "fx:id=\"btnajout\" was not injected: check your FXML file 'signup.fxml'.";
        assert btnretour != null : "fx:id=\"btnretour\" was not injected: check your FXML file 'signup.fxml'.";
    }
}


