 <?php

 $url = file_get_contents('https://bc.pressmatrix.com/pt-BR/profiles/94e5d3c5d9f8/editions/999b4fc0a85be8aae420/pages/toc');
 
 if(preg_match_all('#(https:\/\/[\w-]+\.[\w-]+\.[\w-]+\/[\w-]+\.[\w-]+\.[\w-]+\.[\w-]+\/\w+\/[\w-]+\/[\w-]+\/[\w-]+\/\d+\/\d+\/\d+\/\w+\/\w+\/\w+\.jpg\?\d+)#', $url, $img)){
 
  foreach($img as $imgs){
    $imgs = preg_replace('#grid#is', 'device', $imgs); 
    // print_r($imgs); 
    for($p = 1; $p <=48; $p++){
    exec("wget $imgs[$p]");
    }
    }
 }
 
