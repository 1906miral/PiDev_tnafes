<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="fk_idusercomment", columns={"idclient_comment"})})
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
     * @var int
     *
     * @ORM\Column(name="idevent", type="integer", nullable=false)
     */
    private $idevent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecomment", type="date", nullable=false)
     */
    private $datecomment;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idclient_comment", referencedColumnName="id_client")
     * })
     */
    private $idclientComment;


}
