<?php

namespace Proxies\__CG__\Cosanit\CosanitBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Activations extends \Cosanit\CosanitBundle\Entity\Activations implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'id', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'etat', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'nom', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'reference', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'serial', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'date', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'dateactive', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'adresse', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'wilaya', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'tel', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'email', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'message', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'messagerie', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'photo'];
        }

        return ['__isInitialized__', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'id', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'etat', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'nom', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'reference', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'serial', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'date', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'dateactive', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'adresse', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'wilaya', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'tel', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'email', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'message', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'messagerie', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Activations' . "\0" . 'photo'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Activations $proxy) {
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
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setWilaya($wilaya)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWilaya', [$wilaya]);

        return parent::setWilaya($wilaya);
    }

    /**
     * {@inheritDoc}
     */
    public function getWilaya()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWilaya', []);

        return parent::getWilaya();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel($tel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', [$tel]);

        return parent::setTel($tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', []);

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setFax($fax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFax', [$fax]);

        return parent::setFax($fax);
    }

    /**
     * {@inheritDoc}
     */
    public function getFax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFax', []);

        return parent::getFax();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobil($mobil)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobil', [$mobil]);

        return parent::setMobil($mobil);
    }

    /**
     * {@inheritDoc}
     */
    public function getMobil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMobil', []);

        return parent::getMobil();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessage($message)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessage', [$message]);

        return parent::setMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessage', []);

        return parent::getMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessagerie(\Cosanit\CosanitBundle\Entity\Messagerie $messagerie = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessagerie', [$messagerie]);

        return parent::setMessagerie($messagerie);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessagerie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessagerie', []);

        return parent::getMessagerie();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto(\Cosanit\CosanitBundle\Entity\Scans $photo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', [$photo]);

        return parent::setPhoto($photo);
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
    public function setReference($reference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', [$reference]);

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', []);

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setSerial($serial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSerial', [$serial]);

        return parent::setSerial($serial);
    }

    /**
     * {@inheritDoc}
     */
    public function getSerial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSerial', []);

        return parent::getSerial();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateactive($dateactive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateactive', [$dateactive]);

        return parent::setDateactive($dateactive);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateactive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateactive', []);

        return parent::getDateactive();
    }

}
