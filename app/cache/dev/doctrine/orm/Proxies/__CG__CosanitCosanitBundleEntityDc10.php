<?php

namespace Proxies\__CG__\Cosanit\CosanitBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Dc10 extends \Cosanit\CosanitBundle\Entity\Dc10 implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'id', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'taux3mois', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'valeur3mois', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'taux6mois', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'valeur6mois', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'taux1an', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'valeur1an', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'categories'];
        }

        return ['__isInitialized__', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'id', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'taux3mois', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'valeur3mois', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'taux6mois', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'valeur6mois', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'taux1an', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'valeur1an', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Dc10' . "\0" . 'categories'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Dc10 $proxy) {
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
    public function setTaux3mois($taux3mois)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaux3mois', [$taux3mois]);

        return parent::setTaux3mois($taux3mois);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaux3mois()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaux3mois', []);

        return parent::getTaux3mois();
    }

    /**
     * {@inheritDoc}
     */
    public function setValeur3mois($valeur3mois)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValeur3mois', [$valeur3mois]);

        return parent::setValeur3mois($valeur3mois);
    }

    /**
     * {@inheritDoc}
     */
    public function getValeur3mois()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValeur3mois', []);

        return parent::getValeur3mois();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaux6mois($taux6mois)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaux6mois', [$taux6mois]);

        return parent::setTaux6mois($taux6mois);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaux6mois()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaux6mois', []);

        return parent::getTaux6mois();
    }

    /**
     * {@inheritDoc}
     */
    public function setValeur6mois($valeur6mois)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValeur6mois', [$valeur6mois]);

        return parent::setValeur6mois($valeur6mois);
    }

    /**
     * {@inheritDoc}
     */
    public function getValeur6mois()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValeur6mois', []);

        return parent::getValeur6mois();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaux1an($taux1an)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaux1an', [$taux1an]);

        return parent::setTaux1an($taux1an);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaux1an()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaux1an', []);

        return parent::getTaux1an();
    }

    /**
     * {@inheritDoc}
     */
    public function setValeur1an($valeur1an)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValeur1an', [$valeur1an]);

        return parent::setValeur1an($valeur1an);
    }

    /**
     * {@inheritDoc}
     */
    public function getValeur1an()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValeur1an', []);

        return parent::getValeur1an();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategories(\Cosanit\CosanitBundle\Entity\Categories $categories = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategories', [$categories]);

        return parent::setCategories($categories);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

}
