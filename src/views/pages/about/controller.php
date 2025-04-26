<?php

use App\Classes\PageBaseController;

class AboutController extends PageBaseController
{
  protected $view = 'about/about-view.twig';
  public static string $template_file = 'template-about.php';
  public static string $template_name = 'Page - About us';


  protected function initialize()
  {
    $this->add_to_context([
      'title' => 'About Us',
    ]);

  }


}
