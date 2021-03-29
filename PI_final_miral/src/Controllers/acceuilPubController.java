/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controllers;

import APIs.BadWordsFilter;
import static Controllers.acceuilController.selectedpub;
import Models.Avis;
import Models.Commentaire;
import Models.Publication;
import Models.session;
import Models.user;
import Services.ServiceAvis;
import Services.ServiceCommentaire;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.text.ParseException;
import java.util.List;
import java.util.Optional;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Label;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.stage.FileChooser;
import javafx.util.Callback;
import javafx.util.Duration;
import org.controlsfx.control.Notifications;
import org.controlsfx.control.Rating;

/**
 * FXML Controller class
 *
 * @author miral
 */
public class acceuilPubController implements Initializable {

    String path;
    File selectedfile;
     public static FileChooser fc = new FileChooser();
     static Commentaire selectedcomment;
    @FXML
    private TableView<Commentaire> tableViewComment;
    @FXML
    private TableColumn<Commentaire,String> col_nom;
    @FXML
    private TableColumn<Commentaire,String>  col_prenom;
    @FXML
    private TableColumn<Commentaire,String>  col_comment;
    @FXML
    private TableColumn<Commentaire,Date> col_date;
    @FXML
    private TextField comment;
    @FXML
    private Label labelDate;
    @FXML
    private TextArea contenu_update;
    @FXML
    private ImageView image_update;

    /**
     * Initializes the controller class.
     */
    Services.ServiceCommentaire sc=new ServiceCommentaire();
    Services.ServiceAvis sa=new ServiceAvis();
    @FXML
    private Rating ratePub;
    @FXML
    private Label labelavis;
   
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
         List<Commentaire> lc=sc.afficher_commentaire(acceuilController.selectedpub.getId_pub());
        ObservableList<Commentaire> datacomment=FXCollections.observableArrayList(lc);
        col_nom.setCellValueFactory(new  PropertyValueFactory<>("nom_client"));
        col_prenom.setCellValueFactory(new  PropertyValueFactory<>("prenom_client"));
        col_comment.setCellValueFactory(new  PropertyValueFactory<>("contenu_comment"));
        col_date.setCellValueFactory(new  PropertyValueFactory<>("datecomment"));
        tableViewComment.setItems(datacomment);
            labelDate.setText("Publiée le:"+acceuilController.selectedpub.getDate_publication());
        contenu_update.setText(acceuilController.selectedpub.getContenu());
        image_update.setImage(acceuilController.selectedpub.getImg().getImage());
          ratePub.ratingProperty().addListener(new ChangeListener<Number>() {
            @Override
            public void changed(ObservableValue<? extends Number> observable, Number oldValue, Number newValue) {
                 labelavis.setText("Avis:"+newValue);
               
            }
        }); 

    }    

    @FXML
    private void commenter(ActionEvent event) throws IOException, ParseException {
        session se=new session();
        user user=se.returnuser();
        String output = BadWordsFilter.getCensoredText(comment.getText());
      
         List<Commentaire> lc=sc.afficher_commentaire(acceuilController.selectedpub.getId_pub());
        ObservableList<Commentaire> datacomment=FXCollections.observableArrayList(lc);
        tableViewComment.setItems(datacomment);
        if(ratePub.getRating()==0){
               Notifications n = Notifications.create()
                    .title("Erreur")
                    .text("Veuillez donner une note pour la publication!")
                    .graphic(null)
                    .position(Pos.TOP_CENTER)
                    .hideAfter(Duration.seconds(5));
            n.showWarning();
        } else{
             sc.ajouter_commentaire(new Commentaire(output,user,acceuilController.selectedpub));
            sa.ajouter_avis(new Avis(user,ratePub,acceuilController.selectedpub));
        }
        
 
        
    }
    private user returnconnectedUser() throws IOException, ParseException{
    session se=new session();
    user user=se.returnuser();
    return user;
}
}
