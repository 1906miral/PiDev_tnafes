/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.components.InfiniteProgress;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.CheckBox;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.Slider;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.entites.Rate;
import com.mycompany.services.ServiceRate;
import com.mycompany.gui.StarRating;
import java.util.Date;

/**
 *
 * @author yassin
 */
public class AjoutRateForm extends Form {

    Form current;
    StarRating qp, satisfaction, service, globale;
    Label sqp, ssatisfaction, sservice, sglobale;
    Slider sliderQP, sliderGlob, sliderSatisf, sliderServ;

    public AjoutRateForm(Resources res) {
        super("Newsfeed", BoxLayout.y());
        Toolbar tb = new Toolbar(true);
        current = this;
        setToolbar(tb);
        getTitleArea().setUIID("container");
        setTitle("Ajouter Rate");
        getContentPane().setScrollVisible(true);

        TextField idCoach = new TextField("", "Entrer idCoach");
        idCoach.setUIID("textFieldBack");
        addStringValue("idCoach", idCoach);

        TextField NomPrenomCoach = new TextField("", "Entrer Coach");
        NomPrenomCoach.setUIID("textFieldBack");
        addStringValue("NomPrenomCoach", NomPrenomCoach);

        TextField NomEquipe = new TextField("", "Entrer NomEquipe");
        NomEquipe.setUIID("textFieldBack");
        addStringValue("NomEquipe", NomEquipe);

        TextField Rate = new TextField("", "Entrer Rate");
        Rate.setUIID("textFieldBack");
        addStringValue("Rate", Rate);
        
        satisfaction = new StarRating();
                ssatisfaction = new Label();
        sliderSatisf = satisfaction.showStarPickingForm();
        current.add(new Label("Votre Rating"));

        current.add(sliderSatisf);

        sliderSatisf.addActionListener(ev -> {
            ssatisfaction.setText(sliderSatisf.getProgress() + "");
        });
        current.add(ssatisfaction);

        Button btnAjouterRec = new Button("Ajouter");
        addStringValue("", btnAjouterRec);

//        satisfaction = new StarRating();
//        ssatisfaction = new Label();
//        sliderSatisf = satisfaction.showStarPickingForm();
//        current.add(new Label("Note Satisfaction"));
//        current.add(sliderSatisf);
//        sliderSatisf.addActionListener(ev -> {
//        ssatisfaction.setText(sliderSatisf.getProgress() + "");});
//        current.add(ssatisfaction);
        SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");
        //On click button event 
        //    Reclamation r = new Reclamation(CENTER, SujetRec, DescriptionRec, StatusRec, PrioriteRec, NomJoueur, PrenomJoueur, EmailJoueur, TlJoueur, NomPrenomCoach, imgRec, DateRec)
        btnAjouterRec.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {

                Rate r = new Rate((int) Float.parseFloat(
                        idCoach.getText()),
                        format.format(new Date()),
                        NomPrenomCoach.getText(),
                        NomEquipe.getText(),
                        Integer.parseInt(ssatisfaction.getText())
                );
                try {
                    new ServiceRate().addRate(r);
                } catch (Exception ex) {

                }

            }
        });
    }

    private void addStringValue(String s, Component v) {
        add(BorderLayout.west(new Label(s, "FaddedLabel")).add(BorderLayout.CENTER, v));

    }

}
