<?php

namespace Ronit\RonitModule\Plugin;

use Magento\Theme\Block\Html\Breadcrumbs;

class BreadcrumbsPlugin{
    public function beforeAddCrumb(Breadcrumbs $subject, $crumbName, $crumbInfo){
        $crumbInfo['label'] = "Hummingbird " . $crumbInfo['label'];
        return [$crumbName, $crumbInfo];
    }
}


?>