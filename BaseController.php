<?php

class BaseController {

    protected $app;
    public $base_url;

    public function __construct() {
        $this->base_url = "test";
    }
}
