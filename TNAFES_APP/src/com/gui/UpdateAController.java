/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gui;

import com.models.activite;
import com.service.ServiceActivite;
import com.utils.DataSource;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import javax.swing.JOptionPane;

/**
 * FXML Controller class
 *
 * @author HP
 */
public class UpdateAController implements Initializable {

    @FXML
    private ComboBox<Integer> comb;
    @FXML
    private TextField titreA;
    @FXML
    private TextField descriptionA;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        ServiceActivite sa = new ServiceActivite();
        List<Integer> l = sa.getID_s();
        ObservableList<Integer>  list = FXCollections.observableArrayList(l);
        comb.setItems(list);
    }    

    @FXML
    private void SelectedId(MouseEvent event) {
        comb.setOnAction(e->{
          String requete="select titre,description from activite where id_activite=?";
          try{
              Connection cnx = DataSource.getInstance().getCnx();
              PreparedStatement pst=cnx.prepareStatement(requete);
              pst.setInt(1,(Integer)comb.getSelectionModel().getSelectedItem());
              ResultSet rs=pst.executeQuery();
              while(rs.next()){
                  titreA.setText(rs.getString("titre"));
                  descriptionA.setText(rs.getString("description"));
              }
          } catch (SQLException ex){
              System.out.println(ex);
          }
           
       }
               
               
               
               
               
               
       
       );
    }

    @FXML
    private void modifierAct(ActionEvent event) {
        ServiceActivite sa = new ServiceActivite();
        sa.modifier(new activite(comb.getSelectionModel().getSelectedItem(),titreA.getText(),descriptionA.getText()));
        JOptionPane.showMessageDialog(null, "activité modifiée !");
    }

    @FXML
    private void retourmenu(ActionEvent event) throws IOException {
        Parent gestionView = FXMLLoader.load(getClass().getResource("menuAct.fxml"));
     Scene gestionViewScene = new Scene(gestionView);
     
     //les informations du stage
     Stage window = (Stage)(((Node)event.getSource()).getScene().getWindow());
     
     window.setScene(gestionViewScene);
     window.show();
    }
    
}
