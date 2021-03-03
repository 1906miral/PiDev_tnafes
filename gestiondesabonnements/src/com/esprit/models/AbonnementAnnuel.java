/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.models;

/**
 *
 * @author Dell
 */
public class AbonnementAnnuel extends Abonnement {
    private float prix_annuel;
    
    public AbonnementAnnuel(String date_debut, String date_fin,float prix_annuel) {
        super(date_debut, date_fin);
        this.prix_annuel = prix_annuel;
    }
     public float getprix_annuel() {
        return prix_annuel;
    }

    public void setprix_annuel(float prix_annuel) {
        this.prix_annuel = prix_annuel;
    }
    
}
