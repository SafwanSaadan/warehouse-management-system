<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>

<div class="login-page">
    <div class="text-center">
       <h1>مرحبا</h1>
       <p>سجل الدخول الى نظام ادارة المخازن</p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth_v2.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">اسم المستخدم</label>
              <input type="name" class="form-control" name="username" placeholder="اكتب اسم المستخدم">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">كلمة المرور</label>
            <input type="password" name= "password" class="form-control" placeholder="اكتب كلمة المرور">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-info  pull-right">نسجيل</button>
        </div>
    </form>
</div>
<?php include_once('layouts/header.php'); ?>
