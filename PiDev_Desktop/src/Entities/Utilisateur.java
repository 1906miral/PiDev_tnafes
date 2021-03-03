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
public class Utilisateur {
    private int id;
    private String nom;
    private String email;
    private int numtel;

    public Utilisateur(String nom, String email, int numtel) {
        this.nom = nom;
        this.email = email;
        this.numtel = numtel;
    }

    public Utilisateur(int id, String nom, String email, int numtel) {
        this.id = id;
        this.nom = nom;
        this.email = email;
        this.numtel = numtel;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public int getNumtel() {
        return numtel;
    }

    public void setNumtel(int numtel) {
        this.numtel = numtel;
    }
    
    
}
