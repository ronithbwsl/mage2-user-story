<?php

namespace Ronit\RonitModule\Plugin;

use Magento\Theme\Block\Html\Header;

class WelcomeMsgPlugin{

    public function afterGetWelcome(Header $subject, $result){
        return "Welcome HBWSL!";
    }

}

?>