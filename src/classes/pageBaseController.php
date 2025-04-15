<?php

namespace App\Classes;
use Timber\Timber;

abstract class PageBaseController
{
  protected $context;
  protected $view;

  public function __construct()
  {
    $this->context = Timber::context();
    $this->initialize();
  }

  abstract protected function initialize();

  public function render()
  {
    Timber::render($this->view, $this->context);
  }

  protected function add_to_context($data)
  {
    $this->context = array_merge($this->context, $data);
  }
}
