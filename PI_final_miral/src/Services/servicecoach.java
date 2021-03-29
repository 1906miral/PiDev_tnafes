//////////////////////////@made by farouk belhassine @author///////////////////////////////////////////////////////////////////////////////////////

package Services;

import Models.coach;
import Models.hash;
import Models.user;
import Utils.DataSource;
import java.sql.Connection;
import java.sql.Statement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class servicecoach implements IServiceUser<coach> {
    Connection cnx = DataSource.getInstance().getCnx();

    public void modifierbycoach(coach t) {
        try {
            String requete = "UPDATE utilisateur SET nom='"+t.getNom()+"',prenom='"+t.getPrenom()+"',email='"+t.getEmail()+"',numtel="+t.getNumtel()+" WHERE id="+t.getId();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        try {
            String requete = "UPDATE coach SET nom='"+t.getNom()+"',prenom='"+t.getPrenom()+"',email='"+t.getEmail()+"',numtel="+t.getNumtel()+" WHERE id_coach="+t.getId();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("coach modifiée !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    coach recherchecoach(int id) {
        coach cl = new coach(0,"","","",0,"","",0);//just in case tableau fera8 bch na3ref chna3mel
        try {
            String requete = "SELECT * FROM coach WHERE id_coach="+id;
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                cl = new coach(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4),rs.getInt(5),rs.getString(6),rs.getString(7),rs.getFloat(8));
                return cl;
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return cl;
    }

    public List<coach> affichercecoach(int id) {
        List<coach> list = new ArrayList<>();

        try {
            String requete = "SELECT * FROM coach WHERE id_coach="+id;
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                list.add(new coach(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4),rs.getInt(5),"",rs.getString(6),rs.getFloat(7)));
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }

    @Override
    public void ajouter(coach t) {
        try {
            hash h = new hash();
            String pass = h.encryptThisString(t.getPassword());
            String requete = "INSERT INTO utilisateur (nom,prenom,email,numtel,password,perma_ban) VALUES ('"+t.getNom()+"','"+t.getPrenom()+"','"+t.getEmail()+"',"+t.getNumtel()+",'"+pass+"',false)";
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            List<user> listu = new ArrayList<user>();
            serviceuser su = new serviceuser();
            listu = su.rechercheuser(t.getEmail());
            for (user u : listu){
                requete = "INSERT INTO coach (id_coach,nom,prenom,email,numtel,role,salaire) VALUES ("+u.getId()+",'"+t.getNom()+"','"+t.getPrenom()+"','"+t.getEmail()+"',"+t.getNumtel()+",'"+t.getRole()+"',"+t.getSalaire()+")";
                st = cnx.createStatement();
                st.executeUpdate(requete);
            }
            System.out.println("coach ajoutée !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void supprimer(coach t) {
        try {
            String requete = "DELETE FROM utilisateur WHERE id="+t.getId();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            requete = "DELETE FROM coach WHERE id_coach="+t.getId();
            st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("coach supprimée !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void modifier(coach t) {
        try {
            String requete = "UPDATE utilisateur SET nom='"+t.getNom()+"',prenom='"+t.getPrenom()+"',email='"+t.getEmail()+"',numtel="+t.getNumtel()+" WHERE id="+t.getId();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        try {
            String requete = "UPDATE coach SET nom='"+t.getNom()+"',prenom='"+t.getPrenom()+"',email='"+t.getEmail()+"',numtel="+t.getNumtel()+",role='"+t.getRole()+"' ,salaire="+t.getSalaire()+" WHERE id_coach="+t.getId();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("coach modifiée !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public List<coach> afficher() {
        List<coach> list = new ArrayList<>();

        try {
            String requete = "SELECT * FROM coach";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                list.add(new coach(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4),rs.getInt(5),"",rs.getString(6),rs.getFloat(7)));
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }
}
