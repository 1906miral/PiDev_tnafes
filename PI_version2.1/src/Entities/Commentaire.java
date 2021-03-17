/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import java.sql.Timestamp;

/**
 *
 * @author miral
 */
public class Commentaire {
    private int id_comment;
    private String contenu_comment;
    private int idclient_comment;
    private int idpub;
    private Timestamp datecomment;

    public Commentaire(int id_comment, String contenu_comment, Timestamp datecomment) {
        this.id_comment = id_comment;
        this.contenu_comment = contenu_comment;
        this.datecomment = datecomment;
    }

    public Commentaire(String contenu_comment, Timestamp datecomment) {
        this.contenu_comment = contenu_comment;
        this.datecomment = datecomment;
    }

    public int getId_comment() {
        return id_comment;
    }

    public void setId_comment(int id_comment) {
        this.id_comment = id_comment;
    }

    public String getContenu_comment() {
        return contenu_comment;
    }

    public void setContenu_comment(String contenu_comment) {
        this.contenu_comment = contenu_comment;
    }

    public int getIdclient_comment() {
        return idclient_comment;
    }

    public void setIdclient_comment(int idclient_comment) {
        this.idclient_comment = idclient_comment;
    }

    public int getIdpub() {
        return idpub;
    }

    public void setIdpub(int idpub) {
        this.idpub = idpub;
    }

    public Timestamp getDatecomment() {
        return datecomment;
    }

    public void setDatecomment(Timestamp datecomment) {
        this.datecomment = datecomment;
    }
    
}
