<?php
    include_once '../../MODEL/desenvolvedora.php';
    include_once '../../BLL/bllDesenvolvedora.php';

   $desenvolvedora = new \MODEL\Desenvolvedora(); 
   
   $desenvolvedora->setId($_POST['idInput']);
   $desenvolvedora->setNome($_POST['nomeInput']);
   $desenvolvedora->setOrigem($_POST['origemInput']);
   $desenvolvedora->setIndie($_POST['indieCheckBox']); 

   $bll = new \BLL\bllDesenvolvedora(); 
   $bll->Update($desenvolvedora); 
   
   header("location: lstdesenvolvedora.php");
  
?>