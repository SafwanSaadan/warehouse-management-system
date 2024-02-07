
<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="login-page">
    <div class="text-center">
       <h1>لوحة تسجيل الدخول </h1>
       <h4>نظام ادارة المخازن</h4>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">اسم المستخدم</label>
              <input type="name" class="form-control" name="username" placeholder="اسم المستخدم">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">كلمة المرور</label>
            <input type="password" name= "password" class="form-control" placeholder="كلمة المرور">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-danger" style="border-radius:0%">تسجيل دخول</button>
        </div>
    </form>

</div>

<?php include_once('layouts/footer.php'); ?>
