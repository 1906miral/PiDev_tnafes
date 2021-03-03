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
public class AbonnementMensuel extends Abonnement{
    private float prix_Mensuel;
    public AbonnementMensuel(String date_debut, String date_fin,float prix_Mensuel) {
        super(date_debut, date_fin);
    }
        public float getprix_Mensuel() {
        return prix_Mensuel;
    }

    public void setId(float prix_Mensuel) {
        this.prix_Mensuel = prix_Mensuel;
    }
}
