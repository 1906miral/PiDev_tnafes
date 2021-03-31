/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gui;

//export





import com.itextpdf.text.BaseColor;
import com.itextpdf.text.pdf.PdfWriter;
import com.models.activite;
import com.service.ServiceActivite;
import com.utils.DataSource;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URISyntaxException;
import java.net.URL;
import java.sql.Connection;
import java.sql.Timestamp;
//import java.util.Date;
import java.sql.Date;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;
import javafx.stage.Stage;
import javafx.util.Callback;
import javax.swing.JOptionPane;
//import javax.swing.text.Document;
import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;
import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.Phrase;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import java.util.ArrayList;
import javafx.scene.control.ComboBox;
import javafx.scene.input.MouseEvent;

/**
 * FXML Controller class
 *
 * @author HP
 */
public class AfficherAController implements Initializable {
    
    @FXML
    private TextField STitre;
    @FXML
    private TableView<activite> tableA;
    @FXML
    private TableColumn<activite, String> titre;
    @FXML
    private TableColumn<activite, String> description;
    @FXML
    private TableColumn<activite, Date> date;
    @FXML
    private TableColumn delCol;
    @FXML
    private TableColumn<activite, String> nomCat;
    @FXML
    private ComboBox<String> comb;
    
    

    /**
     * Initializes the controller class. 
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        //lt : list tri
         List<String> lt = new ArrayList();
         lt.add("ascendant");
         lt.add("descendant");
        ObservableList<String>  list = FXCollections.observableArrayList(lt);
        comb.setItems(list);
         //comb.setItems(FXCollections.observableArrayList("ascendant,descendant"));
        //affichage a l'entrée
         ServiceActivite sa = new ServiceActivite();
        List<activite> l = sa.afficher();
        ObservableList<activite> data =FXCollections.observableArrayList(l);
        
        titre.setCellValueFactory(new PropertyValueFactory<activite, String>("titre"));
        description.setCellValueFactory(new PropertyValueFactory<activite, String>("description"));
        date.setCellValueFactory(new PropertyValueFactory<activite, Date>("date"));
        nomCat.setCellValueFactory(new PropertyValueFactory<activite, String>("nomcat"));
        //BOUTTON DE SUPPRESSION
        //creation du cell factory pour inserer le boutton dans chaque ligne
        Callback<TableColumn<activite,String>, TableCell<activite,String>> cellFactory =(param) -> {
          final TableCell<activite,String> cell=new TableCell<activite,String>(){
          
          //override de la methode updateItem
         @Override
         public void updateItem(String item,boolean empty){
             super.updateItem(item, empty);
             if (empty) {
                 setGraphic(null);
                 setText(null);
             }
                else{
                // creation du boutton
                final Button deleteButton = new Button("supprimer");
                //liaison avec listener
                
                 setGraphic(deleteButton);
                 setText(null);
                 deleteButton.setOnAction(e -> {
                     //extraire les infos de la ligne selectionnée
                     activite act = getTableView().getItems().get(getIndex());
                     sa.supprimer(act.getId_activite());
                     JOptionPane.showMessageDialog(null, "activité supprimée !");
                 });
             }
            };
          };  
            return cell;   
        };
        delCol.setCellFactory(cellFactory);
        
        tableA.setItems(data);
        
        
        
        
        ////////////////////////////////////////////////
        
        //modification au niveau du tableview (methode onEditChangeT et onEditChangeTD)
        tableA.setEditable(true);
        titre.setCellFactory(TextFieldTableCell.forTableColumn());
        description.setCellFactory(TextFieldTableCell.forTableColumn());
        
        //recherche dynamique 
            FilteredList<activite> filteredData = new FilteredList<> (data,b -> true);
          STitre.textProperty().addListener((Observable, oldValue , newValue)-> {
              filteredData.setPredicate(event-> {
              if(newValue == null || newValue.isEmpty()) {
                  return true;
              }
              
                      String lowerCaseFilter = newValue.toLowerCase();
                      if(event.getTitre().toLowerCase().indexOf(lowerCaseFilter) != -1){return true;}
                      else if (event.getDescription().toLowerCase().indexOf(lowerCaseFilter) != -1){return true;}
                      else return false;
            
          });
          });
          SortedList<activite> sorteddata = new SortedList<>(filteredData);
          sorteddata.comparatorProperty().bind(tableA.comparatorProperty());
          tableA.setItems(sorteddata);
        
        
//        FilteredList<activite> filterData = new FilteredList<>(data ,e->true);
//        STitre.textProperty().addListener((Observable, oldValue, newValue)-> {
//            filterData.setPredicate(activite-> {
//                if(newValue == null || newValue.isEmpty()){
//                    return true;
//                }
//                
//                String lowerCaseFilter = newValue.toLowerCase();
//                
//                if(activite.)
//                    
//                    return false;
//                
//            });
//        });
    } 
//    FilteredList<event> filteredData = new FilteredList<> (datalist,b -> true);
//          field_search.textProperty().addListener((Observable, oldValue , newValue)-> {
//              filteredData.setPredicate(event-> {
//              if(newValue == null || newValue.isEmpty()) {
//                  return true;
//              }
//              
//                      String lowerCaseFilter = newValue.toLowerCase();
//                      if(event.getLieu().toLowerCase().indexOf(lowerCaseFilter) != -1){return true;}
//                      else return false;
//            
//          });
//          });
//          SortedList<event> sorteddata = new SortedList<>(filteredData);
//          sorteddata.comparatorProperty().bind(table.comparatorProperty());
//          table.setItems(sorteddata);

    @FXML
    private void display(ActionEvent event) {
        ServiceActivite sa = new ServiceActivite();
        List<activite> l = sa.afficher();
        ObservableList<activite> data =FXCollections.observableArrayList(l);
        
        titre.setCellValueFactory(new PropertyValueFactory<activite, String>("titre"));
        description.setCellValueFactory(new PropertyValueFactory<activite, String>("description"));
        nomCat.setCellValueFactory(new PropertyValueFactory<activite, String>("nomcat"));
        tableA.setItems(data);
    }
    //TRI ASCENDANT
//    @FXML
//    private void displayOrder(ActionEvent event) {
//        ServiceActivite sa = new ServiceActivite();
//        List<activite> l = sa.trier();
//        ObservableList<activite> data =FXCollections.observableArrayList(l);
//        
//        titre.setCellValueFactory(new PropertyValueFactory<activite, String>("titre"));
//        description.setCellValueFactory(new PropertyValueFactory<activite, String>("description"));
//        nomCat.setCellValueFactory(new PropertyValueFactory<activite, String>("nomcat"));
//        tableA.setItems(data);
//    }
    //TRI DESENDANT
//    @FXML
//    private void displayOrder1(ActionEvent event) {
//        ServiceActivite sa = new ServiceActivite();
//        List<activite> l = sa.trier1();
//        ObservableList<activite> data =FXCollections.observableArrayList(l);
//        
//        titre.setCellValueFactory(new PropertyValueFactory<activite, String>("titre"));
//        description.setCellValueFactory(new PropertyValueFactory<activite, String>("description"));
//        nomCat.setCellValueFactory(new PropertyValueFactory<activite, String>("nomcat"));
//        tableA.setItems(data);
//    } 
    
//    @FXML
//    private void search(ActionEvent event) {
//        ServiceActivite sa = new ServiceActivite();
//        List<activite> l = sa.rechercher(STitre.getText());
//        ObservableList<activite> data =FXCollections.observableArrayList(l);
//        
//        titre.setCellValueFactory(new PropertyValueFactory<activite, String>("titre"));
//        description.setCellValueFactory(new PropertyValueFactory<activite, String>("description"));
//        tableA.setItems(data);
//    }
    ////////// exporting
    @FXML
    public void exportExcel() throws SQLException, FileNotFoundException, IOException{
        Connection cnx = DataSource.getInstance().getCnx();
        String query = "Select * from activite";
         PreparedStatement pst = cnx.prepareStatement(query);
            ResultSet rs = pst.executeQuery();
            
            
            XSSFWorkbook wb = new XSSFWorkbook();
            XSSFSheet sheet = wb.createSheet("Détails Activités");
            XSSFRow header = sheet.createRow(0);
            header.createCell(0).setCellValue("nomCat");
            header.createCell(1).setCellValue("titre");
            header.createCell(2).setCellValue("description");
            header.createCell(3).setCellValue("date");
            
            int index = 1;
            while(rs.next()){
                XSSFRow row = sheet.createRow(index);
                row.createCell(0).setCellValue(rs.getString("nomCat"));
                row.createCell(1).setCellValue(rs.getString("titre"));
                row.createCell(2).setCellValue(rs.getString("description"));
                row.createCell(3).setCellValue(rs.getString("date"));
                index++;
            }
            
            FileOutputStream file = new FileOutputStream("Détails Activités.xlsx");
            wb.write(file);
            file.close();
            
            Alert alert = new Alert(AlertType.INFORMATION);
            alert.setTitle("Information Dialog");
            alert.setHeaderText(null);
            alert.setContentText("Exportation effectuée!!!");
            alert.showAndWait();
            pst.close();
            rs.close();
    }
    
    
    ////////PDF
    @FXML
    private void exportPDF(ActionEvent event) throws ClassNotFoundException, ClassNotFoundException, SQLException, IOException, URISyntaxException, DocumentException {
        try {
              Class.forName("com.mysql.jdbc.Driver");
                  Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/tnafes", "root", "");
      PreparedStatement pt = con.prepareStatement("select * from activite");
            ResultSet rs = pt.executeQuery();
            
                       /* Step-2: Initialize PDF documents - logical objects */

