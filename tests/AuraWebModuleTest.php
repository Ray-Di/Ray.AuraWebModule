<?php

namespace Ray\AuraWebModule;

use Aura\Web\Request;
use Aura\Web\Response;
use Ray\Di\Injector;

class AuraWebModuleTest extends \PHPUnit_Framework_TestCase
{
    public function testRequest()
    {
        $instance = (new Injector(new AuraWebModule(), $_ENV['TMP_DIR']))->getInstance('Aura\Web\Request');
        $this->assertInstanceOf('Aura\Web\Request', $instance);
    }

    public function testResponse()
    {
        $instance = (new Injector(new AuraWebModule(), $_ENV['TMP_DIR']))->getInstance('Aura\Web\Response');
        $this->assertInstanceOf('Aura\Web\Response', $instance);
    }
}
