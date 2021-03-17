/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IServices;

import Entities.Reclamation;
import java.util.List;
import javafx.collections.ObservableList;

/**
 *
 * @author miral
 */
public interface IReclamation{
    public void ajouter_reclamation(Reclamation t);
    public void modifier_reclamation(Reclamation t);
    public List<Reclamation> afficher_reclamation();
    public void trierReclamationparEtat(List<Reclamation> l);
    public void trierReclamationparEtatdesc(List<Reclamation> l);
    public void trierReclamationparDate(List<Reclamation> l);
    public void trierReclamationparDatedesc(List<Reclamation> l);
}
