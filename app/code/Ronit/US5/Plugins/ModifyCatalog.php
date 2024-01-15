<?php

namespace Ronit\US5\Plugins;

use Magento\Catalog\Block\Product\View\Description;

class ModifyCatalog{
    public function afterGetProduct(Description $subject,$result){
        $result->setSku($result->getSku() . " RonitUS5");
        return $result;
    }
}