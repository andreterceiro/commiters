<?php
if (! isset($_FILES['git-log']['tmp_name']) || ! is_uploaded_file($_FILES['git-log']['tmp_name'])) {
    header("location: index.php?error=The file was not submitted. Please send a file with a log of the Git");
    exit;

} 

$arrayLines = file($_FILES['git-log']['tmp_name']);
$output = [];

$stringToConsider = isset($_POST['string-to-grep']) ? $_POST['string-to-grep']  : "@";

foreach ($arrayLines as $line) {
    if (strpos($line, $stringToConsider) > -1) {
        $content = substr($line, 8, -1);
        if (array_key_exists($content, $output)) {
            $output[$content]++;
        } else {
            $output[$content] = 1;
        }
    }
}

arsort($output);

$viewVars['output'] = $output;

file_put_contents(
    'commiters.txt',
    serialize($output)
); 

require "views/result.php";
