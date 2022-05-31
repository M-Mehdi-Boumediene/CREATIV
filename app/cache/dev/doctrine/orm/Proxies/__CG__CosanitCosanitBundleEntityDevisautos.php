<?php

namespace Proxies\__CG__\Cosanit\CosanitBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Devisautos extends \Cosanit\CosanitBundle\Entity\Devisautos implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'id', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'dure', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'nom', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'prenom', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'telephone', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'nbplace', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'puissance', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'valeur', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'datepermis', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'garantie', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'incendies', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'vols', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'bris', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'assistance1', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'assistance2', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'assistance3', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'defences'];
        }

        return ['__isInitialized__', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'id', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'dure', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'nom', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'prenom', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'telephone', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'nbplace', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'puissance', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'valeur', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'datepermis', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'garantie', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'incendies', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'vols', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'bris', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'assistance1', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'assistance2', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'assistance3', '' . "\0" . 'Cosanit\\CosanitBundle\\Entity\\Devisautos' . "\0" . 'defences'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Devisautos $proxy) {
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
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbplace($nbplace)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbplace', [$nbplace]);

        return parent::setNbplace($nbplace);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbplace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbplace', []);

        return parent::getNbplace();
    }

    /**
     * {@inheritDoc}
     */
    public function setPuissance($puissance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPuissance', [$puissance]);

        return parent::setPuissance($puissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getPuissance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPuissance', []);

        return parent::getPuissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setValeur($valeur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValeur', [$valeur]);

        return parent::setValeur($valeur);
    }

    /**
     * {@inheritDoc}
     */
    public function getValeur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValeur', []);

        return parent::getValeur();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatepermis($datepermis)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatepermis', [$datepermis]);

        return parent::setDatepermis($datepermis);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatepermis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatepermis', []);

        return parent::getDatepermis();
    }

    /**
     * {@inheritDoc}
     */
    public function setGarantie($garantie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGarantie', [$garantie]);

        return parent::setGarantie($garantie);
    }

    /**
     * {@inheritDoc}
     */
    public function getGarantie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGarantie', []);

        return parent::getGarantie();
    }

    /**
     * {@inheritDoc}
     */
    public function setDure($dure)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDure', [$dure]);

        return parent::setDure($dure);
    }

    /**
     * {@inheritDoc}
     */
    public function getDure()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDure', []);

        return parent::getDure();
    }

    /**
     * {@inheritDoc}
     */
    public function setIncendies($incendies)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIncendies', [$incendies]);

        return parent::setIncendies($incendies);
    }

    /**
     * {@inheritDoc}
     */
    public function getIncendies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIncendies', []);

        return parent::getIncendies();
    }

    /**
     * {@inheritDoc}
     */
    public function setVols($vols)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVols', [$vols]);

        return parent::setVols($vols);
    }

    /**
     * {@inheritDoc}
     */
    public function getVols()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVols', []);

        return parent::getVols();
    }

    /**
     * {@inheritDoc}
     */
    public function setBris($bris)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBris', [$bris]);

        return parent::setBris($bris);
    }

    /**
     * {@inheritDoc}
     */
    public function getBris()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBris', []);

        return parent::getBris();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssistance1($assistance1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssistance1', [$assistance1]);

        return parent::setAssistance1($assistance1);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssistance1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssistance1', []);

        return parent::getAssistance1();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssistance2($assistance2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssistance2', [$assistance2]);

        return parent::setAssistance2($assistance2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssistance2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssistance2', []);

        return parent::getAssistance2();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefences($defences)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefences', [$defences]);

        return parent::setDefences($defences);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefences()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefences', []);

        return parent::getDefences();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssistance3($assistance3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssistance3', [$assistance3]);

        return parent::setAssistance3($assistance3);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssistance3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssistance3', []);

        return parent::getAssistance3();
    }

}
