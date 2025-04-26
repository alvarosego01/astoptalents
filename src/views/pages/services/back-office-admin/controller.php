<?php

use App\Classes\generalFunctions;
use App\Classes\PageBaseController;

class ServiceBackOfficeAdmin_Controller extends PageBaseController
{
  protected $view = 'services/back-office-admin/back-office-view.twig';
  public static string $template_file = 'template-back-office-admin-service.php';
  public static string $template_name = 'SubPage - Back Office Admin Service';

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
          'Basic Back Office',
          'Basic administrative support, payroll, and compliance management.',
          'Payroll Management, Basic Compliance Support',
          '80%'
        ),
        array(
          'Advanced Back Office',
          'Full-service back-office management with ongoing support.',
          'All Basic Features + Customer Support, Reporting',
          '82%'
        ),
        array(
          'Enterprise Back Office',
          'Complete back-office solution with customized reporting and 24/7 support.',
          'Full Integration, Custom Reports, Ongoing Support',
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
