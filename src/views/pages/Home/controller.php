<?php

use App\Classes\PageBaseController;
use App\Classes\generalFunctions;

class HomeController extends PageBaseController
{
  protected $view = 'src/views/pages/home/view.twig';

  protected $general_functions;

  public function __construct()
  {
    parent::__construct();
    $this->general_functions = new generalFunctions();
    $this->setTalents();
  }

  function setTalents()
  {
    $talents = array(
      [
        "title" => "Ariel Montoya",
        "subTitle" => "Social Media Manager",
        "desc" => "Skilled in growing brand presence, boosting engagement, and driving results across all major platforms",
        "img" => $this->general_functions->get_file('/images/talent_person.png'),
        "subTag" => '$700 / month'
      ],
      [
        "title" => "Sophia Alvarez",
        "subTitle" => "project manager",
        "desc" => "Specializing in remote team leadership, deadline-driven execution, delivering high-impact results on time and budget",
        "img" => $this->general_functions->get_file('/images/talent_person.png'),
        "subTag" => '$900 / month'
      ],
      [
        "title" => "Elias Aguirre",
        "subTitle" => "sales specialist",
        "desc" => "Results-driven Sales Specialist skilled in lead generation, client relations, and closing deals",
        "img" => $this->general_functions->get_file('/images/talent_person.png'),
        "subTag" => '$1200 / month'
      ],
      [
        "title" => "Patricia Lopez",
        "subTitle" => "accounting",
        "desc" => "Detail-oriented Accounting Specialist with expertise in bookkeeping, financial reporting, and compliance",
        "img" => $this->general_functions->get_file('/images/talent_person.png'),
        "subTag" => '$900 / month'
      ],
      [
        "title" => "Andrés Valverde",
        "subTitle" => "developer",
        "desc" => "Focused on clean code, scalable solutions, and efficient web & app developmen",
        "img" => $this->general_functions->get_file('/images/talent_person.png'),
        "subTag" => '$900 / month'
      ],
      [
        "title" => "Alicia Cuellar",
        "subTitle" => "graphic designer",
        "desc" => "Creative Graphic Designer specializing in branding, digital design, and visually engaging content",
        "img" => $this->general_functions->get_file('/images/talent_person.png'),
        "subTag" => '$900 / month'
      ]
    );

    $this->add_to_context([
      'talents' => $talents,
    ]);
  }

  protected function initialize()
  {
    $this->add_to_context([
      'title' => 'Sobre nosotros',
    ]);
  }
}
