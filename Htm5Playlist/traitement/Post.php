<?php

class Post {

    private $arr_titre = Array();
    private $arr_value = Array();

    public function __construct() {
        if (isset($_POST)) {
            $this->arr_titre = array_keys($_POST);
            $this->arr_value = array_values($_POST);
        }
    }

    public function getTitre() {
        return $this->arr_titre;
    }

    public function getValue() {
        return $this->arr_value;
    }

}