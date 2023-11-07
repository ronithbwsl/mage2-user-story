<?php 

declare(strict_types=1);

namespace Ronit\Test;

use \Magento\Catalog\Api\Data\CategoryInterface;

class Test{

    private $categoryInterface;
    private $exampleString;
    private $exampleArray;

    public function __construct(CategoryInterface $categoryInterface,
        array $exampleArray = array(1,2,3),
        string $exampleString = "Ronit's User Story One"
    ){
        $this->categoryInterface = $categoryInterface;
        $this->exampleString = $exampleString;
        $this->exampleArray = $exampleArray;
    }

    public function displayParams(){
        echo "Array is : [" . implode(", ",$this->exampleArray) . "]<br/>";
        echo "String is : " . $this->exampleString;
    }


}

?>