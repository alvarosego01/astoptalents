<?php

use App\Classes\PageBaseController;
use App\Classes\generalFunctions;

class ServiceTalentManagement_Controller extends PageBaseController
{
  protected $view = 'services/talent-management/view.twig';
  public static string $template_file = 'template-talent-management-service.php';
  public static string $template_name = 'SubPage - Talent Management Service';

  protected $general_functions;

  public function __construct()
  {
    parent::__construct();
    $this->general_functions = new generalFunctions();
    $this->setChooseSlider();
  }


  function setChooseSlider()
  {
    $slides = array(
      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/slider_0.png'),
          'alt' => 'Your full service',
        ],
          'button' => [
          'text' => 'Book Your Free Consultation',
          'url' => '#',
        ],
        'info' => [
          'title' => "Step 1: Recruitment",
          'desc' => "ASTopTalent helps you find top talent that aligns with your company’s needs.
           We focus on matching skills, experience, and cultural fit to ensure you have the best professionals on your team."
        ]
      ],
      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/slider_1.png'),
          'alt' => 'Your full service',
        ],
          'button' => [
          'text' => 'Book Your Free Consultation',
          'url' => '#',
        ],
        'info' => [
          'title' => "Step 2: Onboarding & Integration",
          'desc' => "We ensure smooth onboarding by providing customized training,
           clear role definitions, and integration with your company’s processes.
           We make sure your new team members are set up for success from day one."
        ]
      ],
      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/slider_2.png'),
          'alt' => 'Your full service',
        ],
          'button' => [
          'text' => 'Book Your Free Consultation',
          'url' => '#',
        ],
        'info' => [
          'title' => "Step 3: Payroll & Compliance",
          'desc' => "ASTopTalent takes care of all payroll processing, tax management,
          and compliance with local labor laws, so you can focus on growing your
          business with peace of mind."
        ]
      ],
      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/Ongoing Support 2.png'),
          'alt' => 'Your full service',
        ],
          'button' => [
          'text' => 'Book Your Free Consultation',
          'url' => '#',
        ],
        'info' => [
          'title' => "Step 4: Ongoing Support & Performance Tracking",
          'desc' => "We provide continuous support through performance tracking, regular feedback,
           and performance improvement strategies to ensure that your remote teams are always
            performing at their best."
        ]
      ],

    );

    $this->add_to_context([
      'choose_slider' => $slides,
    ]);
  }


  protected function initialize()
  {
    $this->add_to_context([
      'title' => 'Comprehensive Talent Management ',
    ]);
  }
}
