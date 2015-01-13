<?php
/**
 * This file is part of the Ray.AuraWebModule package
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace Ray\AuraWebModule;

use Aura\Web\Request;
use Aura\Web\Response;
use Ray\Di\AbstractModule;
use Ray\Di\Scope;

class AuraWebModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->bind(Request::class)->toProvider(RequestProvider::class)->in(Scope::SINGLETON);
        $this->bind(Response::class)->toProvider(ResponseProvider::class)->in(Scope::SINGLETON);
    }
}
