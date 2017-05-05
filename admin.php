<?

echo "admin\n";


if(fopen("variaveis.php", "r+")){
	echo "tem acesso";
} else {
	echo "nao tem acesso";
}

$str = '$Author =\'Yuri \'\n';
$handle = fopen('variaveis.php', 'a') ;
fwrite($handle, $str) ;
fclose($handle) ;


?>