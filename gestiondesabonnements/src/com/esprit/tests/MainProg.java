/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.tests;
import com.esprit.models.Abonnement;
import com.esprit.services.ServiceAbonnement;
import com.esprit.models.AbonnementAnnuel;
import com.esprit.services.ServiceAbonnementAnnuel;
import com.esprit.models.AbonnementMensuel;
import com.esprit.services.ServiceAbonnementMensuel;
import com.esprit.utils.DataSource;
import java.util.Scanner;

/**
 *
 * @author aissa
 */
public class MainProg {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        ServiceAbonnement sp = new ServiceAbonnement();
        ServiceAbonnementAnnuel sa = new ServiceAbonnementAnnuel();
        ServiceAbonnementMensuel sm = new ServiceAbonnementMensuel();
        Abonnement a1 = new Abonnement("2020-10-20","2021-10-20");
        Abonnement a2 = new Abonnement("2020-11-20","2021-11-20");
        Abonnement a3 = new Abonnement(12,"2020-12-20","2021-12-20");
        AbonnementAnnuel a4 = new AbonnementAnnuel(48,"2020-12-20","2021-12-20",200);
        AbonnementMensuel a5 = new AbonnementMensuel(49,"2020-12-20","2021-12-20",300);
        DataSource ds = new DataSource();
        Scanner input=new Scanner(System.in);
        int choix;
        
             do
          {
           System.out.println("****<<MENU>>****\n");
           System.out.println("1-Ajouter abonnement\n");
           System.out.println("2-Supprimer abonnement\n");
           System.out.println("3-Afficher abonnement\n");
           System.out.println("4-chercher abonnement\n");
           System.out.println("5-trier abonnement\n");
           System.out.println("6-Modifier abonnement\n");
           System.out.println("0-QUITTER\n");
           System.out.println("veuiller saisir votre choix\n");
           choix=input.nextInt();
           switch(choix)
          {
                 case 1:
                       {  
                         sp.ajouter(a1);
                         sp.ajouter(a2);
                         sp.ajouter(a3);
                         sa.ajouter(a4);
                         sm.ajouter(a5);
                         sp.afficher().forEach(System.out::println);
                         
                  
                     
                         break;
                       }
                 case 2:
                        sp.supprimer(a3);
                        sa.supprimer(a4);
                        sp.afficher().forEach(System.out::println);
                       { 
                          
            
                           
                         break;
                       }
                
                 case 3:
                      
                      sp.afficher().forEach(System.out::println);
                 {
                      
                         break;
                 }
                 case 4:
                      sp.chercher_abonnement("2020-10-20").forEach(System.out::println);
                 {
                    break;
                 }
                 case 5:
                      
                 {
                    sp.trier().forEach(System.out::println);
                    break;
                 }
                 case 6:
                      sp.modifier(new Abonnement(44,"2030-12-20","2040-12-20"));
                 {
                    break;
                 }
                 case 0:
                       {
                             System.out.println("vous avez choisir de quiter le programme\n");
                             System.out.println("----------------------------------------<< au revoir >>---------------------------------------\n");
                             

                       }
           }
        }while(choix != 4);
    }
    }
    