                       Document my_pdf_report = new Document() {};

                       PdfWriter.getInstance(my_pdf_report, new FileOutputStream("pdf_report_from_sql_using_java.pdf"));
                       
                        my_pdf_report.open();  
//                       my_pdf_report.add(new Paragraph(new Date().toString()));
//                            Image img = Image.getInstance("c:/6.png");
//                            my_pdf_report.add(img);
                             my_pdf_report.add(new Paragraph("ACTIVITES"));
                       my_pdf_report.addCreationDate();
              
                       
                       //we have four columns in our table
                       PdfPTable my_report_table = new PdfPTable(4);
                             
                       //create a cell object
                       PdfPCell table_cell;
                       
                       
                                       table_cell=new PdfPCell(new Phrase(" nomCat"));
                                      table_cell.setBackgroundColor(BaseColor.WHITE);
                                       my_report_table.addCell(table_cell);
                                       table_cell=new PdfPCell(new Phrase("titre"));
                                       table_cell.setBackgroundColor(BaseColor.WHITE);
                                       my_report_table.addCell(table_cell);
                                       table_cell=new PdfPCell(new Phrase("description"));
                                       table_cell.setBackgroundColor(BaseColor.WHITE);
                                       my_report_table.addCell(table_cell);
                                       table_cell=new PdfPCell(new Phrase("date"));
                                       table_cell.setBackgroundColor(BaseColor.WHITE);
                                       my_report_table.addCell(table_cell);
                                       
                                       

