<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Campaign extends \AppBundle\Entity\Campaign implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Campaign' . "\0" . 'campId', '' . "\0" . 'AppBundle\\Entity\\Campaign' . "\0" . 'vid', '' . "\0" . 'AppBundle\\Entity\\Campaign' . "\0" . 'campName', '' . "\0" . 'AppBundle\\Entity\\Campaign' . "\0" . 'geo', '' . "\0" . 'AppBundle\\Entity\\Campaign' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Campaign' . "\0" . 'tid'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Campaign' . "\0" . 'campId', '' . "\0" . 'AppBundle\\Entity\\Campaign' . "\0" . 'vid', '' . "\0" . 'AppBundle\\Entity\\Campaign' . "\0" . 'campName', '' . "\0" . 'AppBundle\\Entity\\Campaign' . "\0" . 'geo', '' . "\0" . 'AppBundle\\Entity\\Campaign' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Campaign' . "\0" . 'tid'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Campaign $proxy) {
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
    public function setCampId($campId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCampId', [$campId]);

        return parent::setCampId($campId);
    }

    /**
     * {@inheritDoc}
     */
    public function getCampId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCampId', []);

        return parent::getCampId();
    }

    /**
     * {@inheritDoc}
     */
    public function setVid($vid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVid', [$vid]);

        return parent::setVid($vid);
    }

    /**
     * {@inheritDoc}
     */
    public function getVid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVid', []);

        return parent::getVid();
    }

    /**
     * {@inheritDoc}
     */
    public function setCampName($campName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCampName', [$campName]);

        return parent::setCampName($campName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCampName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCampName', []);

        return parent::getCampName();
    }

    /**
     * {@inheritDoc}
     */
    public function setGeo($geo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGeo', [$geo]);

        return parent::setGeo($geo);
    }

    /**
     * {@inheritDoc}
     */
    public function getGeo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGeo', []);

        return parent::getGeo();
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
    public function setTid(\AppBundle\Entity\TrafficSource $tid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTid', [$tid]);

        return parent::setTid($tid);
    }

    /**
     * {@inheritDoc}
     */
    public function getTid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTid', []);

        return parent::getTid();
    }

}
