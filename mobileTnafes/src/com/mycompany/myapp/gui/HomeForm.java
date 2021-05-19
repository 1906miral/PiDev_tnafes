/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;

/**
 *
 * @author bhk
 */
public class HomeForm extends Form {

    Form current;
    /*Garder traçe de la Form en cours pour la passer en paramètres 
    aux interfaces suivantes pour pouvoir y revenir plus tard en utilisant
    la méthode showBack*/
    
    public HomeForm(Form previous) {
        current = this; //Récupération de l'interface(Form) en cours
        setTitle("Home");
        setLayout(BoxLayout.y());

        add(new Label("Choix"));
        Button btnAddCategorie = new Button("Ajouter catégorie");
        Button btnListCategorie = new Button("Lister catégories");
         Button btnListArticle = new Button("Lister articles");

        btnAddCategorie.addActionListener(e -> new AddCategorieForm(current).show());
        btnListCategorie.addActionListener(e -> new ListCategoriesForm(current).show());
        btnListArticle.addActionListener(e -> new ListArticleForm(current).show());
        addAll(btnAddCategorie, btnListCategorie,btnListArticle);

    }

}
