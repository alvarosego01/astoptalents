<?php

use App\Classes\PageBaseController;

class ServicesController extends PageBaseController
{
  protected $view = 'services/view.twig';
  public static string $template_file = 'template-services.php';
  public static string $template_name = 'Page - Services';


  protected function initialize()
  {
    $this->add_to_context([
      'title' => 'Comprehensive talent solutions ',
    ]);

  }


}