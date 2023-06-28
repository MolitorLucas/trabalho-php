<?php
    include_once '../../BLL/bllDesenvolvedora.php';

    $id = $_GET['id'];

   $bll = new \BLL\bllDesenvolvedora(); 
   $bll->delete($id); 
   
   header("location: lstDesenvolvedora.php");
  
?>