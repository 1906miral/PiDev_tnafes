import java.sql.Connection;
import java.sql.Statement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class serviceadmin implements IService<admin> {
    Connection cnx = DataSource.getInstance().getCnx();

    admin rechercheamin(int id) {
        String e = "empty";
        admin ad = new admin(0,e,e,e,0);
        try {
            String requete = "SELECT * FROM adminstrateur WHERE id_admin="+id;
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                ad = new admin(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4),rs.getDouble(5));
                return ad;
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return ad;
    }

    @Override
    public void ajouter(admin t) {
        try {
            String requete = "INSERT INTO utilisateur (id,nom,prenom,email,numtel) VALUES (" +t.getid()+ ",'" +t.getnom()+ "','"+t.getprenom()+"','"+t.getemail()+"',"+t.getnumtel()+")";
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            requete = "INSERT INTO adminstrateur (id_admin,nom,prenom,email,numtel) VALUES (" +t.getid()+ ",'" +t.getnom()+ "','"+t.getprenom()+"','"+t.getemail()+"',"+t.getnumtel()+")";
            st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("administrateur ajoutée !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void supprimer(admin t) {
        try {
            String requete = "DELETE FROM utilisateur WHERE id="+t.getid();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            requete = "DELETE FROM adminstrateur WHERE id_admin="+t.getid();
            st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("admin supprimée !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void modifier(admin t) {
        try {
            String requete = "UPDATE utilisateur SET nom='"+t.getnom()+"',prenom='"+t.getprenom()+"',email='"+t.getemail()+"',numtel="+t.getnumtel()+" WHERE id="+t.getid();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        try {
            String requete = "UPDATE adminstrateur SET nom='"+t.getnom()+"',prenom='"+t.getprenom()+"',email='"+t.getemail()+"',numtel="+t.getnumtel()+" WHERE id_admin="+t.getid();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("admin modifiée !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public List<admin> afficher() {
        List<admin> list = new ArrayList<>();

        try {
            String requete = "SELECT * FROM adminstrateur";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                list.add(new admin(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4),rs.getDouble(5)));
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }
}
