<?php
/**
 * This file is part of the Ray.AuraWebModule package
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace Ray\AuraWebModule;

use Aura\Web\Request;

trait AuraWebRequestInject
{
    /**
     * @var Request
     */
    private $request;

    /**
     * @param Request $request
     *
     * @\Ray\Di\Di\Inject
     */
    public function setAuraWebRequest(Request $request)
    {
        $this->request = $request;
    }
}
