/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entities.Commentaire;
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
public class ServiceCommentaire implements IServices.ICommentaire{

 Connection cnx=DataSource.getInstance().getCnx();
    @Override
    public void ajouter_pub(Commentaire t) {
            Calendar c = Calendar.getInstance();
        Timestamp ts = new Timestamp(c.getTimeInMillis());
        try{
            String requete="insert into commentaire (contenu_comment,datecomment) values(?,?)";
//            String requete="insert into aviss (contenu_avis) values(?)";
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setString(1,t.getContenu_comment());
            pst.setTimestamp(2, ts);
           pst.executeUpdate();
            System.out.println("Commentaire ajouté !");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            }
    }

    @Override
    public void supprimer_pub(Commentaire t) {
         try{
            String requete="delete from commentaire where id_comment=?";
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setInt(1,t.getId_comment());
            pst.executeUpdate();
            System.out.println("Commentaire supprimé !");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            }  
    }

    @Override
    public void modifier_avis(Commentaire t) {
          Calendar c = Calendar.getInstance();
        Timestamp ts = new Timestamp(c.getTimeInMillis());
            try{

            String requete="update publication set contenu_comment=? datecomment=? where id_comment=?";
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setInt(2,t.getId_comment());
            pst.setString(1,t.getContenu_comment());
            pst.setTimestamp(3,ts);
            pst.executeUpdate();
            System.out.println("Commentaire modifié !");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            }    }

    @Override
    public List<Commentaire> afficher_avis() {
                    List<Commentaire> list=new ArrayList<>();
        try{

             String requete="select contenu,date_publication from publication";
            PreparedStatement pst=cnx.prepareStatement(requete);
            ResultSet rs=pst.executeQuery();
            while(rs.next()){
              list.add(new Commentaire(rs.getString("contenu_comment"),rs.getTimestamp("datecomment")));
            }
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
        return list;
    }
    
}
