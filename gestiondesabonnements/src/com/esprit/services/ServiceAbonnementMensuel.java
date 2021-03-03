/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;

import com.esprit.models.AbonnementMensuel;
import com.esprit.utils.DataSource;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author aissa
 */
public class ServiceAbonnementMensuel implements IService<AbonnementMensuel> {

    Connection cnx = DataSource.getInstance().getCnx();

    @Override
    public void ajouter(AbonnementMensuel t) {
 try {
            String requete = "INSERT INTO abonnement_mensuel (id_abonnement,date_debut,date_fin,prix_mensuel) VALUES (?,CONVERT(?, DATE),CONVERT(?, DATE),?)";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(1,t.getId());
            pst.setString(2,t.getdate_debut());
            pst.setString(3,t.getdate_fin());
            pst.setFloat(4,t.getprix_mensuel());
            pst.executeUpdate();
            System.out.println("Abonnement_annuel ajoutée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void supprimer(AbonnementMensuel t) {
        try {
            String requete = "DELETE FROM abonnement_mensuel WHERE id_abonnement=" + t.getId();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("AbonnementAnnuel supprimée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void modifier(AbonnementMensuel t) {
        try {
            String requete = "UPDATE abonnement_mensuel SET date_debut='" + t.getdate_debut() + "',date_fin='" + t.getdate_fin() + "',prix_mensuel='" + t.getprix_mensuel() + "' WHERE id_abonnement=" + t.getId();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("abonnement_mensuel modifiée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public List<AbonnementMensuel> afficher() {
        List<AbonnementMensuel> list = new ArrayList<>();

        try {
            String requete = "SELECT * FROM abonnement_mensuel";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                list.add(new AbonnementMensuel(rs.getInt(1),rs.getString("date_debut"), rs.getString(2),rs.getFloat(3)));
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

        return list;
    }
}
