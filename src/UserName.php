<?php 
namespace App;

class UserName {

    public function __construct(public string $name) {

    }

    /**
     * name getter
     *
     * @return string
     */
    public function getName():string {
        return $this->name;
    }
}

?>