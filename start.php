<?php

require_once 'parse_input.php'; // 引入第一个文件
require_once 'execute_mutation.php'; // 引入第二个文件

// 调用第一个文件中的函数，解析数据
$dataArray = parseInputData();

// 使用解析得到的数据调用第二个文件中的函数，执行每一个mutation
foreach ($dataArray as $data) {
    executeMutation(["input" => $data]);
}

?>
