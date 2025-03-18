<?php 
session_start();
include 'koneksi.php';
$page = isset($_GET['page']) ? $_GET['page'] : 'home';



function loadPage($page){
  if ($page === 'home'){
    include '_file/home.php';
  }else if ($page === 'login'){
    include '_file/login.php';
  }else if($page === 'registerasi'){
    include '_file/registerasi.php';
  }else if($page === 'admin_dashboard' && isset($_SESSION['role_id']) && $_SESSION['role_id'] == 2){
    include '_file/admin_dashboard.php';
  }else{
    include '_file/404/not_found.php';
  }
}

loadPage($page);
?>