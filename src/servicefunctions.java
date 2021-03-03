import java.util.Scanner;

public class servicefunctions {
    void ajoutclient(){
        Scanner scan = new Scanner(System.in);
        System.out.print("Prenom: ");
        String pr=scan.nextLine();
        System.out.print("Nom: ");
        String nm=scan.nextLine();
        System.out.print("Email: ");
        String em=scan.nextLine();
        System.out.print("numero du tel: ");
        double num=scan.nextDouble();
        
        client u = new client(nm,pr,em,num);

        serviceclient sc = new serviceclient();
        sc.ajouter(u);
        //scan.close();
    }

    void supprimerclient(){
        Scanner scan = new Scanner(System.in);
        System.out.print("id du client a supprimer: ");
        int id = scan.nextInt();
        serviceclient sc = new serviceclient();
        client cl = new client(id,"","","",0);
        sc.supprimer(cl);
        //scan.close();
    }

    void modifierclient(){
        Scanner scan = new Scanner(System.in);
        System.out.print("id du client a modifier: ");
        int id = scan.nextInt();
        scan.nextLine();
        System.out.print("Nouveau nom: ");
        String nom=scan.nextLine();
        System.out.print("Nouveau prenom: ");
        String prenom=scan.nextLine();
        System.out.print("Nouveau mail: ");
        String email=scan.nextLine();
        System.out.print("Nouveau numero de tel: ");
        double numtel=scan.nextDouble();
        serviceclient sc = new serviceclient();
        client cl = new client(id,nom,prenom,email,numtel);
        sc.modifier(cl);
        //scan.close();
    }

    void ajoutadmin(){
        Scanner scan = new Scanner(System.in);
        System.out.print("Prenom: ");
        String pr=scan.nextLine();
        System.out.print("Nom: ");
        String nm=scan.nextLine();
        System.out.print("Email: ");
        String em=scan.nextLine();
        System.out.print("numero du tel: ");
        double num=scan.nextDouble();
        
        admin u = new admin(nm,pr,em,num);

        serviceadmin sc = new serviceadmin();
        sc.ajouter(u);
        //scan.close();
    }

    void supprimeradmin(){
        Scanner scan = new Scanner(System.in);
        System.out.print("id de l'admin a supprimer: ");
        int id = scan.nextInt();
        serviceadmin sc = new serviceadmin();
        admin cl = new admin(id,"","","",0);
        sc.supprimer(cl);
        //scan.close();
    }

    void modifieradmin(){
        Scanner scan = new Scanner(System.in);
        System.out.print("id de l'admin a modifier: ");
        int id = scan.nextInt();
        scan.nextLine();
        System.out.print("Nouveau nom: ");
        String nom=scan.nextLine();
        System.out.print("Nouveau prenom: ");
        String prenom=scan.nextLine();
        System.out.print("Nouveau mail: ");
        String email=scan.nextLine();
        System.out.print("Nouveau numero de tel: ");
        double numtel=scan.nextDouble();
        serviceadmin sc = new serviceadmin();
        admin cl = new admin(id,nom,prenom,email,numtel);
        sc.modifier(cl);
        //scan.close();
    }

    void ajoutcoach(){
        Scanner scan = new Scanner(System.in);
        System.out.print("Prenom: ");
        String pr=scan.nextLine();
        System.out.print("Nom: ");
        String nm=scan.nextLine();
        System.out.print("Email: ");
        String em=scan.nextLine();
        System.out.print("numero du tel: ");
        double num=scan.nextDouble();
        scan.nextLine();
        System.out.print("role: ");
        String role=scan.nextLine();
        System.out.print("salaire: ");
        float salaire=scan.nextFloat();
        coach u = new coach(nm,pr,em,num,role,salaire);

        servicecoach sc = new servicecoach();
        sc.ajouter(u);
        //scan.close();
    }

    void supprimercoach(){
        Scanner scan = new Scanner(System.in);
        System.out.print("id du coach a supprimer: ");
        int id = scan.nextInt();
        servicecoach sc = new servicecoach();
        coach cl = new coach(id,"","","",0,"",0);
        sc.supprimer(cl);
        //scan.close();
    }

    void modifiercoach(){
        Scanner scan = new Scanner(System.in);
        System.out.print("id du coach a modifier: ");
        int id = scan.nextInt();
        scan.nextLine();
        System.out.print("Nouveau nom: ");
        String nom=scan.nextLine();
        System.out.print("Nouveau prenom: ");
        String prenom=scan.nextLine();
        System.out.print("Nouveau mail: ");
        String email=scan.nextLine();
        System.out.print("Nouveau numero de tel: ");
        double numtel=scan.nextDouble();
        scan.nextLine();
        System.out.print("role: ");
        String role=scan.nextLine();
        System.out.print("salaire: ");
        float salaire=scan.nextFloat();
        servicecoach sc = new servicecoach();
        coach cl = new coach(id,nom,prenom,email,numtel,role,salaire);
        sc.modifier(cl);
        //scan.close();
    }
}