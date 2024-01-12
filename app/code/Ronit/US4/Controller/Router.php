<?php

namespace Ronit\US4\Controller;

use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\RouterInterface;

/**
 * Class Router
 */
class Router implements RouterInterface
{
    /**
     * @var ActionFactory
     */
    private $actionFactory;

    /**
     * @var ResponseInterface
     */
    private $response;

    private $pascalCasePattern = "/^[A-Z][A-Za-z0-9]*$/";

    /**
     * Router constructor.
     *
     * @param ActionFactory $actionFactory
     * @param ResponseInterface $response
     */
    public function __construct(
        ActionFactory $actionFactory,
        ResponseInterface $response,
    ) {
        $this->actionFactory = $actionFactory;
        $this->response = $response;
    }

    /**
     * @param RequestInterface $request
     * @return ActionInterface | null
     */

     private function splitPathIntoChunks($path)
     {
         $pathChunks = preg_split('/(?=[A-Z])/', $path);
         $isValidPath = false;
         $frontName = null;
         $controller = null;
         $action = null;
         if (count($pathChunks) !== 4) {
             return [$frontName, $frontName, $controller, $isValidPath];
         }
         $isValidPath = true;
         $frontName = strtolower($pathChunks[1]);
         $controller = strtolower($pathChunks[2]);
         $action = strtolower($pathChunks[3]);
         return [$frontName, $controller, $action, $isValidPath];
 
     }
    public function match(RequestInterface $request)
    {
        $path = trim($request->getPathInfo(), '/');

        $isPascalCase = preg_match($this->pascalCasePattern, $path);

        if ($isPascalCase) {

            [$frontName, $controller, $action, $isValidPath] = $this->splitPathIntoChunks($path);

            if (!$isValidPath) {
                // $this->response->setRedirect("/contact");
                // $request->setDispatched(true);
                // return $this->actionFactory->create('Magento\Framework\App\Action\Redirect');
                return null;
            }

            $this->response->setRedirect("/$frontName/$controller/$action");
            $request->setDispatched(true);
            return $this->actionFactory->create('Magento\Framework\App\Action\Redirect');

        }else{
            // $this->response->setRedirect("/contact");
            // $request->setDispatched(true);
            // return $this->actionFactory->create('Magento\Framework\App\Action\Redirect');
            return null;
        }

    }
}