<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event", indexes={@ORM\Index(name="Categorie", columns={"Categorie"})})
 * @ORM\Entity
 */
class Event
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_event", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_coach", type="integer", nullable=true)
     */
    private $idCoach;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=true)
     */
    private $lieu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_place", type="integer", nullable=true)
     */
    private $nbPlace;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_event", type="date", nullable=true)
     */
    private $dateEvent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Categorie", type="string", length=255, nullable=true)
     */
    private $categorie;


}
