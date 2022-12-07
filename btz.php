<?php

$filename = "https://bc-v2.pressmatrix.com/pt-BR/profiles/c9e49eb97a66/editions/13e7845d8934afa67619/pages/toc";

$content = file_get_contents($filename);

 preg_match_all('@https://s3-eu-west-1.amazonaws.com/editor.production.pressmatrix.com/emags/\d+/covers/editor/[\w-]+\.jpg\?\d+@', $content, $match);
 
foreach ($match[0] as $value) {
   echo $value . "\n";
}
