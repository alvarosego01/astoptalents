<?php

use App\Classes\PageBaseController;

class CareersController extends PageBaseController
{
  protected $view = 'careers/view.twig';
  public static string $template_file = 'template-careers.php';
  public static string $template_name = 'Page - Careers';


  protected function initialize()
  {
    $this->add_to_context([
      'title' => 'Sobre nosotros',
    ]);

  }


}