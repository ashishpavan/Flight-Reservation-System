<?php
  if(isset($_POST['Submit']))
  {
      unset($_POST['Submit']);
      $_POST['password']=password_hash($_POST['password'],PASSWORD_DEFAULT);
      unset($_POST['password']);
      dd(selectOne("user_list",$_POST));
      die();
  }

?>