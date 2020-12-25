<?php

namespace ContainerLkDjdkI;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercde91 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf00c9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7e2fe = [
        
    ];

    public function getConnection()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'getConnection', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'getMetadataFactory', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'getExpressionBuilder', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'beginTransaction', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'getCache', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'transactional', array('func' => $func), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->transactional($func);
    }

    public function commit()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'commit', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->commit();
    }

    public function rollback()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'rollback', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'getClassMetadata', array('className' => $className), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'createQuery', array('dql' => $dql), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'createNamedQuery', array('name' => $name), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'createQueryBuilder', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'flush', array('entity' => $entity), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'clear', array('entityName' => $entityName), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->clear($entityName);
    }

    public function close()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'close', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->close();
    }

    public function persist($entity)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'persist', array('entity' => $entity), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'remove', array('entity' => $entity), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'refresh', array('entity' => $entity), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'detach', array('entity' => $entity), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'merge', array('entity' => $entity), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'contains', array('entity' => $entity), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'getEventManager', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'getConfiguration', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'isOpen', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'getUnitOfWork', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'getProxyFactory', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'initializeObject', array('obj' => $obj), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'getFilters', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'isFiltersStateClean', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'hasFilters', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return $this->valueHoldercde91->hasFilters();
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

        $instance->initializerf00c9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercde91) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercde91 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercde91->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, '__get', ['name' => $name], $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        if (isset(self::$publicProperties7e2fe[$name])) {
            return $this->valueHoldercde91->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercde91;

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

        $targetObject = $this->valueHoldercde91;
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
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercde91;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHoldercde91;
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
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, '__isset', array('name' => $name), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercde91;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercde91;
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
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, '__unset', array('name' => $name), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercde91;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercde91;
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
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, '__clone', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        $this->valueHoldercde91 = clone $this->valueHoldercde91;
    }

    public function __sleep()
    {
        $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, '__sleep', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;

        return array('valueHoldercde91');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf00c9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf00c9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf00c9 && ($this->initializerf00c9->__invoke($valueHoldercde91, $this, 'initializeProxy', array(), $this->initializerf00c9) || 1) && $this->valueHoldercde91 = $valueHoldercde91;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercde91;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercde91;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
