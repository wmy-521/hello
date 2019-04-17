<?php
function feibo($n)
{
    if($n<=0){
        return 0;
    }
    elseif($n==1)
    {
        return 1;
    }
    else
    {
        return feibo($n-1)+feibo($n-2);
     }
}
echo feibo(10);


for($a=1;$a<=9;$a++) {
    for ($b= 0; $b<= 9; $b++) {
        for ($c = 0; $c <= 9; $c++) {
            if ($a * $a * $a + $b * $b * $b + $c * $c * $c ==
                100 * $a + 10 * $b + $c) {
                echo "$a $b $c" . "<p>";
            }
        }
    }
}
?>