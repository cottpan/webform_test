<?php

/**
 *
 */
class Controller_Sample extends Controller
{
  public function action_index(){
    $data = array();
    $data['rows'] = Model_User::find_all();
    return View::forge('sample/list', $data);
  }

  public function action_save(){
    $validation = Varidation::forge();
    $validation->add('name', 'お名前')->add_rule('required');
    $validation->add('email', 'メール')->add_rule('required');
    $validation->add('age', '年齢')
      ->add_rule('required')
      ->add_rule('valid_string', array('numeric'));

    if(Input::post()) {
      if($validation->run()) {
        $form = array();
        $form['name'] = Input::post('name');
        $form['email'] = Input::post('email');

        $user = Model_User::forge();
        $user->set($form);
        $user->save();

        echo Request::forge("sample/index")->execute();
        exit;
      } else {
        $view = View::forge('sample/form');
        $view->set('errors', $validation->error());
      }
    }
    return $view;
  }

}
