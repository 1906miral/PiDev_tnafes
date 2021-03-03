import java.util.concurrent.ThreadLocalRandom; 

public class user {
    int id;
    String nom;
    String prenom;
    String email;
    double numtel;

    public user(String nom, String prenom, String email, double numtel) {
        this.id = ThreadLocalRandom.current().nextInt();
        this.nom = nom;
        this.prenom = prenom;
        this.email = email;
        this.numtel = numtel;
    }
    public user(int id, String nom, String prenom, String email, double numtel) {
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.email = email;
        this.numtel = numtel;
    }

    void set_mail(String mail){this.email = mail;}
    void set_nom(String nm){this.nom = nm;}
    void set_prenom(String pr){this.prenom = pr;}
    void set_numtel(double num){this.numtel = num;}

    int getid(){return this.id;}
    String getnom(){return this.nom;}
    String getprenom(){return this.prenom;}
    String getemail(){return this.email;}
    double getnumtel(){return this.numtel;}

    @Override
    public String toString(){ 
        return String.format("prenom: "+prenom+" | nom: "+nom+" | identifiant: "+id+" | email: "+email+" | numero du telephone: "+numtel);
    }

    /*public boolean equals(Object o){ 
        if (o == this) return true; 

        if (!(o instanceof user)) return false;
          
        user c = (user) o; 
          
        if(id==c.id&&nom==c.nom) return true;
        else return false;
    }*/
}
