import java.sql.Connection;
import java.sql.Statement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class serviceclient implements IService<client>{
    Connection cnx = DataSource.getInstance().getCnx();

    client rechercheclient(int id) {
        String e = "empty";
        client cl = new client(0,e,e,e,0);
        try {
            String requete = "SELECT * FROM client WHERE id="+id;
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                cl = new client(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4),rs.getDouble(5));
                return cl;
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return cl;
    }

    @Override
    public void ajouter(client t) {
        try {
            String requete = "INSERT INTO utilisateur (id,nom,prenom,email,numtel) VALUES (" +t.getid()+ ",'" +t.getnom()+ "','"+t.getprenom()+"','"+t.getemail()+"',"+t.getnumtel()+")";
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            requete = "INSERT INTO client (id_client,nom,prenom,email,numtel) VALUES (" +t.getid()+ ",'" +t.getnom()+ "','"+t.getprenom()+"','"+t.getemail()+"',"+t.getnumtel()+")";
            st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("client ajoutée !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void supprimer(client t) {
        try {
            String requete = "DELETE FROM utilisateur WHERE id="+t.getid();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            requete = "DELETE FROM client WHERE id_client="+t.getid();
            st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("client supprimée !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void modifier(client t) {
        try {
            String requete = "UPDATE utilisateur SET nom='"+t.getnom()+"',prenom='"+t.getprenom()+"',email='"+t.getemail()+"',numtel="+t.getnumtel()+" WHERE id="+t.getid();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        try {
            String requete = "UPDATE client SET nom='"+t.getnom()+"',prenom='"+t.getprenom()+"',email='"+t.getemail()+"',numtel="+t.getnumtel()+" WHERE id_client="+t.getid();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("client modifiée !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public List<client> afficher() {
        List<client> list = new ArrayList<>();

        try {
            String requete = "SELECT * FROM client";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                list.add(new client(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4),rs.getDouble(5)));
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }
}
