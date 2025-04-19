<?php

use App\Classes\PageBaseController;

class ServiceRemoteTalentRec_Controller extends PageBaseController
{
  protected $view = 'services/remote-talent-rec/view.twig';
  public static string $template_file = 'template-remote-talent-rec-service.php';
  public static string $template_name = 'SubPage - Remote Talent Rec Service';

  protected function initialize()
  {
    $this->add_to_context([
      'title' => 'Sobre nosotros',
    ]);

  }


}