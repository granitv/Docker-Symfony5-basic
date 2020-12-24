<?php

namespace ContainerUx7IwA3;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder97aac = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7f477 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc304a = [
        
    ];

    public function getConnection()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'getConnection', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'getMetadataFactory', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'getExpressionBuilder', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'beginTransaction', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'getCache', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'transactional', array('func' => $func), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->transactional($func);
    }

    public function commit()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'commit', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->commit();
    }

    public function rollback()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'rollback', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'getClassMetadata', array('className' => $className), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'createQuery', array('dql' => $dql), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'createNamedQuery', array('name' => $name), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'createQueryBuilder', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'flush', array('entity' => $entity), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'clear', array('entityName' => $entityName), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->clear($entityName);
    }

    public function close()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'close', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->close();
    }

    public function persist($entity)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'persist', array('entity' => $entity), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'remove', array('entity' => $entity), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'refresh', array('entity' => $entity), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'detach', array('entity' => $entity), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'merge', array('entity' => $entity), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'contains', array('entity' => $entity), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'getEventManager', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'getConfiguration', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'isOpen', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'getUnitOfWork', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'getProxyFactory', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'initializeObject', array('obj' => $obj), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'getFilters', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'isFiltersStateClean', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'hasFilters', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return $this->valueHolder97aac->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer7f477 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder97aac) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder97aac = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder97aac->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, '__get', ['name' => $name], $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        if (isset(self::$publicPropertiesc304a[$name])) {
            return $this->valueHolder97aac->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97aac;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder97aac;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97aac;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder97aac;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value; return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, '__isset', array('name' => $name), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97aac;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder97aac;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, '__unset', array('name' => $name), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97aac;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder97aac;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, '__clone', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        $this->valueHolder97aac = clone $this->valueHolder97aac;
    }

    public function __sleep()
    {
        $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, '__sleep', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;

        return array('valueHolder97aac');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7f477 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7f477;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7f477 && ($this->initializer7f477->__invoke($valueHolder97aac, $this, 'initializeProxy', array(), $this->initializer7f477) || 1) && $this->valueHolder97aac = $valueHolder97aac;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder97aac;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder97aac;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
