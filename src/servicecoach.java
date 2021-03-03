import java.sql.Connection;
import java.sql.Statement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class servicecoach implements IService<coach> {
    Connection cnx = DataSource.getInstance().getCnx();

    coach recherchecoach(int id) {
        String e = "empty";
        coach cl = new coach(0,e,e,e,0,e,0);
        try {
            String requete = "SELECT * FROM coach WHERE id_coach="+id;
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                cl = new coach(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4),rs.getDouble(5),rs.getString(6),rs.getFloat(7));
                return cl;
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return cl;
    }

    @Override
    public void ajouter(coach t) {
        try {
            String requete = "INSERT INTO utilisateur (id,nom,prenom,email,numtel) VALUES (" +t.getid()+ ",'" +t.getnom()+ "','"+t.getprenom()+"','"+t.getemail()+"',"+t.getnumtel()+")";
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            requete = "INSERT INTO coach (id_coach,nom,prenom,email,numtel,role,salaire) VALUES (" +t.getid()+ ",'" +t.getnom()+ "','"+t.getprenom()+"','"+t.getemail()+"',"+t.getnumtel()+",'"+t.getrole()+"',"+t.getsalaire()+")";
            st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("coach ajoutée !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void supprimer(coach t) {
        try {
            String requete = "DELETE FROM utilisateur WHERE id="+t.getid();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
            requete = "DELETE FROM coach WHERE id_coach="+t.getid();
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
            String requete = "UPDATE utilisateur SET nom='"+t.getnom()+"',prenom='"+t.getprenom()+"',email='"+t.getemail()+"',numtel="+t.getnumtel()+" WHERE id="+t.getid();
            Statement st = cnx.createStatement();
            st.executeUpdate(requete);
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        try {
            String requete = "UPDATE coach SET nom='"+t.getnom()+"',prenom='"+t.getprenom()+"',email='"+t.getemail()+"',numtel="+t.getnumtel()+",role='"+t.getrole()+"' ,salaire="+t.getsalaire()+" WHERE id_coach="+t.getid();
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
                list.add(new coach(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4),rs.getDouble(5),rs.getString(6),rs.getFloat(7)));
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }
}
