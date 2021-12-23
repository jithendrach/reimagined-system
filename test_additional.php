<!doctype html>
<html>
  <head>
      <title> test_addition</title>
  </head>
  <body>  
    	<form action="" method="get" >
	      <input type="text" name="word" value=" " >
		  <input type="submit" name="submit" value="increment">
       </form>
	  
      <?php
         $data = $_GET ("word");
         $words = explode(',', $data);
         $str = "";
         for($i=0;$i<sizeof($words)-1;$i++){
            $ch = substr($words[$i],-1);
            $num = ((int)$ch) + 1;
            $str = $str.substr($words[$i],0,(strlen($words[$i]) - 1)).$num.",";
           }
         $str = $str.$words[$i];
         print($str);
      ?>

   </body>
</html>   