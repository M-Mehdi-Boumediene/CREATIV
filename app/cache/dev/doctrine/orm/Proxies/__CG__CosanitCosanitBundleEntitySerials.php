<?php

namespace Proxies\__CG__\Cosanit\CosanitBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Serials extends \Cosanit\CosanitBundle\Entity\Serials implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Serials' . "\0" . 'id', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Serials' . "\0" . 'debut', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Serials' . "\0" . 'fin', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Serials' . "\0" . 'serial', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Serials' . "\0" . 'active', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Serials' . "\0" . 'dateajout', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Serials' . "\0" . 'clientdate'];
        }

        return ['__isInitialized__', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Serials' . "\0" . 'id', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Serials' . "\0" . 'debut', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Serials' . "\0" . 'fin', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Serials' . "\0" . 'serial', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Serials' . "\0" . 'active', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Serials' . "\0" . 'dateajout', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Serials' . "\0" . 'clientdate'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Serials $proxy) {
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
    public function setDebut($debut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDebut', [$debut]);

        return parent::setDebut($debut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDebut', []);

        return parent::getDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setFin($fin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFin', [$fin]);

        return parent::setFin($fin);
    }

    /**
     * {@inheritDoc}
     */
    public function getFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFin', []);

        return parent::getFin();
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
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateajout($dateajout)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateajout', [$dateajout]);

        return parent::setDateajout($dateajout);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateajout()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateajout', []);

        return parent::getDateajout();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientdate($clientdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientdate', [$clientdate]);

        return parent::setClientdate($clientdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientdate', []);

        return parent::getClientdate();
    }

}
