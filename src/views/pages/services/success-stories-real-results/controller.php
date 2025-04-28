<?php

use App\Classes\PageBaseController;

class ServiceSuccessStoriesRealResults_Controller extends PageBaseController
{
  protected $view = 'services/success-stories-real-results/view.twig';
  public static string $template_file = 'template-success-stories-real-results.php';
  public static string $template_name = 'SubPage - Success Stories: Real Results with ASTopTalent';

  protected $general_functions;

  protected function initialize()
  {
    $this->add_to_context([
      'title' => 'Success Stories: Real Results ',
    ]);
  }
}
