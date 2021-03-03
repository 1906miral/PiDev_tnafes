/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

/**
 *
 * @author miral
 */
public class Client extends Utilisateur{
    
    public Client(String nom, String email, int numtel) {
        super(nom, email, numtel);
    }

    public Client(int id, String nom, String email, int numtel) {
        super(id, nom, email, numtel);
    }
    
}
