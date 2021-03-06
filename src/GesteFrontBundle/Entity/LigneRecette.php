<?php

namespace GesteFrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneRecette
 *
 * @ORM\Table(name="ligne_recette", indexes={@ORM\Index(name="IDX_D6225DA9BBED0576", columns={"IdProduit"}), @ORM\Index(name="IDX_D6225DA9DBF38AC1", columns={"IdRecette"})})
 * @ORM\Entity
 */
class LigneRecette
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite_rec", type="integer", nullable=false)
     */
    private $quantiteRec;

    /**
     * @var string
     *
     * @ORM\Column(name="rec_description", type="string", length=255, nullable=false)
     */
    private $recDescription;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdProduit", referencedColumnName="id")
     * })
     */
    private $idproduit;

    /**
     * @var \Recette
     *
     * @ORM\ManyToOne(targetEntity="Recette")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdRecette", referencedColumnName="id")
     * })
     */
    private $idrecette;


}

