<?php

namespace Ronit\US6\Block;

use Magento\Framework\View\Element\Template;

class CustomBlock extends Template{

    protected function _prepareLayout(){
        parent::_prepareLayout();

        $pageMainTitle = $this->getLayout()->getBlock('page.main.title');
        if ($pageMainTitle) {
            $pageMainTitle->setPageTitle("User Story 6 Part 1");
        }

        return $this;
    }
    protected function _toHtml()
    {
        return '<div>Some Data From Ronit\US6\Block\CustomBlock Inside a &lt;div&gt;. This can be customized...</div>';
    }

}