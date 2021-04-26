<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="fk_idclientreclam", columns={"idclient_rec"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_user", type="string", length=20, nullable=false)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_user", type="string", length=20, nullable=false)
     */
    private $prenomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="numtel", type="string", length=20, nullable=false)
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=75, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=75, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=20, nullable=false)
     */
    private $objet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=true, options={"default"="En attente"})
     */
    private $etat = 'En attente';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_traitement", type="date", nullable=true)
     */
    private $dateTraitement;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idclient_rec", referencedColumnName="id")
     * })
     */
    private $idclientRec;


}
