<?php

use App\Classes\PageBaseController;

class ServiceBackOfficeAdmin_Controller extends PageBaseController
{
  protected $view = 'services/back-office-admin/view.twig';
  public static string $template_file = 'template-back-office-admin-service.php';
  public static string $template_name = 'SubPage - Back Office Admin Service';

  protected function initialize()
  {
    $this->add_to_context([
      'title' => 'Sobre nosotros',
    ]);

  }


}