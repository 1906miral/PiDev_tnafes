<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="fk_idpub", columns={"idpub"}), @ORM\Index(name="fk_idusercomment", columns={"idclient_comment"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_comment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComment;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_comment", type="string", length=30, nullable=false)
     */
    private $contenuComment;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_client", type="string", length=20, nullable=false)
     */
    private $nomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_client", type="string", length=20, nullable=false)
     */
    private $prenomClient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecomment", type="date", nullable=false)
     */
    private $datecomment;

    /**
     * @var \Publication
     *
     * @ORM\ManyToOne(targetEntity="Publication")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpub", referencedColumnName="id_pub")
     * })
     */
    private $idpub;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idclient_comment", referencedColumnName="id")
     * })
     */
    private $idclientComment;


}
