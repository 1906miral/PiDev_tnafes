/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.models;

import java.sql.Timestamp;
import java.time.LocalDateTime;

/**
 *
 * @author HP
 */
public class activite {
    private int id_activite;
    private int id_categorie;
    private int id_coachact;
    private String titre;
    private Timestamp date_pub=Timestamp.valueOf(LocalDateTime.MIN);
    private String description;

    public activite(String titre, String description) {
        this.titre = titre;
        this.description = description;
    }

    public activite(int id_activite, String titre, String description) {
        this.id_activite = id_activite;
        this.titre = titre;
        this.description = description;
    }
    
    

    public activite(int id_activite, int id_categorie, int id_coachact, String titre,Timestamp date_pub, String description) {
        this.id_activite = id_activite;
        this.id_categorie = id_categorie;
        this.id_coachact = id_coachact;
        this.date_pub=date_pub;
        this.titre = titre;
        this.description = description;
    }

    public activite(int id_categorie, int id_coachact, String titre, String description) {
        this.id_categorie = id_categorie;
        this.id_coachact = id_coachact;
        this.titre = titre;
        this.description = description;
    }

    public int getId_activite() {
        return id_activite;
    }

    public void setId_activite(int id_activite) {
        this.id_activite = id_activite;
    }

    public int getId_categorie() {
        return id_categorie;
    }

    public void setId_categorie(int id_categorie) {
        this.id_categorie = id_categorie;
    }

    public int getId_coachact() {
        return id_coachact;
    }

    public void setId_coachact(int id_coachact) {
        this.id_coachact = id_coachact;
    }

    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    @Override
    public String toString() {
        return "activite{" + "id_activite=" + id_activite + ", id_categorie=" + id_categorie + ", id_coachact=" + id_coachact + ", titre=" + titre + ", date_pub=" + date_pub + ", description=" + description + '}';
    }
    
    
    
    
}
