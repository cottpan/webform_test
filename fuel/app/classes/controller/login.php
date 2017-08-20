<?php
 /**
  *
  */
 class Controller_Login extends Controller
 {

   public function action_index()
   {
     $user = 'user';
     $data['name'] = $user;

     return View::forge('login/login_view', $data);
   }
 }
 ?>
