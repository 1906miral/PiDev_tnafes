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


}
