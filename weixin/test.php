<?php
echo "fffffffff"; 

$fp = fsockopen("localhost", 80, $errno, $errstr, 30);

if (!$fp) {

    echo "$errstr ($errno)<br />\n";

} else {

    $out = "GET /backend.php / HTTP/1.1\r\n";

    $out .= "Host: www.example.com\r\n";

    $out .= "Connection: Close\r\n\r\n";

 

    fwrite($fp, $out);

    /*ºöÂÔÖ´ÐÐ½á¹û

while (!feof($fp)) {

echo fgets($fp, 128);

}*/

    fclose($fp);

}

?>