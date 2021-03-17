/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IServices;

import Entities.Commentaire;
import Entities.Publication;
import java.util.List;

/**
 *
 * @author miral
 */
public interface ICommentaire {
    public void ajouter_pub(Commentaire t);
    public void supprimer_pub(Commentaire t);
    public void modifier_avis(Commentaire t);
    public List<Commentaire> afficher_avis();
}
