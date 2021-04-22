<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=75, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="numtel", type="integer", nullable=false)
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=128, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_block", type="date", nullable=true)
     */
    private $dateBlock;

    /**
     * @var int
     *
     * @ORM\Column(name="perma_ban", type="integer", nullable=false)
     */
    private $permaBan = '0';
    /**
     * @ORM\OneToMany(targetEntity=Publication::class,mappedBy="iduser",cascade={"all"})
     */
    private $publication;

    /**
     * @ORM\OneToMany(targetEntity=Reclamation::class,mappedBy="idclientRec",cascade={"all"})
     */
    private $reclamation;
    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class,mappedBy="idpub",cascade={"all"})
     */
    private $commentaire;
    /**
     * @ORM\OneToMany(targetEntity=Avis::class,mappedBy="idClientavis",cascade={"all"})
     */
    private $avis;

    /**
     * @return Publication
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * @param Publication $publication
     */
    public function setPublication($publication): void
    {
        $this->publication = $publication;
    }

    /**
     * @return Reclamation
     */
    public function getReclamation()
    {
        return $this->reclamation;
    }

    /**
     * @param Reclamation $reclamation
     */
    public function setReclamation($reclamation): void
    {
        $this->reclamation = $reclamation;
    }

    /**
     * @return Commentaire
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param Commentaire $commentaire
     */
    public function setCommentaire($commentaire): void
    {
        $this->commentaire = $commentaire;
    }


}
