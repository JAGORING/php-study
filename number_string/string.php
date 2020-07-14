<?php
echo "그는 \"안녕하세요\"라고 말했다. ";
?>


/*
'(단따옴표), "(쌍따옴표) 을 사용해서 표기
<?php
echo 'hello world';
echo "hello world";
?>

'(단따옴표)나 "(쌍따옴표)를 표기할 때는 '\(백슬래쉬)'를 사용
<?php
echo 'hello \'world\'';
echo "hello \"world\"";
?>

줄바꿈 할 때는 쌍따옴표 안에서 \n, \r을 사용
<?php
echo "hello world\n";
echo 'hello world\n';
?>

문자열 안에서 변수를 사용하려면 쌍따옴표 안에서 {, }(중괄호)를 사용
<?php
$a = array('hello', 'world');
echo "aa는 {$a[0]} {$a[1]}입니다";
echo 'bb는 '.$a[0].' '.$a[1].'입니다';
?>

문자와 문자를 더 할 때는 '.'(마침표)를 사용
<?php
$a = "aa";
$b = "bb";
echo $a.$b;
?>
*/