                                      while(rs.next()){
                                      
                                       String nom= rs.getString("nomCat");
                                       table_cell=new PdfPCell(new Phrase(nom));
                                       my_report_table.addCell(table_cell);
                                       String titre=rs.getString("titre");
                                       table_cell=new PdfPCell(new Phrase(titre));
                                       my_report_table.addCell(table_cell);
                                       String desc=rs.getString("description");
                                       table_cell=new PdfPCell(new Phrase(desc));
                                       my_report_table.addCell(table_cell);
                                       String d=rs.getString("date");
                                       table_cell=new PdfPCell(new Phrase(d));
                                       my_report_table.addCell(table_cell);
                                        
                       }
                       /* Attach report table to PDF */
                       
                       my_pdf_report.add(my_report_table); 
                       
             System.out.println(my_pdf_report);
                       my_pdf_report.close();
                       JOptionPane.showMessageDialog(null, "impression effectuée");

                       /* Close all DB related objects */
                       rs.close();
                       pt.close(); 
                       con.close();               


       } catch (FileNotFoundException e) {
       // TODO Auto-generated catch block
       e.printStackTrace();
       }


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
    @FXML
    public void onEditChangeT(TableColumn.CellEditEvent<activite,String> activiteStringCellEditEvent){ 
        activite act=tableA.getSelectionModel().getSelectedItem();
        act.setTitre(activiteStringCellEditEvent.getNewValue());
        ServiceActivite sa = new ServiceActivite();
        
        sa.modifier(new activite(act.getId_activite(),act.getTitre(),act.getDescription()));
    }
    
    @FXML
    public void onEditChangeTD(TableColumn.CellEditEvent<activite,String> activiteStringCellEditEvent){
        activite act=tableA.getSelectionModel().getSelectedItem();
        act.setDescription(activiteStringCellEditEvent.getNewValue());
        ServiceActivite sa = new ServiceActivite();
        
        sa.modifier(new activite(act.getId_activite(),act.getTitre(),act.getDescription()));
    }
    
    @FXML
    private void SelectedTri(ActionEvent event) {
      ServiceActivite sa = new ServiceActivite();
      String tri=  (String)comb.getSelectionModel().getSelectedItem();
      if(tri.equals("ascendant")){
          
        List<activite> l = sa.trier();
        ObservableList<activite> data =FXCollections.observableArrayList(l);
        
        titre.setCellValueFactory(new PropertyValueFactory<activite, String>("titre"));
        description.setCellValueFactory(new PropertyValueFactory<activite, String>("description"));
        nomCat.setCellValueFactory(new PropertyValueFactory<activite, String>("nomcat"));
        tableA.setItems(data);
      }
      else {
          List<activite> l = sa.trier1();
        ObservableList<activite> data =FXCollections.observableArrayList(l);
        
        titre.setCellValueFactory(new PropertyValueFactory<activite, String>("titre"));
        description.setCellValueFactory(new PropertyValueFactory<activite, String>("description"));
        nomCat.setCellValueFactory(new PropertyValueFactory<activite, String>("nomcat"));
        tableA.setItems(data);
      }
      
        
    }
    
    
    
    @FXML
    private void logout(ActionEvent event) {
    }

    @FXML
    private void settings_security(ActionEvent event) {
    }

    @FXML
    private void gérerActivite(ActionEvent event) throws IOException {
         Parent gestionView = FXMLLoader.load(getClass().getResource("menuAct.fxml"));
     Scene gestionViewScene = new Scene(gestionView);
     
     //les informations du stage
     Stage window = (Stage)(((Node)event.getSource()).getScene().getWindow());
     
     window.setScene(gestionViewScene);
     window.show();
    }

    @FXML
    private void gererAbonnement(ActionEvent event) {
    }

    @FXML
    private void displayCustomers(ActionEvent event) {
    }

    @FXML
    private void GérerPublication(ActionEvent event) {
    }

    @FXML
    private void acceuil(ActionEvent event) {
    }

    @FXML
    private void gérerCoach(ActionEvent event) throws IOException {
        
    }

    @FXML
    private void gérerEvent(ActionEvent event) {
    }

    @FXML
    private void gerercateg(ActionEvent event) throws IOException {
          Parent gestionView = FXMLLoader.load(getClass().getResource("menuCat.fxml"));
     Scene gestionViewScene = new Scene(gestionView);
     
     //les informations du stage
     Stage window = (Stage)(((Node)event.getSource()).getScene().getWindow());
     
     window.setScene(gestionViewScene);
     window.show();
    }

    @FXML
    private void gérerCategevent(ActionEvent event) {
    }

    @FXML
    private void gérerParticipation(ActionEvent event) {
    }

    @FXML
    private void gérerArticle(ActionEvent event) throws IOException {
         Parent gestionView = FXMLLoader.load(getClass().getResource("menuArt.fxml"));
     Scene gestionViewScene = new Scene(gestionView);
     
     //les informations du stage
     Stage window = (Stage)(((Node)event.getSource()).getScene().getWindow());
     
     window.setScene(gestionViewScene);
     window.show();
    }
}
