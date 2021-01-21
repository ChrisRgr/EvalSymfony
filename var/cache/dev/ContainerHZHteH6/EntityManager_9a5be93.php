<?php

namespace ContainerHZHteH6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder98647 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere4035 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc42a4 = [
        
    ];

    public function getConnection()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'getConnection', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'getMetadataFactory', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'getExpressionBuilder', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'beginTransaction', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'getCache', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->getCache();
    }

    public function transactional($func)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'transactional', array('func' => $func), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->transactional($func);
    }

    public function commit()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'commit', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->commit();
    }

    public function rollback()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'rollback', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'getClassMetadata', array('className' => $className), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'createQuery', array('dql' => $dql), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'createNamedQuery', array('name' => $name), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'createQueryBuilder', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'flush', array('entity' => $entity), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'clear', array('entityName' => $entityName), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->clear($entityName);
    }

    public function close()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'close', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->close();
    }

    public function persist($entity)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'persist', array('entity' => $entity), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'remove', array('entity' => $entity), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'refresh', array('entity' => $entity), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'detach', array('entity' => $entity), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'merge', array('entity' => $entity), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'getRepository', array('entityName' => $entityName), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'contains', array('entity' => $entity), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'getEventManager', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'getConfiguration', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'isOpen', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'getUnitOfWork', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'getProxyFactory', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'initializeObject', array('obj' => $obj), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'getFilters', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'isFiltersStateClean', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'hasFilters', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return $this->valueHolder98647->hasFilters();
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

        $instance->initializere4035 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder98647) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder98647 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder98647->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, '__get', ['name' => $name], $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        if (isset(self::$publicPropertiesc42a4[$name])) {
            return $this->valueHolder98647->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98647;

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

        $targetObject = $this->valueHolder98647;
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
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98647;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder98647;
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
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, '__isset', array('name' => $name), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98647;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder98647;
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
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, '__unset', array('name' => $name), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98647;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder98647;
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
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, '__clone', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        $this->valueHolder98647 = clone $this->valueHolder98647;
    }

    public function __sleep()
    {
        $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, '__sleep', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;

        return array('valueHolder98647');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere4035 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere4035;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere4035 && ($this->initializere4035->__invoke($valueHolder98647, $this, 'initializeProxy', array(), $this->initializere4035) || 1) && $this->valueHolder98647 = $valueHolder98647;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder98647;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder98647;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
