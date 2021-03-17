/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IServices;

import Entities.Avis;
import Entities.Publication;
import java.util.List;

/**
 *
 * @author miral
 */
public interface IPublication {
    public void ajouter_pub(Publication t);
    public void supprimer_pub(Publication t);
    public void modifier_avis(Publication t);
    public List<Publication> afficher_avis();
}
