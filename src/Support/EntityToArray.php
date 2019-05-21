<?php
namespace Phooty\Orm\Support;

class EntityToArray
{
    protected $refs = [];

    public function convert($entity)
    {
        if (!is_object($entity)) {
            throw new \InvalidArgumentException(
                "Invalid entity object."
            );
        }
        
        $methods = $this->getMethodsFromRef(get_class($entity));
        $result = $this->getDataFromEnt($entity, $methods);
        return $result;
    }

    protected function getDataFromEnt($entity, array $methods)
    {
        $data = [];
        foreach ($methods as $key => $method) {
            $data[$key] = call_user_func([$entity, $method]);
        }
        return $data;
    }

    protected function getMethodsFromRef(string $className)
    {
        isset($this->refs[$className]) ?: $this->initReflection($className);
        return $this->refs[$className];
    }

    protected function initReflection(string $className)
    {
        if (!class_exists($className)) {
            throw new \LogicException("Could not find {$className}.");
        }
        $ref = new \ReflectionClass($className);
        $methods = $ref->getMethods(\ReflectionMethod::IS_PUBLIC);
        $result = [];
        foreach ($methods as $method) {
            if (0 === strpos(($n = $method->getName()), 'get')) {
                $result[lcfirst(str_replace_first('get', '', $n))] = $n;
            }
        } 
        $this->refs[$className] = $result;
    }
}
