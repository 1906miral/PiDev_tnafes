<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieEvent
 *
 * @ORM\Table(name="categorie_event")
 * @ORM\Entity
 */
class CategorieEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_categ_event", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="thematique", type="string", length=20, nullable=false)
     */
    private $thematique;


}
