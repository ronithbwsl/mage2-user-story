<?php

namespace Ronit\US4\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RouterList;
use Psr\Log\LoggerInterface;

class Routes implements ObserverInterface{
    private $log;
    private $routerList;
    public function __construct(RouterList $routerList, LoggerInterface $logger){
        $this->log = $logger;
        $this->routerList = $routerList;
    }
    public function execute(Observer $observer){
        $listOfRoutes = [];
        foreach ($this->routerList as $item) {
            $listOfRoutes[] = get_class($item);
        }

        $this->log->info("The list of available routers for the current page are : " . implode(", ", $listOfRoutes));
    }
}