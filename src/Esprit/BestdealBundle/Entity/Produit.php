<?php

namespace Esprit\BestdealBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Esprit\BestdealBundle\Entity\ProduitRepository")
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="referance", type="string", length=255)
     */
    private $referance;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=255)
     */
    private $marque;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;
    
    
    /**
     * @var Deal
     * 
     * @ORM\ManyToOne(targetEntity="Deal",inversedBy="produits")
     * @ORM\JoinColumn(name="deal_id", referencedColumnName="id")
     */
    protected $deal;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="produit", cascade={"all"})
     */
    protected $comments;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set referance
     *
     * @param string $referance
     * @return Produit
     */
    public function setReferance($referance)
    {
        $this->referance = $referance;

        return $this;
    }

    /**
     * Get referance
     *
     * @return string 
     */
    public function getReferance()
    {
        return $this->referance;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Produit
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set marque
     *
     * @param string $marque
     * @return Produit
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set deal
     *
     * @param \Esprit\BestdealBundle\Entity\Deal $deal
     * @return Produit
     */
    public function setDeal(\Esprit\BestdealBundle\Entity\Deal $deal = null)
    {
        $this->deal = $deal;

        return $this;
    }

    /**
     * Get deal
     *
     * @return \Esprit\BestdealBundle\Entity\Deal 
     */
    public function getDeal()
    {
        return $this->deal;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Produit
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comments
     *
     * @param \Esprit\BestdealBundle\Entity\Comment $comments
     * @return Produit
     */
    public function addComment(\Esprit\BestdealBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Esprit\BestdealBundle\Entity\Comment $comments
     */
    public function removeComment(\Esprit\BestdealBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
    
    public function __toString()
    {
        return (string) $this->getId();
    }
}
