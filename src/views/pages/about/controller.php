<?php

use App\Classes\PageBaseController;

class AboutController extends PageBaseController
{
  protected $view = 'src/views/pages/about/view.twig';

  protected function initialize()
  {

    $this->add_to_context([
      'title' => 'Sobre nosotros',
    ]);

  }
}
