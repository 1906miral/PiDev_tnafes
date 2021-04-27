<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbonnementMensuel
 *
 * @ORM\Table(name="abonnement_mensuel")
 * @ORM\Entity
 */
class AbonnementMensuel
{
    /**
     * @var int
     *
     * @ORM\Column(name="date_debut", type="integer", nullable=false)
     */
    private $dateDebut;

    /**
     * @var int
     *
     * @ORM\Column(name="date_fin", type="integer", nullable=false)
     */
    private $dateFin;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_mensuel", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixMensuel;

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
