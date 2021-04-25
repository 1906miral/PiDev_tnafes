<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="fk_iduser", columns={"idclient_rec"})})
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
     * @var int
     *
     * @ORM\Column(name="idclient_rec", type="integer", nullable=false)
     */
    private $idclientRec;

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
     * @ORM\Column(name="email", type="string", length=75, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=75, nullable=false)
     */
    private $message;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;


}
