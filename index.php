<?php
$dir = scandir(__DIR__."/budgets");
$contentArray = array();
$total = 0;

foreach ($dir as $file) {
    if (pathinfo(__DIR__."/budgets/" . $file, PATHINFO_EXTENSION) === "csv") {
        $openFile = fopen(__DIR__."/budgets/" . $file, "r");

        while (($line = fgets($openFile)) !== false ) {
            if(str_contains($line, "Date, Description, Amount") === false){
                $formatContent = explode(",", $line);
                $amount = explode("$", $formatContent[2]);
                $total += $amount[1];
                array_push($contentArray, $formatContent);
                
               
               
            }
           
        }
       

    }
}




?>
