<?php

namespace BddBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\MaxDepth;


use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="ProductBundle\Repository\ProduitRepository")
 */
class Produit
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
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="nom_prod", type="string", length=255, nullable=false)
     *
     *
     */
    private $nomProd;

    /**
     * @var float
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="prix_prod", type="float", precision=10, scale=0, nullable=false)
     *
     */
    private $prixProd;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="prod_description", type="string", length=255, nullable=false)
     */
    private $prodDescription;

    /**
     * @var integer
     * @Assert\NotBlank()
     *@Assert\GreaterThan(
     *     value = 0,
     *     message="le prix doit etre positive"
     *     )
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var float
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="prix_offre", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixOffre = '0';

    /**
     * @var \Categorie
     *
     * @MaxDepth(1)
     *
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="products" )
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdCategorie", referencedColumnName="id")
     * })
     */

    private $categorie;

    /**
     * @var \OffrePromotion
     *@MaxDepth(1)
     * @ORM\ManyToOne(targetEntity="OffrePromotion", inversedBy="products", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdOffre", referencedColumnName="id")
     * })
     */
    private $idoffre;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNomProd()
    {
        return $this->nomProd;
    }

    /**
     * @param string $nomProd
     */
    public function setNomProd($nomProd)
    {
        $this->nomProd = $nomProd;
    }

    /**
     * @return float
     */
    public function getPrixProd()
    {
        return $this->prixProd;
    }

    /**
     * @param float $prixProd
     */
    public function setPrixProd($prixProd)
    {
        $this->prixProd = $prixProd;
    }

    /**
     * @return string
     */
    public function getProdDescription()
    {
        return $this->prodDescription;
    }

    /**
     * @param string $prodDescription
     */
    public function setProdDescription($prodDescription)
    {
        $this->prodDescription = $prodDescription;
    }

    /**
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return float
     */
    public function getPrixOffre()
    {
        return $this->prixOffre;
    }

    /**
     * @param float $prixOffre
     */
    public function setPrixOffre($prixOffre)
    {
        $this->prixOffre = $prixOffre;
    }

    /**
     * @return \Categorie
     */
    public function getIdcategorie()
    {
        return $this->getCategorie()->getId();
    }

    /**
     * @param \Categorie $idcategorie
     */
    public function setIdcategorie($idcategorie)
    {
        $this->idcategorie = $idcategorie;
    }

    /**
     * @return \OffrePromotion
     */
    public function getIdoffre()
    {
        return $this->idoffre;
    }

    /**
     * @param \OffrePromotion $idoffre
     */
    public function setIdoffre($idoffre)
    {
        $this->idoffre = $idoffre;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }
    /**
     * @var string
     *
     * @Assert\File(maxSize="500K")
     */
    public $file;
    public function getWebPath(){
        return null===$this->image ? null: $this->getUploadDir().'/'.$this->image;
    }
    protected function getUploadRootDir(){
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }
    protected function getUploadDir(){
        return 'images';
    }
    public function uploadProfilePicture(){
        $this->file->move($this->getUploadRootDir(),$this->file->getClientOriginalName());
        $this->image=$this->file->getClientOriginalName();
        $this->file=null;

    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }


}

