/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;

import com.esprit.models.Abonnement;
import com.esprit.utils.DataSource;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author aissa
 */
public class ServiceAbonnement implements IService<Abonnement> {

    Connection cnx = DataSource.getInstance().getCnx();

    @Override
    public void ajouter(Abonnement t) {
        try {
            String requete = "INSERT INTO abonnement (date_debut,date_fin) VALUES (?,?)";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setString(1,t.getdate_debut());
            pst.setString(2,t.getdate_fin());
            pst.executeUpdate();
            System.out.println("Abonnement ajoutée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void supprimer(Abonnement t) {
        try {
            String requete = "DELETE FROM abonnement WHERE 	\n" +
"id_abonnement=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(1, t.getId());
            pst.executeUpdate();
            System.out.println("Abonnement supprimée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void modifier(Abonnement t) {
        try {
            String requete = "UPDATE abonnement SET date_debut=?,date_fin=? WHERE id_abonnement=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(3, t.getId());
            pst.setString(1,t.getdate_debut());
            pst.setString(2,t.getdate_fin());
            pst.executeUpdate();
            System.out.println("Abonnement modifiée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public List<Abonnement> afficher() {
        List<Abonnement> list = new ArrayList<>();

        try {
            String requete = "SELECT * FROM abonnement";
            PreparedStatement pst = cnx.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                list.add(new Abonnement(rs.getInt(1), rs.getString("date_debut"), rs.getString(3)));
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

        return list;
    }
    
    public List<Abonnement> trier() {
        List<Abonnement> list = new ArrayList<>();

        try {
            String requete = "SELECT * FROM abonnement order by date_debut";
            PreparedStatement pst = cnx.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                list.add(new Abonnement(rs.getInt(1), rs.getString("date_debut"), rs.getString(3)));
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

        return list;
    }
public List<Abonnement>chercher_abonnement(String date_debut) {
        String requete="select * from abonnement where date_debut=?";
        ResultSet rs=null;
        List list=new ArrayList();
        try{
            PreparedStatement ps=cnx.prepareStatement(requete);
            ps.setString(1, date_debut);
            rs=ps.executeQuery();
        }catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
        Abonnement a=new Abonnement();
        try{
            while(rs.next()){
                a.setId(rs.getInt("id_abonnement"));
                a.setdate_debut(rs.getString("date_debut"));
                list.add(new Abonnement(rs.getInt(1), rs.getString("date_debut"), rs.getString(3)));
            }
        }catch(SQLException exc){
             System.err.println(exc.getMessage());
        }
        return list;
    }
    
}
