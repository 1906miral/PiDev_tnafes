/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.tests;

import com.models.activite;
import com.service.ServiceCategorie;
import com.models.categorie;
import com.service.ServiceActivite;
import java.util.ArrayList;
import java.util.List;
import  java.util.Scanner;

/**
 *
 * @author HP
 */
public class Main {
    
    public static void main(String[] args) {
         ServiceCategorie sc = new ServiceCategorie();
         //ServiceActivite sa = new ServiceActivite();
         //sa.afficher().forEach(e->System.out.print(e));
         //sa.modifier(new activite(5,"act2","desc"));
         //sa.ajouter(new activite("activite2","bbbbbbb"));
         //sa.supprimer(4);
//        //sc.ajouter(new categorie( "salim"));
//        categorie c1=new categorie("mahdi");
//////        sc.ajouter(c1);
//        //sc.afficher().forEach(e->System.out.println(e));
//        sc.supprimer(1);
//        sc.afficher().forEach(e->System.out.println(e));
        Scanner scanner= new Scanner(System.in);
        int choix;
        do{
        System.out.println("*********TNAFFES*********");
        System.out.println("1-Ajouter une catégorie");
        System.out.println("2-Afficher une catégorie");
        System.out.println("3-Supprimer une catégorie");
        System.out.println("4-Modifier une catégorie");
        System.out.println("5-Chercher une catégorie");
        System.out.println("6-Trier les catégories selon leur nom");
        System.out.println("0-Quittez");
        System.out.println("");
        System.out.println("Entrez votre choix");
        choix=scanner.nextInt();
        Scanner scan= new Scanner(System.in);
        Scanner scan1= new Scanner(System.in);
        Scanner scan2= new Scanner(System.in);
        List<categorie> list = new ArrayList<>();
        switch(choix) {
  case 1:
      System.out.println("---entrez le nom de la catégorie : ");
      String name = scan.nextLine();
      System.out.println("");
       list=sc.rechercher(name);
       if(list.isEmpty()){
      categorie c=new categorie(name);
      sc.ajouter(c);
      System.out.println("");}
       else System.out.println("catégorie existe déja");
       System.out.println("");
      
    break;
  case 2:
    sc.afficher().forEach(e->System.out.println(e));
    System.out.println("");
    break;
    case 3:
    sc.afficher().forEach(e->System.out.println(e));
    System.out.println("");
    System.out.println("---choisir l'id de la catégorie a supprimée");
    int n = scan.nextInt();
    sc.supprimer(n);
    System.out.println("");
    System.out.println("---Table aprés suppression");
    System.out.println("");
    sc.afficher().forEach(e->System.out.println(e));
    System.out.println("");
    
    
        
    break;
    case 4:
    sc.afficher().forEach(e->System.out.println(e));
    System.out.println("");
    System.out.println("---choisir l'id de la catégorie a modifiée");
    int n1 = scan.nextInt();
    System.out.println("---choisir le nouveau nom de la catégorie");
    String n2 = scan1.nextLine();
    sc.modifier(new categorie(n1,n2));
    System.out.println("");
    System.out.println("---Table aprés modification");
    System.out.println("");
    sc.afficher().forEach(e->System.out.println(e));
    System.out.println("");
    break;
    case 0:
        System.out.println("BYE!!!");
    break;
    case 5:
        //sc.afficher().forEach(e->System.out.println(e));
    System.out.println("");
    System.out.println("---choisir le nom de la catégorie a cherchéé");
    String n3 = scan2.nextLine();
    list=sc.rechercher(n3);
    for(categorie cat:list){
        System.out.println(cat);
    }
        System.out.println("");
        break;
    case 6:
        sc.trier().forEach(e->System.out.println(e));
        System.out.println("");
        break;
  
}
        }while(choix!=0);     
        
        
        
        
       
    }
}
