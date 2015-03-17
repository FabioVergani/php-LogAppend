function LogAppend($p,$c){//$path,$content
 $f=fopen($p,'a+');// 'a+' = open:writeonly, point:eof, file:createifnot.
 $bw=0;// = bytes written
 if($f){$bw=fwrite($f,$c.PHP_EOL);fclose($f);};
 return $bw;
};
