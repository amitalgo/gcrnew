<?php

namespace DoctrineProxies\__CG__\App\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class News extends \App\Entities\News implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entities\\News' . "\0" . 'id', '' . "\0" . 'App\\Entities\\News' . "\0" . 'newsHeading', '' . "\0" . 'App\\Entities\\News' . "\0" . 'thumbnail', '' . "\0" . 'App\\Entities\\News' . "\0" . 'tag', '' . "\0" . 'App\\Entities\\News' . "\0" . 'type', '' . "\0" . 'App\\Entities\\News' . "\0" . 'newsSummary', '' . "\0" . 'App\\Entities\\News' . "\0" . 'newsCountryId', '' . "\0" . 'App\\Entities\\News' . "\0" . 'deleted', '' . "\0" . 'App\\Entities\\News' . "\0" . 'isActive', '' . "\0" . 'App\\Entities\\News' . "\0" . 'source', '' . "\0" . 'App\\Entities\\News' . "\0" . 'eventStartDate', '' . "\0" . 'App\\Entities\\News' . "\0" . 'eventEndDate', '' . "\0" . 'App\\Entities\\News' . "\0" . 'createdAt', '' . "\0" . 'App\\Entities\\News' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entities\\News' . "\0" . 'NewsAttachment'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entities\\News' . "\0" . 'id', '' . "\0" . 'App\\Entities\\News' . "\0" . 'newsHeading', '' . "\0" . 'App\\Entities\\News' . "\0" . 'thumbnail', '' . "\0" . 'App\\Entities\\News' . "\0" . 'tag', '' . "\0" . 'App\\Entities\\News' . "\0" . 'type', '' . "\0" . 'App\\Entities\\News' . "\0" . 'newsSummary', '' . "\0" . 'App\\Entities\\News' . "\0" . 'newsCountryId', '' . "\0" . 'App\\Entities\\News' . "\0" . 'deleted', '' . "\0" . 'App\\Entities\\News' . "\0" . 'isActive', '' . "\0" . 'App\\Entities\\News' . "\0" . 'source', '' . "\0" . 'App\\Entities\\News' . "\0" . 'eventStartDate', '' . "\0" . 'App\\Entities\\News' . "\0" . 'eventEndDate', '' . "\0" . 'App\\Entities\\News' . "\0" . 'createdAt', '' . "\0" . 'App\\Entities\\News' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entities\\News' . "\0" . 'NewsAttachment'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (News $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsHeading()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsHeading', []);

        return parent::getNewsHeading();
    }

    /**
     * {@inheritDoc}
     */
    public function setNewsHeading($newsHeading)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNewsHeading', [$newsHeading]);

        return parent::setNewsHeading($newsHeading);
    }

    /**
     * {@inheritDoc}
     */
    public function getThumbnail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThumbnail', []);

        return parent::getThumbnail();
    }

    /**
     * {@inheritDoc}
     */
    public function setThumbnail($thumbnail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThumbnail', [$thumbnail]);

        return parent::setThumbnail($thumbnail);
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsSummary()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsSummary', []);

        return parent::getNewsSummary();
    }

    /**
     * {@inheritDoc}
     */
    public function setNewsSummary($newsSummary)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNewsSummary', [$newsSummary]);

        return parent::setNewsSummary($newsSummary);
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsCountryId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsCountryId', []);

        return parent::getNewsCountryId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNewsCountryId($newsCountryId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNewsCountryId', [$newsCountryId]);

        return parent::setNewsCountryId($newsCountryId);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', []);

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsAttachment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsAttachment', []);

        return parent::getNewsAttachment();
    }

    /**
     * {@inheritDoc}
     */
    public function setNewsAttachment($NewsAttachment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNewsAttachment', [$NewsAttachment]);

        return parent::setNewsAttachment($NewsAttachment);
    }

    /**
     * {@inheritDoc}
     */
    public function getTag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTag', []);

        return parent::getTag();
    }

    /**
     * {@inheritDoc}
     */
    public function setTag($tag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTag', [$tag]);

        return parent::setTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function getisActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getisActive', []);

        return parent::getisActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$isActive]);

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getSource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSource', []);

        return parent::getSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setSource($source)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSource', [$source]);

        return parent::setSource($source);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventStartDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventStartDate', []);

        return parent::getEventStartDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventStartDate($eventStartDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventStartDate', [$eventStartDate]);

        return parent::setEventStartDate($eventStartDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventEndDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventEndDate', []);

        return parent::getEventEndDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventEndDate($eventEndDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventEndDate', [$eventEndDate]);

        return parent::setEventEndDate($eventEndDate);
    }

}
