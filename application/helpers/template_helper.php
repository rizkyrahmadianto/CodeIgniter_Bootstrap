<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

function renderAuthTemplate($page = null, $data = array())
{
  $ci = &get_instance();

  $ci->load->view('back-templates/header_auth', $data);
  $ci->load->view($page, $data);
  $ci->load->view('back-templates/footer_auth', $data);
}

function renderTemplate($page = null, $data = array())
{
  $ci = &get_instance();

  $ci->load->view('back-templates/header', $data);
  $ci->load->view('back-templates/navbar', $data);
  $ci->load->view('back-templates/topbar', $data);
  $ci->load->view($page, $data);
  $ci->load->view('back-templates/footer', $data);
}
