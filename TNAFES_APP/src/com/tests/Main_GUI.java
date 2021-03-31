/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.tests;

import java.io.IOException;
import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;

/**
 *
 * @author HP
 */
public class Main_GUI extends Application {
    
    @Override
    public void start(Stage primaryStage) throws IOException {
//FXMLLoader loader= new FXMLLoader(getClass().getResource("../gui/deleteC.fxml"));       
//FXMLLoader loader= new FXMLLoader(getClass().getResource("../gui/afficherC.fxml"));
FXMLLoader loader= new FXMLLoader(getClass().getResource("../gui/Home.fxml"));
Parent root= loader.load();

Scene scene = new Scene(root);
primaryStage.setTitle("TNAFES");
primaryStage.setScene(scene);
primaryStage.show();

//Parent root = FXMLLoader.load(getClass().getResource("../gui/AjoutCategorie.fxml"));
//Scene scene = new Scene(root);
//primaryStage.setScene(new Scene(root));
//primaryStage.show();
//Scene scene = new Scene(root);


    }

    /**
     * @param args the command line arguments 
     */
    public static void main(String[] args) {
        launch(args);
    }
    
}
