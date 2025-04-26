<?php

use App\Classes\PageBaseController;
use App\Classes\generalFunctions;

class HomeController extends PageBaseController
{
  protected $view = 'home/home-view.twig';
  public static string $template_file = 'template-home.php';
  public static string $template_name = 'Page - Home';

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
          'icon' => "<img alt='icon slider' class='w-auto h-14' src='". $this->general_functions->get_file('/images/icons/icon_hands.png') ."'>",
          'title' => "Access the Best Talent<br> from Latin America",
          'desc' => "Astoptalent connects U.S. businesses with the top <br class='textBreak'>
          1% of remote talent from Latin America. Our rigorous <br class='textBreak'>
          selection process ensures that only the most skilled <br class='textBreak'>
          and qualified professionals are placed within your team, <br class='textBreak'>
          empowering you to scale quickly with the best talent."
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
          'title' => "Save Up to 80%<br> on Hiring Costs",
          'desc' => "By hiring remote talent from Latin America, U.S. <br class='textBreak'>
          companies can save up to 80% in hiring and <br class='textBreak'>
          operational costs. We provide you with high-caliber <br class='textBreak'>
          professionals at a fraction of the cost, without <br class='textBreak'>
          sacrificing quality or performance."
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
          'title' => "End-to-End Talent<br> Management",
          'desc' => "Astoptalent manages the entire talent lifecycle for <br class='textBreak'>
          your business. From recruiting top-tier candidates to <br class='textBreak'>
          seamless onboarding, payroll management, and ongoing <br class='textBreak'>
          support, we ensure that your remote teams are <br class='textBreak'>
          always performing at their best."
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
          'title' => "Seamless Team Collaboration<br> with Our Virtual Office",
          'desc' => 'Our platform allows your remote team to interact <br class="textBreak">
          and collaborate as if they were working in the same office. <br class="textBreak">
          With avatar-based interaction and real-time communication, <br class="textBreak">
          we create a fully immersive virtual workspace that enhances <br class="textBreak">
          productivity and engagement.'
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
          'title' => "We Handle Compliance<br> and Payroll",
          'desc' => 'Forget about the complexities of global payroll <br class="textBreak">
          and compliance. Astoptalent ensures that all legal and <br class="textBreak">
          tax requirements are met, so you can focus on growing <br class="textBreak">
          your business without worrying about <br class="textBreak">
          administrative burdens.'
        ],
        'button' => [
          'text' => 'Learn more',
          'link' => '/#'
        ]
      ],
      // [
      //   'image' => [
      //     'src' => $this->general_functions->get_file('/images/slider_5.png'),
      //     'alt' => 'Your full service',
      //   ],
      //   'info' => [
      //     'icon' => "<img alt='icon slider' class='w-auto h-14' src='". $this->general_functions->get_file('/images/icons/icon_protect.png') ."'>",
      //     'title' => "No Compliance<br> Worries",
      //     'desc' => "We manage all legal and compliance requirements,<br> strictly adhering to local employment regulations<br> across all operating countries"
      //   ],
      //   'button' => [
      //     'text' => 'Learn more',
      //     'link' => '/#'
      //   ]
      // ],
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
