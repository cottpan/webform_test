<?php

class Controller_Form extends Controller
{

  private $fields = array('name', 'email', 'msg');

  public function action_index()
  {
    if(Input::post('submit'))
    {
      foreach ($this->fields as $field)
      {
          Session::set_flash($field, Input::post($field));
      }
    }

    $val = Validation::forge();

    $val->add('name', '名前')->add_rule('required');
    $val->add('email', 'メール')->add_rule('required')->add_rule('valid_email');
    $val->add('msg', '内容')->add_rule('required');

    if($val->run() and Security::check_token())
    {
      Response::redirect('form/conf.php');
    }

    $data = array();

    $data['val'] = $val;
    return View::forge('form/form.php',$data);
  }

  public function action_conf()
  {
    $data = array();

    foreach ($this->fields as $field)
    {
      $data[$field] = Session::get_flash($field);
      Session::keep_flash($field);
    }
    $view = View::forge('form/conf.php', $data);

    return $view;
  }
}
