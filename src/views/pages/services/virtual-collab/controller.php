<?php

use App\Classes\generalFunctions;
use App\Classes\PageBaseController;

class ServiceVirtualCollab_Controller extends PageBaseController
{
  protected $view = 'services/virtual-collab/virtual-collab-view.twig';
  public static string $template_file = 'template-virtual-collab-service.php';
  public static string $template_name = 'SubPage - Virtual Collaboration Service';

  protected $general_functions;

  public function __construct()
  {
    parent::__construct();
    $this->general_functions = new generalFunctions();
    $this->setTable();
  }

  function setTable()
  {

    $table = array(
      'headers' => array(
        'Plan',
        'Description',
        'Features',
        'Estimated Savings'
      ),
      'values' => array(
        array(
          'Basic Virtual Office',
          'Essential features for small teams and startups.',
          'Task Management, Chat, Video Calls',
          '80%'
        ),
        array(
          'Premium Virtual Office',
          'Advanced features for growing teams with custom integrations.',
          'All Basic Features + Advanced Integrations',
          '82%'
        ),
        array(
          'Enterprise Virtual Office',
          'Full suite of collaboration tools for large enterprises.',
          'Full Integration, Custom Workspaces, 24/7 Support',
          '85%'
        ),
      )
    );

    $this->add_to_context([
      'table' => $table,
    ]);
  }

  protected function initialize()
  {
    $this->add_to_context([
      'title' => 'Sobre nosotros',
    ]);
  }
}
