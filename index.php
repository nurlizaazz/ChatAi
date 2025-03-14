<?php 
 
$page = isset($_GET['page']) ? $_GET['page'] : 'home';



function loadPage($page){
  if ($page === 'home'){
    include '_file/home.php';
  }else if ($page === 'login'){
    include '_file/login.php';
  }else if($page === 'registerasi'){
    include '_file/registerasi.php';
  }else{
    include '_file/404/not_found.php';
  }
}

loadPage($page);
?>