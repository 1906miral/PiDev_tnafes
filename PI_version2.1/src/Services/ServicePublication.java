/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entities.Publication;
import Entities.Reclamation;
import IServices.IPublication;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Timestamp;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.List;
import utils.DataSource;

/**
 *
 * @author miral
 */
public class ServicePublication implements IServices.IPublication{
Connection cnx=DataSource.getInstance().getCnx();
    @Override
    public void ajouter_pub(Publication t) {
            Calendar c = Calendar.getInstance();
        Timestamp ts = new Timestamp(c.getTimeInMillis());
        try{
            String requete="insert into publication (contenu,date_publication) values(?,?)";
//            String requete="insert into aviss (contenu_avis) values(?)";
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setString(1,t.getContenu());
            pst.setTimestamp(2, ts);
           pst.executeUpdate();
            System.out.println("Publication ajoutée !");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            }
    }

    @Override
    public void supprimer_pub(Publication t) {
         try{
            String requete="delete from publication where id_publication=?";
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setInt(1,t.getId_pub());
            pst.executeUpdate();
            System.out.println("Publication supprimée !");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            }  
    }

    @Override
    public void modifier_avis(Publication t) {
          Calendar c = Calendar.getInstance();
        Timestamp ts = new Timestamp(c.getTimeInMillis());
            try{

            String requete="update publication set contenu=? date_publication=? where id_publication=?";
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setInt(2,t.getId_pub());
            pst.setString(1,t.getContenu());
            pst.setTimestamp(3,ts);
            pst.executeUpdate();
            System.out.println("Réclamation modifiée !");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            }    }

    @Override
    public List<Publication> afficher_avis() {
                    List<Publication> list=new ArrayList<>();
        try{

             String requete="select contenu,date_publication from publication";
            PreparedStatement pst=cnx.prepareStatement(requete);
            ResultSet rs=pst.executeQuery();
            while(rs.next()){
              list.add(new Publication(rs.getString("contenu"),rs.getTimestamp("date_publication")));
            }
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
        return list;
    }
    
}
