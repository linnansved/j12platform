<?php

/* -------------------------------*/
/*-                               */
/*-                               */
/*-         -- Credits  --        */
/*-                               */
/*   Developed By Oliver Weitman  */
/*-                               */
/*-                               */
/* -------------------------------*/

class clean{

    private $var;

    public function __construct($var){
        
        $db_host = "localhost"; //host
        $db_name = "j12test"; //databasnamn
        $db_user = "root"; //username
        $db_pass = "root"; //password
        
        $con = mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("kunde inte ansluta till databasen");
        
        mysqli_set_charset($con,"utf8"); 
        $var = trim($this->cleanInput(mysqli_real_escape_string($con,$var)));
        $var = htmlspecialchars($var);
        $this->var = $var;
    }

    protected function cleanInput($input) {

    $search = array(
      '@<script[^>]*?>.*?</script>@si',
      '@<[\/\!]*?[^<>]*?>@si',
      '@<style[^>]*?>.*?</style>@siU',
      '@<![\s\S]*?--[ \t\n\r]*>@'
    );


    $output = preg_replace($search, '', $input);

    return $output;
  }

    public function __toString(){
        return $this->var;
    }

}

?>
