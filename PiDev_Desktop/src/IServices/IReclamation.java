/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IServices;

import Entities.Reclamation;
import java.util.List;

/**
 *
 * @author miral
 */
public interface IReclamation{
    public void ajouter_reclamation(Reclamation t);
    public void supprimer_reclamation(Reclamation t);
    public void modifier_reclamation(Reclamation t);
    public List<Reclamation> afficher_reclamation();
    public List<Reclamation> chercher_reclamation(String message);
    public List<Reclamation> trier_reclamation();
    public List<Reclamation> trier_reclamation_desc();
    public int calcul_nbr_reclamation();
}
