<?php

namespace Ronit\US7\Controller\US7;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class US7 extends Action{
    private $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory){
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute(){
        return $this->resultPageFactory->create();
    }
}