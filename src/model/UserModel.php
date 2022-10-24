<?php
class UserModel {
    var $fullName;
    public function __construct($fullName) {
        $this->fullName = $fullName;
    }

    public function getFullName() {
        return $this->fullName;
    }


}