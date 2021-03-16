/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gui;

import com.models.categorie;
import com.service.ServiceCategorie;
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
public class DeleteCController implements Initializable {

    @FXML
    private ComboBox<Integer> comb;
    @FXML
    private TextField nomC;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        ServiceCategorie sc = new ServiceCategorie();
        List<Integer> l = sc.getID_s();
        ObservableList<Integer>  list = FXCollections.observableArrayList(l);
        comb.setItems(list);
    }    

    @FXML
    private void SelectedId(MouseEvent event) {
        comb.setOnAction(e->{
          String requete="select nom_categorie from categorie where id_categorie=?";
          try{
              Connection cnx = DataSource.getInstance().getCnx();
              PreparedStatement pst=cnx.prepareStatement(requete);
              pst.setInt(1,(Integer)comb.getSelectionModel().getSelectedItem());
              ResultSet rs=pst.executeQuery();
              while(rs.next()){
                  nomC.setText(rs.getString("nom_categorie"));
              }
          } catch (SQLException ex){
              System.out.println(ex);
          }
           
       }
               
               
               
               
               
               
       
       );
    }

    @FXML
    private void supprimerCat(ActionEvent event) {
        ServiceCategorie sc = new ServiceCategorie();
        sc.supprimer(comb.getSelectionModel().getSelectedItem());
        //sc.modifier(new categorie(comb.getSelectionModel().getSelectedItem(),nomC.getText()));
        JOptionPane.showMessageDialog(null, "catégorie supprimée !");
        
    }
    @FXML
    private void retourmenu(ActionEvent event) throws IOException {
        Parent gestionView = FXMLLoader.load(getClass().getResource("menuCat.fxml"));
     Scene gestionViewScene = new Scene(gestionView);
     
     //les informations du stage
     Stage window = (Stage)(((Node)event.getSource()).getScene().getWindow());
     
     window.setScene(gestionViewScene);
     window.show();
    }
    
}
