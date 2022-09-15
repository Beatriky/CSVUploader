<?php

namespace ContainerBBxkrJx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8464e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2c1ff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties67836 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'getConnection', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'getMetadataFactory', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'getExpressionBuilder', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'beginTransaction', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'getCache', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'transactional', array('func' => $func), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'commit', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->commit();
    }

    public function rollback()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'rollback', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'getClassMetadata', array('className' => $className), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'createQuery', array('dql' => $dql), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'createNamedQuery', array('name' => $name), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'createQueryBuilder', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'flush', array('entity' => $entity), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'clear', array('entityName' => $entityName), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->clear($entityName);
    }

    public function close()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'close', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->close();
    }

    public function persist($entity)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'persist', array('entity' => $entity), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'remove', array('entity' => $entity), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'refresh', array('entity' => $entity), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'detach', array('entity' => $entity), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'merge', array('entity' => $entity), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'contains', array('entity' => $entity), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'getEventManager', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'getConfiguration', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'isOpen', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'getUnitOfWork', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'getProxyFactory', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'initializeObject', array('obj' => $obj), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'getFilters', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'isFiltersStateClean', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'hasFilters', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return $this->valueHolder8464e->hasFilters();
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

        $instance->initializer2c1ff = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder8464e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8464e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8464e->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, '__get', ['name' => $name], $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        if (isset(self::$publicProperties67836[$name])) {
            return $this->valueHolder8464e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8464e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8464e;
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
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8464e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8464e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, '__isset', array('name' => $name), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8464e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8464e;
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
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, '__unset', array('name' => $name), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8464e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8464e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, '__clone', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        $this->valueHolder8464e = clone $this->valueHolder8464e;
    }

    public function __sleep()
    {
        $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, '__sleep', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;

        return array('valueHolder8464e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2c1ff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2c1ff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2c1ff && ($this->initializer2c1ff->__invoke($valueHolder8464e, $this, 'initializeProxy', array(), $this->initializer2c1ff) || 1) && $this->valueHolder8464e = $valueHolder8464e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8464e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8464e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
