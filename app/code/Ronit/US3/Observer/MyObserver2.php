<?php

namespace Ronit\US3\Observer;

use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class MyObserver2 implements ObserverInterface{
    private $log;
    public function __construct(LoggerInterface $log){
        $this->log=$log;
    }
    public function execute(\Magento\Framework\Event\Observer $observer){
        $html=$observer->getEvent()->getData('response')->getBody();
        $this->log->info($html . " HummingBird");
    }
}