<?php

use App\Classes\PageBaseController;

class AppointmentController extends PageBaseController
{
  protected $view = 'appointment/appointment-view.twig';
  public static string $template_file = 'template-appointment.php';
  public static string $template_name = 'Page - Appointment';

  protected function initialize()
  {


  }


}
