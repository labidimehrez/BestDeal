<?php

namespace Esprit\BestdealBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Esprit\BestdealBundle\Entity\CommentRepository")
 */
class Comment
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;

    /**
     * @var Deal
     * 
     * @ORM\ManyToOne(targetEntity="Produit",inversedBy="comments")
     * @ORM\JoinColumn(name="produit_id", referencedColumnName="id")
     */
    protected $produit;



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
     * Set commentaire
     *
     * @param string $commentaire
     * @return Comment
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Comment
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
     * Set produit
     *
     * @param \Esprit\BestdealBundle\Entity\Produit $produit
     * @return Comment
     */
    public function setProduit(\Esprit\BestdealBundle\Entity\Produit $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Esprit\BestdealBundle\Entity\Produit 
     */
    public function getProduit()
    {
        return $this->produit;
    }
    
    public function __toString()
    {
        return (string) $this->getId();
    }
}
