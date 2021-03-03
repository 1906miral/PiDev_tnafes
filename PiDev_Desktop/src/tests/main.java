/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package tests;

import Entities.Avis;
import Entities.Reclamation;
import Services.ServiceAvis;
import Services.ServiceReclamation;
import java.util.Scanner;



/**
 *
 * @author miral
 */
public class main {
    public static void main(String[] args){
        Scanner input=new Scanner(System.in);
        int choix;
        ServiceAvis sa=new ServiceAvis();
        Avis a1=new Avis("miral");
        Avis a2=new Avis("miral");
        Avis a3=new Avis(1,"oooooooooo");
        ServiceReclamation sr=new ServiceReclamation();
        Reclamation r1=new Reclamation("pp");
        Reclamation r2=new Reclamation("miral");
        Reclamation r3=new Reclamation("barhoumi");
        Reclamation r4=new Reclamation(2,"reclamation");
             do
          {
           System.out.println("****<<MENU>>****\n");
           System.out.println("1-Ajouter avis\n");
           System.out.println("2-Supprimer avis\n");
           System.out.println("3-Afficher avis\n");
           System.out.println("4-Modifier avis\n");
            System.out.println("5-Ajouter réclamation\n");
           System.out.println("6-Supprimer réclamation\n");
           System.out.println("7-Afficher réclamation\n");
           System.out.println("8-Modifier réclamation\n");
           System.out.println("9-Chercher réclamation\n");
           System.out.println("10-Trier réclamation par id croissant\n");
           System.out.println("11-Trier réclamation par id décroissant\n");
           System.out.println("12-Calculer nombre total de réclamation\n");
           System.out.println("0-QUITTER\n");
           System.out.println("veuiller saisir votre choix\n");
           choix=input.nextInt();
           switch(choix)
          {
                 case 1:
                       {  
                           sa.ajouter_avis(a1);
                           sa.ajouter_avis(a2);
                         break;
                       }
                 case 2:
                       { 
                           sa.supprimer_avis(a3);
   
                         break;
                       }
                
                 case 3:
                 {
                      sa.afficher_avis().forEach(System.out::println);
                         break;
                 }
                 case 4:
                 {    sa.modifier_avis(a3);
                    break;
                 }
                 case 5:
                 {
                   sr.ajouter_reclamation(r1);
                   sr.ajouter_reclamation(r2);
                   sr.ajouter_reclamation(r3);
                     break;
                 }
                  case 6:
                 {
                     sr.supprimer_reclamation(r2);
                     
                     break;
                 }
                    case 7:
                 {
                     sr.afficher_reclamation().forEach(System.out::println);
                     
                     break;
                 }
                      case 8:
                 {
                     sr.modifier_reclamation(r3);
                     
                     break;
                 }
                      case 9:
                 {
                   sr.chercher_reclamation("miral").forEach(System.out::println);
                   sr.chercher_reclamation("pp").forEach(System.out::println);
                     
                     break;
                 }
                      case 10:
                 {
                          sr.trier_reclamation().forEach(System.out::println);
                                 
                          break;
                 }
                      case 11:
                 {
                           sr.trier_reclamation_desc().forEach(System.out::println);
                          break;
                 }
                      case 12:
                 {
                          int x=sr.calcul_nbr_reclamation();
                          System.out.println("Le nombre total des réclamation est:" +x);
                          break;
                 }
                 case 0:
                       {
                             System.out.println("vous avez choisir de quiter le programme\n");
                             System.out.println("----------------------------------------<< au revoir >>---------------------------------------\n");
                            

                       }
           }
        }while(choix != 0);
    }
}
