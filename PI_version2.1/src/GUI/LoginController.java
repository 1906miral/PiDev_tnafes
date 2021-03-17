/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.scene.layout.AnchorPane;
import javax.swing.JOptionPane;
import utils.DataSource;

/**
 * FXML Controller class
 *
 * @author miral
 */ 

public class LoginController implements Initializable {

    @FXML
    private AnchorPane login;
    @FXML
    private TextField email_login;
    @FXML
    private TextField mdp_login;
    @FXML
    private Button login_btn;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
         
    }    

    @FXML
    private void login(ActionEvent event) throws IOException {
        Connection cnx=DataSource.getInstance().getCnx();
        String req="select * from compte where login=? and password=?";
        try {
            PreparedStatement pst=cnx.prepareStatement(req);
            pst.setString(1,email_login.getText().toString());
            pst.setString(2,mdp_login.getText().toString());
            ResultSet rs=pst.executeQuery();
            if(rs.next()){
                JOptionPane.showMessageDialog(null,"Connection");
                FXMLLoader loader=new FXMLLoader(getClass().getResource("EnvoyerReclamation.fxml"));
                Parent root=loader.load();
                EnvoyerReclamationController evr=loader.getController();
                login_btn.getScene().setRoot(root);
            }else{
                JOptionPane.showMessageDialog(null,"login ou mot de passe incorrect");
            }
            
                  
        } catch (SQLException ex) {
            Logger.getLogger(LoginController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
}
