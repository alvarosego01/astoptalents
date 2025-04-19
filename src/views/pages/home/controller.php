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
    $this->setChooseSlider();
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
        "desc" => 'Focused on clean code, scalable solutions, and efficient web & app development,',
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

  function setChooseSlider(){
    $slides = array(
      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/slider_0.png'),
          'alt' => 'Your full service',
        ],
        'info' => [
          'icon' => "<img alt='icon slider' class='w-auto h-14' src='". $this->general_functions->get_file('/images/icons/icon_together.png') ."'>",
          'title' => "Your Full-Service<br> Talent Partner",
          'desc' => "We manage all aspects of hiring—including<br> recruiting, vetting, compliance, and global payroll<br>—allowing you to focus on business growth"
        ],
        'button' => [
          'text' => 'Learn more',
          'link' => '/#'
        ]
      ],
      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/slider_1.png'),
          'alt' => 'Your full service',
        ],
        'info' => [
          'icon' => "<img alt='icon slider' class='w-auto h-14' src='". $this->general_functions->get_file('/images/icons/icon_laptop_person.png') ."'>",
          'title' => "Immersive Virtual<br> Office Technology",
          'desc' => "Boost remote work with virtual office spaces<br> designed for collaboration, productivity, and stronger<br> team connections"
        ],
        'button' => [
          'text' => 'Learn more',
          'link' => '/#'
        ]
      ],
      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/slider_2.png'),
          'alt' => 'Your full service',
        ],
        'info' => [
          'icon' => "<img alt='icon slider' class='w-auto h-14' src='". $this->general_functions->get_file('/images/icons/icon_check_2.png') ."'>",
          'title' => "Your Satisfaction,<br> Guaranteed",
          'desc' => "Your success is our priority. If your hire doesn’t align<br> perfectly with your expectations, we’ll promptly<br> provide a replacement to ensure you’re fully satisfied."
        ],
        'button' => [
          'text' => 'Learn more',
          'link' => '/#'
        ]
      ],
      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/slider_3.png'),
          'alt' => 'Your full service',
        ],
        'info' => [
          'icon' => "<img alt='icon slider' class='w-auto h-14' src='". $this->general_functions->get_file('/images/icons/icon_check.png') ."'>",
          'title' => "Clear and<br> Transparent Pricing",
          'desc' => "Transparent pricing with no hidden costs ensures<br> risk-free hiring; you pay only when you find the<br>  ideal candidate."
        ],
        'button' => [
          'text' => 'Learn more',
          'link' => '/#'
        ]
      ],
      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/slider_4.png'),
          'alt' => 'Your full service',
        ],
        'info' => [
          'icon' => "<img alt='icon slider' class='w-auto h-14' src='". $this->general_functions->get_file('/images/icons/icon_search_people.png') ."'>",
          'title' => "Access Trusted<br> Top Talent",
          'desc' => "Access top LATAM professionals remotely &<br> cut hiring costs without compromising quality.."
        ],
        'button' => [
          'text' => 'Learn more',
          'link' => '/#'
        ]
      ],
      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/slider_5.png'),
          'alt' => 'Your full service',
        ],
        'info' => [
          'icon' => "<img alt='icon slider' class='w-auto h-14' src='". $this->general_functions->get_file('/images/icons/icon_protect.png') ."'>",
          'title' => "No Compliance<br> Worries",
          'desc' => "We manage all legal and compliance requirements,<br> strictly adhering to local employment regulations<br> across all operating countries"
        ],
        'button' => [
          'text' => 'Learn more',
          'link' => '/#'
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
      'title' => 'Sobre nosotros',
    ]);
  }
}
