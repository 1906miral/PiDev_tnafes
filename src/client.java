public class client extends user{
    public client(String nom, String prenom, String email, double numtel) {
        super(nom,prenom,email,numtel);
    }

    public client(int id, String nom, String prenom, String email, double numtel) {
        super(id, nom, prenom, email, numtel);
    }

    @Override
    public String toString(){return "**client**  "+ super.toString();}
}