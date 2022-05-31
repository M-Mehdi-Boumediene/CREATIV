<?php

namespace Proxies\__CG__\Cosanit\CosanitBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Types extends \Cosanit\CosanitBundle\Entity\Types implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Types' . "\0" . 'id', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Types' . "\0" . 'nom', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Types' . "\0" . 'texte', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Types' . "\0" . 'photo', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Types' . "\0" . 'slug', 'partenaires'];
        }

        return ['__isInitialized__', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Types' . "\0" . 'id', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Types' . "\0" . 'nom', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Types' . "\0" . 'texte', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Types' . "\0" . 'photo', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Types' . "\0" . 'slug', 'partenaires'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Types $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setTexte($texte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTexte', [$texte]);

        return parent::setTexte($texte);
    }

    /**
     * {@inheritDoc}
     */
    public function getTexte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTexte', []);

        return parent::getTexte();
    }

    /**
     * {@inheritDoc}
     */
    public function addPhoto(\Cosanit\CosanitBundle\Entity\Media $photo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPhoto', [$photo]);

        return parent::addPhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function removePhoto(\Cosanit\CosanitBundle\Entity\Media $photo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePhoto', [$photo]);

        return parent::removePhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', []);

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function addPartenaire(\Cosanit\CosanitBundle\Entity\Partenaires $partenaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPartenaire', [$partenaire]);

        return parent::addPartenaire($partenaire);
    }

    /**
     * {@inheritDoc}
     */
    public function removePartenaire(\Cosanit\CosanitBundle\Entity\Partenaires $partenaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePartenaire', [$partenaire]);

        return parent::removePartenaire($partenaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartenaires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPartenaires', []);

        return parent::getPartenaires();
    }

}
