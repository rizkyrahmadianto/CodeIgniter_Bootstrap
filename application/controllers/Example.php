<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Example extends CI_Controller
{

  public function index()
  {
    $data['title'] = "Example";

    renderTemplate('examples/index', $data);
  }

  public function blank()
  {
    $data['title'] = "Blank Page";

    renderTemplate('examples/blank', $data);
  }

  public function login()
  {
    $data['title'] = "Log In";

    renderAuthTemplate('auths/login', $data);
  }

  public function register()
  {
    $data['title'] = "Register";

    renderAuthTemplate('auths/register', $data);
  }

  public function forgotPassword()
  {
    $data['title'] = "Forgot Password";

    renderAuthTemplate('auths/forgot-password', $data);
  }
}
  
  /* End of file Example.php */
