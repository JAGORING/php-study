//파일복사
<?php
$file = 'readme.txt';
$newfile = 'example.txt.bak';
 
if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
?>