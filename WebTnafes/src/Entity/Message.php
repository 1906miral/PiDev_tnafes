<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="	fk_idclient_message", columns={"id_client"}), @ORM\Index(name="fk_idcoach_message", columns={"id_coach"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_message", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $heure = 'current_timestamp()';

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=50, nullable=false)
     */
    private $contenu;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id_client")
     * })
     */
    private $idClient;

    /**
     * @var \Coach
     *
     * @ORM\ManyToOne(targetEntity="Coach")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_coach", referencedColumnName="id_coach")
     * })
     */
    private $idCoach;


}
