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
public class Consultation {
    private int id_consultation,id_coach,id_client;
    private String date,heure;

    public Consultation(int id_consultation, int id_client, int id_coach, String date, String heure) {
        this.id_consultation = id_consultation;
        this.id_coach = id_coach;
        this.id_client = id_client;
        this.date = date;
        this.heure = heure;
    }

    public Consultation(int id_client, int id_coach, String date, String heure) {
        this.id_coach = id_coach;
        this.id_client = id_client;
        this.date = date;
        this.heure = heure;
    }

    @Override
    public String toString() {
        return "Consultation{" + "id_consultation=" + id_consultation + ", id_coach=" + id_coach + ", id_client=" + id_client + ", date=" + date + ", heure=" + heure + '}';
    }

    public int getId_consultation() {
        return id_consultation;
    }

    public void setId_consultation(int id_consultation) {
        this.id_consultation = id_consultation;
    }

    public int getId_coach() {
        return id_coach;
    }

    public void setId_coach(int id_coach) {
        this.id_coach = id_coach;
    }

    public int getId_client() {
        return id_client;
    }

    public void setId_client(int id_client) {
        this.id_client = id_client;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public String getHeure() {
        return heure;
    }

    public void setHeure(String heure) {
        this.heure = heure;
    }
    
    
}
