//Hamming distance calculation fuction 

<?php
function HammingDistance($val1,$val2)
{
$a=str_split($val1);
$b=str_split($val2);
$hd=0;
for($i=0;$i<count($a);$i++)
if($a[$i]!=$b[$i])
$hd++;
return hd++;
}
 echo HammingDistance('10101020','10101010');
