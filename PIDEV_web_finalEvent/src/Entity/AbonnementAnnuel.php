<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbonnementAnnuel
 *
 * @ORM\Table(name="abonnement_annuel")
 * @ORM\Entity
 */
class AbonnementAnnuel
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_annuel", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixAnnuel;

    /**
     * @var \Abonnement
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Abonnement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_abonnement", referencedColumnName="id_abonnement")
     * })
     */
    private $idAbonnement;


}
