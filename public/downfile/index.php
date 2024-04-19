<?php

$html = $_REQUEST['html'];
$pdf = $_REQUEST['pdf'];
shell_exec("wkhtmltopdf $html $pdf");