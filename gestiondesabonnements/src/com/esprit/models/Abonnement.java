/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.models;

/**
 *
 * @author aissa
 */

public class Abonnement {

    private int id;
    private String date_debut;
    private String date_fin;

    public Abonnement(int id,String date_debut, String date_fin) {
        this.id = id;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
   
    }

    public Abonnement(String date_debut, String date_fin) {
        this.date_debut = date_debut;
        this.date_fin = date_fin;
        
    }

    public Abonnement() {}

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getdate_debut() {
        return date_debut;
    }

    public void setdate_debut(String date_debut) {
        this.date_debut = date_debut;
    }

    public String getdate_fin() {
        return date_fin;
    }
      public void setdate_fin(String date_fin) {
        this.date_debut = date_fin;
    }



    @Override
    public String toString() {
        return "Abonnement{" + "id=" + id + ", date_debut=" + date_debut + ", date_fin=" + date_fin + '}';
    }
}
