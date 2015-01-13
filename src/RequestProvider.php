<?php
/**
 * This file is part of the Ray.AuraWebModule package
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace Ray\AuraWebModule;

use Aura\Web\Request;
use Aura\Web\WebFactory;
use Ray\Di\ProviderInterface;

class RequestProvider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function get()
    {
        return (new WebFactory($GLOBALS))->newRequest();
    }
}
