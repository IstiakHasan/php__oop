<?php

trait Java{
    
    public function javaCoder(){
        
        return "I love java<br>";
    }
}
trait php{
                                             //trait use kore akta cls oneak gulu class a bebohar kra jai 
    public function phpCoder(){
        
        return "I love php<br>";
    }
}


trait javaphp{
    use Java,php;   // trait er moddhe trait rakha jai 
    
}

class CoderOne{
    //use Java,php;
    use javaphp;
}
/*class CoderTwo{
    use Java;
}*/
$c1=new CoderOne;
echo $c1->javaCoder();
echo $c1->phpCoder();
//$c2=new CoderTwo;
//echo $c2->javaCoder();


?>