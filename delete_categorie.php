<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  $categorie = find_by_id('categories',(int)$_GET['id']);
  if(!$categorie){
    $session->msg("d","Missing Categorie id.");
    redirect('categorie.php');
  }
?>
<?php
  $delete_id = delete_by_id('categories',(int)$categorie['id']);
  if($delete_id){
      $session->msg("s","تم حذف التصنيف بنجاح");
      redirect('categorie.php');
  } else {
      $session->msg("d","فشل حذف التصنيف.");
      redirect('categorie.php');
  }
?>
