<?php

namespace Ronit\US7\Block;
use Magento\Framework\View\Element\Template;

class Message extends Template{
    protected function _toHtml(){
        return "<p>US7's Message</p>";
    }

    protected function _afterToHtml($html){
        return $html;
    }
}