
<?php
$begin = microtime(true);

$file_path = '../backup_file1.tar.gz';
$result = explode("  ", exec("md5sum $file_path"));
echo "Hash = ".$result[0]."<br />";

# Here 7 other big files (20-300 MB)

$end = microtime(true) - $begin;
echo "Time = $end";
# Time = 4.4475841522217

#Method with openssl
# Time = 12.1463856900543
?>