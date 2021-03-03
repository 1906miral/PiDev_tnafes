/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;

import com.esprit.models.AbonnementAnnuel;
import com.esprit.utils.DataSource;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author aissa
 */
public class ServiceAbonnementAnnuel implements IService<AbonnementAnnuel> {

    Connection cnx = DataSource.getInstance().getCnx();

    @Override
    public void ajouter(AbonnementAnnuel t) {
        try {
            String requete = "INSERT INTO abonnement_annuel (date_debut,date_fin,prix_annuel) VALUES ('" + t.getdate_debut() + "','" + t.getdate_fin() + "','" + t.getprix_annuel() + "')";
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("abonnement_annuel ajoutée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void supprimer(AbonnementAnnuel t) {
        try {
            String requete = "DELETE FROM abonnement_annuel WHERE id_abonnement=" + t.getId();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("AbonnementAnnuel supprimée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void modifier(AbonnementAnnuel t) {
        try {
            String requete = "UPDATE abonnement_annuel SET date_debut='" + t.getdate_debut() + "',date_fin='" + t.getdate_fin() + "',prix_annuel='" + t.getprix_annuel() + "' WHERE id_abonnement=" + t.getId();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("abonnement_annuel modifiée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public List<AbonnementAnnuel> afficher() {
        List<AbonnementAnnuel> list = new ArrayList<>();

        try {
            String requete = "SELECT * FROM abonnement_annuel";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                list.add(new AbonnementAnnuel(rs.getString("date_debut"), rs.getString(2),rs.getFloat(3)));
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

        return list;
    }
}
