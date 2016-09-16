<?php

namespace Proxies\__CG__\Esprit\BestdealBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Deal extends \Esprit\BestdealBundle\Entity\Deal implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'nom', 'datedebut', 'datefin', 'prix', 'vendeur', 'stock', 'produits');
        }

        return array('__isInitialized__', 'id', 'nom', 'datedebut', 'datefin', 'prix', 'vendeur', 'stock', 'produits');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Deal $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatedebut($datedebut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatedebut', array($datedebut));

        return parent::setDatedebut($datedebut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatedebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatedebut', array());

        return parent::getDatedebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatefin($datefin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatefin', array($datefin));

        return parent::setDatefin($datefin);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatefin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatefin', array());

        return parent::getDatefin();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', array($prix));

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', array());

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setVendeur($vendeur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVendeur', array($vendeur));

        return parent::setVendeur($vendeur);
    }

    /**
     * {@inheritDoc}
     */
    public function getVendeur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVendeur', array());

        return parent::getVendeur();
    }

    /**
     * {@inheritDoc}
     */
    public function setStock($stock)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStock', array($stock));

        return parent::setStock($stock);
    }

    /**
     * {@inheritDoc}
     */
    public function getStock()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStock', array());

        return parent::getStock();
    }

    /**
     * {@inheritDoc}
     */
    public function addProduit(\Esprit\BestdealBundle\Entity\Produit $produits)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProduit', array($produits));

        return parent::addProduit($produits);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProduit(\Esprit\BestdealBundle\Entity\Produit $produits)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProduit', array($produits));

        return parent::removeProduit($produits);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduits()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduits', array());

        return parent::getProduits();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}