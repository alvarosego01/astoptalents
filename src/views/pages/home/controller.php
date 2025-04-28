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
        "title" => "Camila P.",
        "subTitle" => "Executive Assistant",
        "desc" => "Lives in Colombia
        Hired by tech<br  class='hidden md:block'> start-up",
        "img" => $this->general_functions->get_file('/images/camila-p.jpg'),
        "subTag" => '$900 / month'
      ],
      [
        "title" => "Carla L.",
        "subTitle" => "Project Manager",
        "desc" => "Lives in Peru
Hired by Fortune 500 company",
        "img" => $this->general_functions->get_file('/images/carla-l.jpg'),
        "subTag" => '$1,500 / month'
      ],
      [
        "title" => "María R.",
        "subTitle" => "Bookkeeper",
        "desc" => " Lives in Venezuela
Hired hired by construction company",
        "img" => $this->general_functions->get_file('/images/maria-r.jpg'),
        "subTag" => '$925 / month'
      ],
      [
        "title" => "Javier O.",
        "subTitle" => "Senior Accountant (CPA)",
        "desc" => "Lives in Mexico
Hired by national<br  class='hidden md:block'> CPA firm ",
        "img" => $this->general_functions->get_file('/images/javier-o.jpg'),
        "subTag" => '$1,600 / month'
      ],
      [
        "title" => "Andres C.",
        "subTitle" => "Bilingual Customer Service Rep",
        "desc" => 'Lives in Argentina
Hired by<br  class="hidden md:block"> e-commerce',
        "img" => $this->general_functions->get_file('/images/andres-c.jpg'),
        "subTag" => '$900 / month'
      ],
      [
        "title" => "Alejandro G.",
        "subTitle" => "Investment Banking Analyst",
        "desc" => "Lives in Brazil
Hired by private <br  class='hidden md:block'>equity firm",
        "img" => $this->general_functions->get_file('/images/alejandro-g.jpg'),
        "subTag" => '$1,700 / month'
      ],
      [
        "title" => "Valeria M. ",
        "subTitle" => "Operations Assistant ",
        "desc" => "Lives in Chile
Hired by Fortune 500 company ",
        "img" => $this->general_functions->get_file('/images/valeria-m.jpg'),
        "subTag" => '$800 / month '
      ],
      [
        "title" => " Victoria H.",
        "subTitle" => "Paralegal ",
        "desc" => "Lives in Mexico
Hired by NYC <br  class='hidden md:block'>law firm ",
        "img" => $this->general_functions->get_file('/images/victoria-h.avif'),
        "subTag" => '$900 / month '
      ],
      [
        "title" => "Miguel L. ",
        "subTitle" => "Software Engineer ",
        "desc" => "Lives in Colombia
Hired by international tech company ",
        "img" => $this->general_functions->get_file('/images/miguel-l.jpg'),
        "subTag" => '$3,000 / month '
      ],
      [
        "title" => "Sofia M. ",
        "subTitle" => " Graphic Designer",
        "desc" => "Lives in Venezuela
Hired by<br  class='hidden md:block'> marketing firm ",
        "img" => $this->general_functions->get_file('/images/sofia-m.jpg'),
        "subTag" => '$900 / month '
      ],
      [
        "title" => "Veronica S. ",
        "subTitle" => "Community and Social Media Manager ",
        "desc" => "Lives in Chile
Hired by manufacturing company ",
        "img" => $this->general_functions->get_file('/images/veronica-s.jpg'),
        "subTag" => '$925 / month '
      ],
      [
        "title" => "Diego R. ",
        "subTitle" => "Sales Representative ",
        "desc" => "Lives in Argentina
Hired by service company ",
        "img" => $this->general_functions->get_file('/images/diego-r.jpg'),
        "subTag" => '$800 / month'
      ]
    );

    $this->add_to_context([
      'talents' => $talents,
    ]);
  }

  function setChooseSlider()
  {
    $slides = array(
      [
        'image' => [
          'src' => $this->general_functions->get_file('/images/slider_0.png'),
          'alt' => 'Your full service',
        ],
        'info' => [
          'icon' => "<img alt='icon slider' class='w-auto h-14' src='" . $this->general_functions->get_file('/images/icons/icon_hands.png') . "'>",
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
          'icon' => "<img alt='icon slider' class='w-auto h-14' src='" . $this->general_functions->get_file('/images/icons/icon_laptop_person.png') . "'>",
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
          'icon' => "<img alt='icon slider' class='w-auto h-14' src='" . $this->general_functions->get_file('/images/icons/icon_check_2.png') . "'>",
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
          'icon' => "<img alt='icon slider' class='w-auto h-14' src='" . $this->general_functions->get_file('/images/icons/icon_check.png') . "'>",
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
          'icon' => "<img alt='icon slider' class='w-auto h-14' src='" . $this->general_functions->get_file('/images/icons/icon_search_people.png') . "'>",
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
