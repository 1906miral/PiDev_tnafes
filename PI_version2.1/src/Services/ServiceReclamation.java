/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entities.Reclamation;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Timestamp;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.Collection;
import java.util.Collections;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import utils.DataSource;

/**
 *
 * @author miral
 */
public class ServiceReclamation implements IServices.IReclamation{
Connection cnx=DataSource.getInstance().getCnx();
 List<Reclamation> list=new ArrayList<>();
@Override
    public void ajouter_reclamation(Reclamation t) {
//         Calendar c = Calendar.getInstance();
//         Timestamp ts = new Timestamp(c.getTimeInMillis());
                try{
            String requete="insert into reclamation (idclient_rec,nom_user,prenom_user,email,description,objet,etat,date) values(?,?,?,?,?,?,?,CURRENT_TIMESTAMP())";
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setInt(1,t.getId().getId());
            pst.setString(2,t.getId().getNom());
            pst.setString(3,t.getId().getPrenom());
            pst.setString(4,t.getId().getEmail());
            pst.setString(5,t.getDescription());
            pst.setString(6,t.getObjet());
            pst.setString(7,"Non traitée");
//            pst.setTimestamp(8,ts);
            pst.executeUpdate();
            System.out.println("Réclamation ajoutée !");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            }
    }



    public void modifier_reclamation(Reclamation t) {
                 try{

            String requete="update reclamation set etat=?,date_traitement=CURRENT_TIMESTAMP() where id_reclamation=?";
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setInt(2,t.getId_reclamation());
            pst.setString(1,t.getEtat());
            pst.executeUpdate();
            System.out.println("Réclamation modifiée !");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            }
    }

    public List<Reclamation> afficher_reclamation() {
             
        try{

             String requete="select * from reclamation";
            PreparedStatement pst=cnx.prepareStatement(requete);
            ResultSet rs=pst.executeQuery();
            while(rs.next()){
             
            list.add(new Reclamation(rs.getInt("id_reclamation"),rs.getString("nom_user"), rs.getString("prenom_user"), rs.getString("email"), rs.getString("objet"),rs.getString("description"),rs.getString("etat"),rs.getDate("date"),rs.getDate("date_traitement")));
             
            }
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
        return list;
    }


@Override
public void trierReclamationparEtat(List<Reclamation> l){
    
    Collections.sort(l,new Reclamation());
}
@Override
 public void trierReclamationparDate(List<Reclamation> l){
   
    Collections.sort(l);
}
@Override
public void trierReclamationparEtatdesc(List<Reclamation> l){
    
    Collections.reverseOrder(new Reclamation());
}
@Override
 public void trierReclamationparDatedesc(List<Reclamation> l){
   
    Collections.reverse(l);
}

   
    
}
