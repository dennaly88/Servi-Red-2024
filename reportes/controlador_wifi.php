<?php
include_once "./vendor/autoload.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
ob_start();
include "./wifi.php";
$html = ob_get_clean();
$dompdf->loadHtml($html);
$dompdf->set_paper('a4','landscape');
$dompdf->render();
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=documento.pdf");
echo $dompdf->output();
