<?php

use App\Classes\PageBaseController;

class PrivacyPolicyController extends PageBaseController
{
  protected $view = 'privacy_policy/privacy_policy-view.twig';
  public static string $template_file = 'template-privacy-policy.php';
  public static string $template_name = 'Page - Privacy Policy';


  protected function initialize()
  {
    $this->add_to_context([
      'title' => 'Privacy Policy',
    ]);

  }


}
