<?php

require dirname(dirname(__DIR__)) . '/vendor/autoload.php';

use Aura\Web\Request;
use Ray\DbalModule\AuraWebRequestInject;
use Ray\DbalModule\AuraWebModule;
use Ray\Di\Injector;

class Fake
{
    use AuraWebRequestInject;

    public function foo()
    {
        return $this->request;
    }
}

$fake = (new Injector(new AuraWebModule))->getInstance(Fake::class);
$works = ($fake->foo() instanceof Request);

echo ($works ? 'It works!' : 'It DOES NOT work!') . PHP_EOL;

