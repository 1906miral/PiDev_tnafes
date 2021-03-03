/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

/**
 *
 * @author miral
 */
public class Reclamation {
    private int id_reclamation;
//    private int idclient_rec;
//    private String nom_user;
//    private String prenom_user;
//    private String email;
    private String message;
   // private int etat;

    public Reclamation() {
    }

    public Reclamation(/*int idclient_rec, String nom_user, String prenom_user, String email,*/ String message) {
//        this.idclient_rec = idclient_rec;
//        this.nom_user = nom_user;
//        this.prenom_user = prenom_user;
//        this.email = email;
        this.message = message;
    }

    public Reclamation(int id_reclamation, /*int idclient_rec, String nom_user, String prenom_user, String email, */String message) {
        this.id_reclamation = id_reclamation;
//        this.idclient_rec = idclient_rec;
//        this.nom_user = nom_user;
//        this.prenom_user = prenom_user;
//        this.email = email;
        this.message = message;
    }

    public int getId_reclamation() {
        return id_reclamation;
    }

    public void setId_reclamation(int id_reclamation) {
        this.id_reclamation = id_reclamation;
    }

    public String getMessage() {
        return message;
    }

    public void setMessage(String message) {
        this.message = message;
    }

    @Override
    public String toString() {
        return "Reclamation{" + "id_reclamation=" + id_reclamation + ", message=" + message + '}';
    }
    
    
}
