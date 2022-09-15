<?php

namespace ContainerXtTEuvu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd3423 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer136af = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties96555 = [
        
    ];

    public function getConnection()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'getConnection', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'getMetadataFactory', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'getExpressionBuilder', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'beginTransaction', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'getCache', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->getCache();
    }

    public function transactional($func)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'transactional', array('func' => $func), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'wrapInTransaction', array('func' => $func), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'commit', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->commit();
    }

    public function rollback()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'rollback', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'getClassMetadata', array('className' => $className), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'createQuery', array('dql' => $dql), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'createNamedQuery', array('name' => $name), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'createQueryBuilder', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'flush', array('entity' => $entity), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'clear', array('entityName' => $entityName), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->clear($entityName);
    }

    public function close()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'close', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->close();
    }

    public function persist($entity)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'persist', array('entity' => $entity), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'remove', array('entity' => $entity), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'refresh', array('entity' => $entity), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'detach', array('entity' => $entity), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'merge', array('entity' => $entity), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'getRepository', array('entityName' => $entityName), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'contains', array('entity' => $entity), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'getEventManager', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'getConfiguration', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'isOpen', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'getUnitOfWork', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'getProxyFactory', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'initializeObject', array('obj' => $obj), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'getFilters', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'isFiltersStateClean', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'hasFilters', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return $this->valueHolderd3423->hasFilters();
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

        $instance->initializer136af = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderd3423) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd3423 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd3423->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, '__get', ['name' => $name], $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        if (isset(self::$publicProperties96555[$name])) {
            return $this->valueHolderd3423->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd3423;

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

        $targetObject = $this->valueHolderd3423;
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
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd3423;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd3423;
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
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, '__isset', array('name' => $name), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd3423;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd3423;
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
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, '__unset', array('name' => $name), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd3423;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd3423;
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
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, '__clone', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        $this->valueHolderd3423 = clone $this->valueHolderd3423;
    }

    public function __sleep()
    {
        $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, '__sleep', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;

        return array('valueHolderd3423');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer136af = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer136af;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer136af && ($this->initializer136af->__invoke($valueHolderd3423, $this, 'initializeProxy', array(), $this->initializer136af) || 1) && $this->valueHolderd3423 = $valueHolderd3423;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd3423;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd3423;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
