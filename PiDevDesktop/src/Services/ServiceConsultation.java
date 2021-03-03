/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entities.Consultation;
import Utils.DataSource;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author miral
 */
public class ServiceConsultation implements IServices.IServiceConsultation<Consultation>{
Connection cnx=DataSource.getInstance().getCnx();
    @Override
    
    public void ajouter(Consultation t) {
           try{

            String requete="insert into consultation (id_client,id_coach,date,heure) values(?,?,convert(?,date),convert(?,time))";
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setInt(1,t.getId_client());
            pst.setInt(2,t.getId_coach());
            pst.setString(3,t.getDate());
            pst.setString(4,t.getHeure());
            pst.executeUpdate();
            System.out.println("Consultation ajoutée !");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            }
    }   

    @Override
    public void supprimer(Consultation t) {
 try{
            String requete="delete consultation where id_consultation=?";
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setInt(1,t.getId_consultation());
            pst.executeUpdate();
            System.out.println("Réclamation supprimée !");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            }  
    }

    @Override
    public void modifier(Consultation t) {
         try{

            String requete="update consultation set id_client=?,id_coach=?,date=convert(?,date),heure=convert(?,time) where id_consultation=?";
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setInt(5,t.getId_consultation());
            pst.setInt(1,t.getId_client());
            pst.setInt(2,t.getId_coach());
            pst.setString(3,t.getDate());
            pst.setString(4,t.getHeure());
            pst.executeUpdate();
            System.out.println("Consultation modifiée !");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            }    }

    @Override
    public List<Consultation> afficher() {
            List<Consultation> list=new ArrayList<>();
        try{
            String requete="select * from consultation";
            PreparedStatement pst=cnx.prepareStatement(requete);
            ResultSet rs=pst.executeQuery();
            while(rs.next()){
                list.add(new Consultation(rs.getInt(1),rs.getInt(2),rs.getInt(3),rs.getString(4),rs.getString(5)));
            }
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
        return list;    }
    
}
