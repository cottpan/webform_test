<?php

/**
 *
 */
class Controller_Test extends Controller
{

  public function action_index()
  {
    $layout = View::forge('common/layout');

    $layout->set_global("sitename","yakitori");
    $layout->head = View::forge('common/head',array("pagetitle"=>"サバンナのメニュー"));
    $layout->header = View::forge('common/header');
    $layout->footer = View::forge('common/footer');

    return $layout;
  }
}
