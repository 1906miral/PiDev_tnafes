/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entities.Avis;
import Entities.Reclamation;
import IServices.IReclamation;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import utils.DataSource;

/**
 *
 * @author miral
 */
public class ServiceReclamation implements IServices.IReclamation{
Connection cnx=DataSource.getInstance().getCnx();

    public void ajouter_reclamation(Reclamation t) {
                try{
//            String requete="insert into aviss (id_clientavis,email,rating,contenu_avis) values(?,?,?,?)";
            String requete="insert into reclamationn (message) values(?)";
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setString(1,t.getMessage());
            pst.executeUpdate();
            System.out.println("Réclamation ajouté !");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            }
    }


    public void supprimer_reclamation(Reclamation t) {
         try{
            String requete="delete from reclamationn where id_reclamation=?";
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setInt(1,t.getId_reclamation());
            pst.executeUpdate();
            System.out.println("Réclamation supprimée !");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            }  
    }


    public void modifier_reclamation(Reclamation t) {
                 try{

            String requete="update reclamationn set message=? where id_reclamation=?";
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setInt(2,t.getId_reclamation());
//            pst.setString(1,t.getEmail());
            pst.setString(1,t.getMessage());
            pst.executeUpdate();
            System.out.println("Réclamation modifiée !");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            }
    }

    public List<Reclamation> afficher_reclamation() {
              List<Reclamation> list=new ArrayList<>();
        try{
            String requete="select * from reclamationn";
            PreparedStatement pst=cnx.prepareStatement(requete);
            ResultSet rs=pst.executeQuery();
            while(rs.next()){
                list.add(new Reclamation(rs.getInt(1),/*rs.getInt(2),rs.getString(3),rs.getInt(4),*/rs.getString(2)));
            }
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
        return list;
    }

    public List<Reclamation>chercher_reclamation(String message) {
        String requete="select * from reclamationn where message=?";
        ResultSet rs=null;
        List list=new ArrayList();
        try{
            PreparedStatement ps=cnx.prepareStatement(requete);
            ps.setString(1, message);
            rs=ps.executeQuery();
        }catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
        Reclamation r=new Reclamation();
        try{
            while(rs.next()){
                r.setId_reclamation(rs.getInt("id_reclamation"));
                r.setMessage(rs.getString("message"));
                list.add(new Reclamation(rs.getInt(1), rs.getString(2)));
            }
        }catch(SQLException exc){
             System.err.println(exc.getMessage());
        }
        return list;
    }

    @Override
    public List<Reclamation>trier_reclamation() {
                 List<Reclamation> list=new ArrayList<>();
        try{
            String requete="select * from reclamationn order by id_reclamation asc";
            PreparedStatement pst=cnx.prepareStatement(requete);
            ResultSet rs=pst.executeQuery();
            while(rs.next()){
                list.add(new Reclamation(rs.getInt(1),/*rs.getInt(2),rs.getString(3),rs.getInt(4),*/rs.getString(2)));
            }
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
        return list;
    }
    @Override
    public List<Reclamation> trier_reclamation_desc() {
                     List<Reclamation> list=new ArrayList<>();
        try{
            String requete="select * from reclamationn order by id_reclamation desc";
            PreparedStatement pst=cnx.prepareStatement(requete);
            ResultSet rs=pst.executeQuery();
            while(rs.next()){
                list.add(new Reclamation(rs.getInt(1),/*rs.getInt(2),rs.getString(3),rs.getInt(4),*/rs.getString(2)));
            }
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
        return list;
    }
    @Override
    public int calcul_nbr_reclamation() {
        int nbr_total=0;
        try{
        String requete="select count(*) from reclamationn";
        PreparedStatement pst=cnx.prepareStatement(requete);
        ResultSet rs=pst.executeQuery();
        while(rs.next()){
            nbr_total=rs.getInt(1);
        }
        
        }catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
     
          return nbr_total;     
    }

 


   
    
}
