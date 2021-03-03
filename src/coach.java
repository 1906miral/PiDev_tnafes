public class coach extends user {
    String role;
    float salaire;

    public coach(String nom, String prenom, String email, double numtel, String role, float salaire) {
        super(nom,prenom,email,numtel);
        this.role = role;
        this.salaire = salaire;
    }

    public coach(int id, String nom, String prenom, String email, double numtel, String role, float salaire) {
        super(id,nom,prenom,email,numtel);
        this.role = role;
        this.salaire = salaire;
    }

    String getrole(){return this.role;}
    double getsalaire(){return this.salaire;}

    @Override
    public String toString(){return "**Coach**  "+ super.toString()+" | role="+role+" | salaire="+salaire;}
}
