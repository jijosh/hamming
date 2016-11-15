// implode fuction example
<?php
$imp=array('a','e','i','o','u');
implode("*",$imp);
echo $imp;

output

a*e*i*o*u


2)<html>
<body bgcolor="pink">
<h3>Implode Function</h3>
<?php
$arr = array ('I','am','simple','boy!');
$space_separated = implode(" ", $arr);
$comma_separated = implode(" , ", $arr);
$slash_separated = implode(" / ", $arr);
$dot_separated = implode(" . ", $arr);
$hyphen_separated = implode(" - ", $arr);
echo $space_separated.'<br>';
echo $comma_separated.'<br>';
echo $slash_separated.'<br>';
echo $dot_separated.'<br>';
echo $hyphen_separated;
?>
</body>
</html>