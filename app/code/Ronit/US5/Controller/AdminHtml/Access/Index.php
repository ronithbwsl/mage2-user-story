<?php

namespace Ronit\US5\Controller\AdminHtml\Access;

use Magento\Framework\App\Action\Action;

class Index extends Action{
    public function execute(){
        $accessParam = $this->getRequest()->getParam('access');
        if ($accessParam == 'true') {
            $this->getResponse()->setBody('Welcome to a custom Admin Page');
        } else {
            $this->getResponse()->setBody("You don't have privileges to access this page");
        }
    }
}