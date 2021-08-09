<?php

namespace ContainerKtXVQ5U;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc2508 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer120a4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4a874 = [
        
    ];

    public function getConnection()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'getConnection', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'getMetadataFactory', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'getExpressionBuilder', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'beginTransaction', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'getCache', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->getCache();
    }

    public function transactional($func)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'transactional', array('func' => $func), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->transactional($func);
    }

    public function commit()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'commit', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->commit();
    }

    public function rollback()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'rollback', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'getClassMetadata', array('className' => $className), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'createQuery', array('dql' => $dql), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'createNamedQuery', array('name' => $name), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'createQueryBuilder', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'flush', array('entity' => $entity), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'clear', array('entityName' => $entityName), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->clear($entityName);
    }

    public function close()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'close', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->close();
    }

    public function persist($entity)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'persist', array('entity' => $entity), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'remove', array('entity' => $entity), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'refresh', array('entity' => $entity), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'detach', array('entity' => $entity), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'merge', array('entity' => $entity), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'getRepository', array('entityName' => $entityName), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'contains', array('entity' => $entity), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'getEventManager', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'getConfiguration', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'isOpen', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'getUnitOfWork', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'getProxyFactory', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'initializeObject', array('obj' => $obj), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'getFilters', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'isFiltersStateClean', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'hasFilters', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return $this->valueHolderc2508->hasFilters();
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

        $instance->initializer120a4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc2508) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc2508 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc2508->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, '__get', ['name' => $name], $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        if (isset(self::$publicProperties4a874[$name])) {
            return $this->valueHolderc2508->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2508;

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

        $targetObject = $this->valueHolderc2508;
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
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2508;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc2508;
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
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, '__isset', array('name' => $name), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2508;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc2508;
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
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, '__unset', array('name' => $name), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2508;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc2508;
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
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, '__clone', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        $this->valueHolderc2508 = clone $this->valueHolderc2508;
    }

    public function __sleep()
    {
        $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, '__sleep', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;

        return array('valueHolderc2508');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer120a4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer120a4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer120a4 && ($this->initializer120a4->__invoke($valueHolderc2508, $this, 'initializeProxy', array(), $this->initializer120a4) || 1) && $this->valueHolderc2508 = $valueHolderc2508;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc2508;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc2508;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
