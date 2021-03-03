import java.util.Scanner;

public class MainProg {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int choixmenu;
        do {
            System.out.println("****<<MENU>>****");
            System.out.println("1-Ajouter un client");
            System.out.println("2-Modifier un client");
            System.out.println("3-Afficher la liste des clients");
            System.out.println("4-Supprimer un client");
            System.out.println("5-Ajouter un admin");
            System.out.println("6-Modifier un admin");
            System.out.println("7-Afficher la liste des admin");
            System.out.println("8-Supprimer un admin");
            System.out.println("9-Ajouter un coach");
            System.out.println("10-Modifier un coach");
            System.out.println("11-Afficher la liste des coach");
            System.out.println("12-Supprimer un coach");
            System.out.println("0-QUITTER");
            System.out.println("********veuiller saisir votre choix********");
            choixmenu = in.nextInt();
            switch (choixmenu) {
                case 1: 
                    servicefunctions servfunc = new servicefunctions();
                    servfunc.ajoutclient();
                break;
                case 2:
                    servfunc = new servicefunctions();
                    servfunc.modifierclient();
                break;
                case 3:
                    serviceclient sc = new serviceclient();
                    sc.afficher().forEach(System.out::println);
                break;
                case 4:
                    servfunc = new servicefunctions();
                    servfunc.supprimerclient();
                break;
                case 5: 
                    servfunc = new servicefunctions();
                    servfunc.ajoutadmin();
                break;
                case 6:
                    servfunc = new servicefunctions();
                    servfunc.modifieradmin();
                break;
                case 7:
                    serviceadmin sa = new serviceadmin();
                    sa.afficher().forEach(System.out::println);
                break;
                case 8:
                    servfunc = new servicefunctions();
                    servfunc.supprimeradmin();
                break;
                case 9: 
                    servfunc = new servicefunctions();
                    servfunc.ajoutcoach();
                break;
                case 10:
                    servfunc = new servicefunctions();
                    servfunc.modifiercoach();
                break;
                case 11:
                    servicecoach sco = new servicecoach();
                    sco.afficher().forEach(System.out::println);
                break;
                case 12:
                    servfunc = new servicefunctions();
                    servfunc.supprimercoach();
                break;
                case 0:
                    System.out.println("----------------------------------------<< à bientot! >>---------------------------------------");
                break;
                default: System.out.println("-<< Vous devez choisir un numero entre 0 et 12! >>-");
            }
        }while(choixmenu!=0);
    in.close();
    }
}