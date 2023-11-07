<?php

namespace Ronit\RonitModule\Plugin;

use Magento\Theme\Block\Html\Footer;

class CopyrightPlugin{

    public function afterGetCopyright(Footer $subject, $result){
        return $result . " Ronit";
    }

}

?>