<?php 

namespace Asad\Framework\Tests;

use Asad\Framework\Container\Container;
use Asad\Framework\Container\ContainerException;

use PHPUnit\Framework\TestCase;

/**
 * ContainerTest
 */
class ContainerTest extends TestCase{    
    
    /** @test */    
    public function a_service_can_be_retrive_from_caontainer()
    {
        // setup
        $container = new Container();

        //Do Some thing 

        $container->add('dependent-class',DependentClass::class);

        // make assertion
        $this->assertInstanceOf(DependentClass::class,$container->get('dependent-class'));
    }
    
    // /** @test */
    // public function a_ContainerException_is_thrown_if_a_service_cannot_be_found()
    // {
    //     // Setup
    //     $container = new Container();

    //     // Expect exception
    //     $this->expectException(ContainerException::class);

    //     // Do something
    //     $container->add('foobar');
    // }
}