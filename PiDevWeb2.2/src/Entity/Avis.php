<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;
/**
 * Avis
 *
 * @ORM\Table(name="avis", indexes={@ORM\Index(name="fkidpubrate", columns={"idpub_rate"}), @ORM\Index(name="fk_idclientavis", columns={"id_clientavis"})})
 * @ORM\Entity
 */
class Avis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_avis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAvis;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=75, nullable=true)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer", nullable=false)
     */
    private $rating;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_avis", type="date", nullable=false)
     */
    private $dateAvis;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur",inversedBy="avis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_clientavis", referencedColumnName="id")
     * })
     */
    private $idClientavis;

    /**
     * @var \Publication
     *
     * @ORM\ManyToOne(targetEntity="Publication",inversedBy="avis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpub_rate", referencedColumnName="id_pub")
     * })
     */
    private $idpubRate;

    /**
     * Avis constructor.
     *
     */
    public function __construct($idpubRate)
    {
        $this->idpubRate = $idpubRate;
        $this->dateAvis= new DateTime('now');
    }

    /**
     * @return int
     */
    public function getIdAvis(): int
    {
        return $this->idAvis;
    }

    /**
     * @param int $idAvis
     */
    public function setIdAvis(int $idAvis): void
    {
        $this->idAvis = $idAvis;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getRating(): ?int
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     */
    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @return DateTime
     */
    public function getDateAvis(): ?DateTime
    {
        return $this->dateAvis;
    }

    /**
     * @param \DateTime $dateAvis
     */
    public function setDateAvis(\DateTime $dateAvis): void
    {
        $this->dateAvis = $dateAvis;
    }

    /**
     * @return \Utilisateur
     */
    public function getIdClientavis(): \Utilisateur
    {
        return $this->idClientavis;
    }

    /**
     * @param \Utilisateur $idClientavis
     */
    public function setIdClientavis(\Utilisateur $idClientavis): void
    {
        $this->idClientavis = $idClientavis;
    }

    /**
     * @return \Publication
     */
    public function getIdpubRate(): \Publication
    {
        return $this->idpubRate;
    }

    /**
     * @param \Publication $idpubRate
     */
    public function setIdpubRate(\Publication $idpubRate): void
    {
        $this->idpubRate = $idpubRate;
    }


}
