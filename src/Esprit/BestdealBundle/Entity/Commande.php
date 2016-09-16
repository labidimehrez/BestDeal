<?php

namespace Esprit\BestdealBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Esprit\BestdealBundle\Entity\CommandeRepository")
 */
class Commande
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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;
    
    /**
    * @ORM\OneToOne(targetEntity="Deal", inversedBy="commande")
    * @ORM\JoinColumn(name="deal_id", referencedColumnName="id")
    */
   private $deal;


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
     * @var Deal
     * 
     * @ORM\ManyToOne(targetEntity="Esprit\UserBundle\Entity\User",inversedBy="commandes")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    protected $client;

    /**
     * Set nom
     *
     * @param string $nom
     * @return Commande
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
     * Set prenom
     *
     * @param string $prenom
     * @return Commande
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Commande
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Commande
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Commande
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
     * Set client
     *
     * @param \Esprit\UserBundle\Entity\User $client
     * @return Commande
     */
    public function setClient(\Esprit\UserBundle\Entity\User $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Esprit\UserBundle\Entity\User 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set deal
     *
     * @param \Esprit\BestdealBundle\Entity\Deal $deal
     * @return Commande
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
}
