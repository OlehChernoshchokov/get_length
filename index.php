<?php
$infile = fopen("input.txt", "r") or die("Unable to open file!");
$outfile = fopen("output.txt", "w") or die("Unable to open file!");
$i = 0;
$res = 0;
$str = array();

while (false !== ($char = fgetc($infile))) {
    $str[] = $char;
}
fclose($infile);
for ($count = 0; $count < sizeof($str); $count++) {

    if ($str[$count] == 1) {
        $i++;
    } else if ($str[$count] == 0) {
        if ($i > $res) {
            $res = $i;
        }
        $i = 0;
    }

}
fwrite($outfile, $res);
fclose($outfile);