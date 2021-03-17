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
public class Publication {
    private int id_pub;
    private String contenu;
    private Timestamp date_publication=Timestamp.valueOf(LocalDateTime.MIN);
    private int id_user;

    public Publication(String contenu,Timestamp date) {
        this.contenu = contenu;
        this.date_publication=date;
    }

    public Publication(int id_pub, String contenu, int id_user,Timestamp date) {
        this.id_pub = id_pub;
        this.contenu = contenu;
        this.id_user = id_user;
        this.date_publication=date;
    }

    public int getId_pub() {
        return id_pub;
    }

    public void setId_pub(int id_pub) {
        this.id_pub = id_pub;
    }

    public String getContenu() {
        return contenu;
    }

    public void setContenu(String contenu) {
        this.contenu = contenu;
    }

    public Timestamp getDate_publication() {
        return date_publication;
    }

    public void setDate_publication(Timestamp date_publication) {
        this.date_publication = date_publication;
    }

    public int getId_user() {
        return id_user;
    }

    public void setId_user(int id_user) {
        this.id_user = id_user;
    }
    
    
}
