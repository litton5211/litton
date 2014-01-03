
<?php
$var = 0;

// 结果为 true，因为 $var 为空
if (empty($var)) {  
    echo '$var is either 0 or not set at all';
}

// 结果为 false，因为 $var 已设置
if (!isset($var)) { 
    echo '$var is not set at all';
}
?>
