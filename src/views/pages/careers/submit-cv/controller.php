<?php

use App\Classes\PageBaseController;

class CareersSubmitCv_Controller extends PageBaseController
{
  protected $view = 'careers/submit-cv/view.twig';
  public static string $template_file = 'template-submit-cv-service.php';
  public static string $template_name = 'SubPage - Submit CV Careers';

  protected function initialize()
  {
    $this->add_to_context([
      'title' => 'Sobre nosotros',
    ]);

  }


}