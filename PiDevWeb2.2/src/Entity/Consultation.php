<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultation
 *
 * @ORM\Table(name="consultation", indexes={@ORM\Index(name="fk_idcoach_consultation", columns={"id_coach"}), @ORM\Index(name="fk_idclient_consultation", columns={"id_client"})})
 * @ORM\Entity
 */
class Consultation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_consultation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConsultation;

    /**
     * @var int
     *
     * @ORM\Column(name="id_client", type="integer", nullable=false)
     */
    private $idClient;

    /**
     * @var int
     *
     * @ORM\Column(name="id_coach", type="integer", nullable=false)
     */
    private $idCoach;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time", nullable=false)
     */
    private $heure;


}
