<?php

namespace App\Classes;

abstract class PageBaseController {
  protected $context = [];

  public function __construct() {
    $this->add_to_context();
  }

  abstract protected function add_to_context();

  public function get_context() {
    return $this->context;
  }
}
