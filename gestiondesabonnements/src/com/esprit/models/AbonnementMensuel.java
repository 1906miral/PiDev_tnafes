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
    private float prix_mensuel;
    public AbonnementMensuel(int id_abonnement,String date_debut, String date_fin,float prix_mensuel) {
        super(id_abonnement,date_debut, date_fin);
    }
        public float getprix_mensuel() {
        return prix_mensuel;
    }

    public void setId(float prix_mensuel) {
        this.prix_mensuel = prix_mensuel;
    }
}
