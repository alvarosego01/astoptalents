<?php

use App\Classes\PageBaseController;

class ServiceTalentManagement_Controller extends PageBaseController
{
  protected $view = 'services/talent-management/view.twig';
  public static string $template_file = 'template-talent-management-service.php';
  public static string $template_name = 'SubPage - Talent Management Service';

  protected function initialize()
  {
    $this->add_to_context([
      'title' => 'Sobre nosotros',
    ]);

  }


}