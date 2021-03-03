/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Tests;

import Entities.Consultation;
import Services.ServiceConsultation;
import java.util.Scanner;

/**
 *
 * @author miral
 */
public class main {
    public static void main(String[] args)
    {
          Scanner input=new Scanner(System.in);
        int choix;
        ServiceConsultation sc=new ServiceConsultation();
        Consultation c1=new Consultation(1,1,"2010-01-02","9:00:00");
        Consultation c2=new Consultation(2,1,"2020-01-01","8:00:00");
        Consultation c3=new Consultation(1,1, 1,"2010-01-02","9:00:00");//pour supprimer c1
        Consultation c4=new Consultation(2,2,1,"2020-01-01","8:00:00");//pour modifier c2
               do
          {
           System.out.println("****<<MENU>>****\n");
           System.out.println("1-Ajouter consultation\n");
           System.out.println("2-Supprimer consultation\n");
           System.out.println("3-Afficher consultation\n");
           System.out.println("4-Modifier consultation\n");
           System.out.println("0-QUITTER\n");
           System.out.println("veuiller saisir votre choix\n");
           choix=input.nextInt();
           switch(choix)
          {
                 case 1:
                       {  
                          sc.ajouter(c1);
                         break;
                       }
                 case 2:
                       { 
                          sc.supprimer(c3);
                       
                         break;
                       }
                
                 case 3:
                 {
                       sc.afficher().forEach(System.out::println);
                         break;
                 }
                 case 4:
                 {    sc.modifier(c4);
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
