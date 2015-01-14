# ray/aura-web-module

[Aura.Web](https://github.com/auraphp/Aura.Web) module for [Ray.Di](https://github.com/koriym/Ray.Di)

## Installation

### Composer install

    $ composer require ray/aura-web-module
 
### Module install

```php
use Ray\AuraWebModule\AuraWebModule;
use Ray\Di\AbstractModule;

class AppModule extends AbstractModule
{
    protected function configure()
    {
        $this->install(new AuraWebModule);
    }
}

```
### DI trait

 * [AuraWebRequestInject](https://github.com/Ray-Di/Ray.AuraWebModule/blob/master/src/AuraWebRequestInject.php) for ` Aura\Web\Request` interface
 * [AuraWebResponseInject](https://github.com/Ray-Di/Ray.AuraWebModule/blob/master/src/AuraWebResponseInject.php) for ` Aura\Web\Request` interface
 
### Demo

    $ php docs/demo/run.php
    // It works!

### Requiuments

 * PHP 5.4+
 * hhvm
 
