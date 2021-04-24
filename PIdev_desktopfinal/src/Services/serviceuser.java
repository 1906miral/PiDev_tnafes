//////////////////////////@made by farouk belhassine @author///////////////////////////////////////////////////////////////////////////////////////

package Services;

import Models.user;
import Utils.DataSource;
import java.sql.Connection;
import java.sql.Statement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class serviceuser {
    Connection cnx = DataSource.getInstance().getCnx();

    public List<user> rechercheuser(String email) {
        List<user> list = new ArrayList<>();
        try {
            String requete = "SELECT * FROM utilisateur WHERE email='"+email+"'";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                list.add(new user(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4),rs.getInt(5),rs.getString(6)));
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }

    public List<user> rechercheuser(int id) {
        List<user> list = new ArrayList<>();
        try {
            String requete = "SELECT * FROM utilisateur WHERE id="+id;
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                list.add(new user(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4),rs.getInt(5),rs.getString(6)));
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }

    public List<user> trimailclient() {
        List<user> list = new ArrayList<>();
        try {
            String requete = "select * from utilisateur INNER JOIN client on utilisateur.id=client.id_client ORDER BY client.email";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                list.add(new user(rs.getInt("id"), rs.getString("nom"), rs.getString("prenom"), rs.getString("email"),rs.getInt("numtel"),rs.getString("password"),rs.getBoolean("perma_ban"),rs.getDate("date_block")));
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }

    public List<user> trinomclient() {
        List<user> list = new ArrayList<>();
        try {
            String requete = "select * from utilisateur INNER JOIN client on utilisateur.id=client.id_client ORDER BY client.nom";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                list.add(new user(rs.getInt("id"), rs.getString("nom"), rs.getString("prenom"), rs.getString("email"),rs.getInt("numtel"),rs.getString("password"),rs.getBoolean("perma_ban"),rs.getDate("date_block")));
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }

    public List<user> triprenomclient() {
        List<user> list = new ArrayList<>();
        try {
            String requete = "select * from utilisateur INNER JOIN client on utilisateur.id=client.id_client ORDER BY client.prenom";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                list.add(new user(rs.getInt("id"), rs.getString("nom"), rs.getString("prenom"), rs.getString("email"),rs.getInt("numtel"),rs.getString("password"),rs.getBoolean("perma_ban"),rs.getDate("date_block")));
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }

    public List<user> triidclient() {
        List<user> list = new ArrayList<>();
        try {
            String requete = "select * from utilisateur INNER JOIN client on utilisateur.id=client.id_client ORDER BY client.id_client";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                list.add(new user(rs.getInt("id"), rs.getString("nom"), rs.getString("prenom"), rs.getString("email"),rs.getInt("numtel"),rs.getString("password"),rs.getBoolean("perma_ban"),rs.getDate("date_block")));
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }

    public List<user> allclients() {
        List<user> list = new ArrayList<>();
        try {
            String requete = "select * from utilisateur INNER JOIN client on utilisateur.id=client.id_client";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                list.add(new user(rs.getInt("id"), rs.getString("nom"), rs.getString("prenom"), rs.getString("email"),rs.getInt("numtel"),rs.getString("password"),rs.getBoolean("perma_ban"),rs.getDate("date_block")));
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }

    public void ban(int id, Boolean ban) {
        try {
            String requete = "UPDATE utilisateur SET perma_ban="+ban+" WHERE id="+id;
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    public void block(int id, String date) {
        try {
            if(date.equals("null")){
                String requete = "UPDATE utilisateur SET date_block="+date+" WHERE id="+id;
                Statement st = cnx.createStatement();
                st.executeUpdate(requete);
            }
            else{
                String requete = "UPDATE utilisateur SET date_block='"+date+"' WHERE id="+id;
                Statement st = cnx.createStatement();
                st.executeUpdate(requete);
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }
}
