<?php

use App\Classes\PageBaseController;

class ServiceVirtualCollab_Controller extends PageBaseController
{
  protected $view = 'services/virtual-collab/view.twig';
  public static string $template_file = 'template-virtual-collab-service.php';
  public static string $template_name = 'SubPage - Virtual Collaboration Service';

  protected function initialize()
  {
    $this->add_to_context([
      'title' => 'Sobre nosotros',
    ]);

  }


}