public class admin extends user{
    public admin(String nom, String prenom, String email, double numtel) {
        super(nom,prenom,email,numtel);
    }

    public admin(int id, String nom, String prenom, String email, double numtel) {
        super(id, nom, prenom, email, numtel);
    }

    @Override
    public String toString(){return "**Administrateur**  "+ super.toString();}
}
