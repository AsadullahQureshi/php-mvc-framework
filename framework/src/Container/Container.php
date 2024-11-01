<?php 
namespace Asad\Framework\Container;

use Psr\Container\ContainerInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use GaryClarke\Framework\Tests\DependantClass;

class Container implements ContainerInterface{

    
    private array $services = [];

    public function add(string $id, string|object $concrete=null)
    {
        if (null === $concrete) {
            if (!class_exists($id)) {
                throw new ContainerException("Service $id could not be found");
            }

            $concrete = $id;
        }
        return $this->services[$id]=$concrete;
    }
    public function get(string $id)
    {
        if(!$this->has($id)){
            if (!class_exists($id)) {
                throw new ContainerException("Service $id could not be resolved");
            }
            $this->add($id);
        }
        return new $this->services[$id];
    }

    public function has(string $id):bool
    {
        return array_key_exists($id,$this->services);
    }
}