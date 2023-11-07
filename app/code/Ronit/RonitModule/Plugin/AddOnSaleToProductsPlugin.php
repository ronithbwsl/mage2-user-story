<?php

declare(strict_types=1);

namespace Ronit\RonitModule\Plugin;

use Magento\Catalog\Model\Product;

class AddOnSaleToProductsPlugin{
    public function afterGetName(Product $subject, $result){
        $price = $subject->getPrice();
        if($price < 60){
            $result = $result . " On Sale!";
        }
        return $result;
    }
}



?>