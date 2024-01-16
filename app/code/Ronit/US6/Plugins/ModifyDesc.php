<?php

namespace Ronit\US6\Plugins;

use \Magento\Catalog\Block\Product\View\Description;

class ModifyDesc {
    public function afterToHtml(Description $subject,$result){
        return $result . "sample description";
    } 
}