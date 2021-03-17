/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import java.sql.Timestamp;
import java.time.LocalDateTime;

/**
 *
 * @author miral
 */
public class Avis {
    private int id_avis;
    private int idclient_avis;
    private String email;
    private int rating;
    private String contenu_avis;
    private final Timestamp date_avis=Timestamp.valueOf(LocalDateTime.MIN);
    public Avis(int id_avis, int idclient_avis, String email, int rating,String contenu_avis) {
        this.id_avis = id_avis;
        this.idclient_avis = idclient_avis;
        this.email = email;
        this.rating = rating;
        this.contenu_avis = contenu_avis;
    }

    public Avis(int idclient_avis, String email, int rating,String contenu_avis) {
        this.idclient_avis = idclient_avis;
        this.email = email;
        this.rating = rating;
        this.contenu_avis = contenu_avis;
    }



    public int getId_avis() {
        return id_avis;
    }

    public void setId_avis(int id_avis) {
        this.id_avis = id_avis;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getContenu_avis() {
        return contenu_avis;
    }

    public void setContenu_avis(String contenu_avis) {
        this.contenu_avis = contenu_avis;
    }

    public int getIdclient_avis() {
        return idclient_avis;
    }

    public void setIdclient_avis(int idclient_avis) {
        this.idclient_avis = idclient_avis;
    }

    public int getRating() {
        return rating;
    }

    public void setRating(int rating) {
        this.rating = rating;
    }

    @Override
    public String toString() {
        return "Avis{" + "id_avis=" + id_avis + ", contenu_avis=" + contenu_avis + '}';
    }
    
}
