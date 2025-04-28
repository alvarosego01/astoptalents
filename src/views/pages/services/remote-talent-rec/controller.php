<?php

use App\Classes\generalFunctions;
use App\Classes\PageBaseController;

class ServiceRemoteTalentRec_Controller extends PageBaseController
{
  protected $view = 'services/remote-talent-rec/remote-talent-rec-view.twig';
  public static string $template_file = 'template-remote-talent-rec-service.php';
  public static string $template_name = 'SubPage - Remote Talent Rec Service';

  protected $general_functions;

  public function __construct()
  {
    parent::__construct();
    $this->general_functions = new generalFunctions();
    $this->setSlider();
    $this->setTable();
  }

  function setTable()
  {

    $table = array(
      'headers' => [
        'Position',
        'Average U.S. Monthly Salary',
        'Average LatAm Monthly Salary',
        'Estimated Savings'
      ],
      'values' => [
        ['Graphic Designer',             "$4500",  "$900",  "80%"],
        ['Digital Marketing Specialist', "$6250", "$1250",  "80%"],
        ['SEO Specialist',               "$4500",  "$900",  "80%"],
        ['Sales Representative',         "$5550",  "$900",  "84%"],
        ['Executive Assistant',          "$5210",  "$950",  "82%"],
        ['Software Engineer',           "$11660", "$3000",  "74%"],
        ['Project Manager (PMP)',        "$6950", "$1350",  "81%"],
        ['Product Manager',             "$10870", "$2174",  "80%"],
        ['Full-Stack Developer',         "$9820", "$1950",  "80%"],
        ['Data Analyst',                 "$5950", "$1190",  "80%"],
      ]

    );

    $this->add_to_context([
      'table' => $table,
    ]);
  }

  function setSlider()
  {
    $slides = array(

      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/15 1.png'),
          'alt' => 'Aligned Time Zones service',
        ],
        'info' => [

          'title' => "Aligned time zones",
          'desc' => "LATAM countries share time zones with the U.S., ensuring <br class='textBreak'>
          smooth real-time collaboration and communication <br class='textBreak'>
          throughout the workday."
        ],
        'button' => [
          'text' => 'Book Your Free Consultation',
          'url' => '#',
        ]
      ],
      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/14 1.png'),
          'alt' => 'Cost Effective Talent service',
        ],
        'button' => [
          'text' => 'Book Your Free Consultation',
          'url' => '#',
        ],
        'info' => [
          'title' => "Cost-Effective talent",
          'desc' => "Save up to 80% compared to hiring <br class='textBreak'>locally in the U.S.
          while maintaining high <br class='textBreak'>
          standards of performance and quality."
        ],
      ],
      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/12 1.png'),
          'alt' => 'high english proficiency service',
        ],
        'button' => [
          'text' => 'Book Your Free Consultation',
          'url' => '#',
        ],
        'info' => [
          'title' => "High english proficiency",
          'desc' => "All candidates are rigorously vetted for English proficiency, <br class='textBreak'>
          ensuring they are ready to contribute to your <br class='textBreak'>
          business from day one."
        ],
      ],
      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/13 1.png'),
          'alt' => 'Your full service',
        ],
        'button' => [
          'text' => 'Book Your Free Consultation',
          'url' => '#',
        ],
        'info' => [
          'title' => "Top-Tier talent",
          'desc' => "Access the best professionals from a curated pool <br class='textBreak'>
          of pre-vetted candidates, including experts in <br class='textBreak'>
          tech, marketing, sales, and more."
        ],
      ],

    );

    $this->add_to_context([
      'slider' => $slides,
    ]);
  }

  protected function initialize()
  {
    $this->add_to_context([
      'title' => 'Sobre nosotros',
    ]);
  }
}
