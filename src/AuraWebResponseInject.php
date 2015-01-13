<?php
/**
 * This file is part of the Ray.AuraWebModule package
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace Ray\AuraWebModule;

use Aura\Web\Response;

trait AuraWebResponseInject
{
    /**
     * @var Response
     */
    private $response;

    /**
     * @param Response $request
     *
     * @\Ray\Di\Di\Inject
     */
    public function setAuraWebResponse(Response $response)
    {
        $this->response = $response;
    }
}
