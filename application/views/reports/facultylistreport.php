<?php
    require_once("dompdf/autoload.inc.php");
    use Dompdf\Dompdf;
    ob_start();
    require_once("facultyreport.php");
    $dompdf = new Dompdf();
    $dompdf->load_html(ob_get_clean());
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream("facultylist.pdf", array("Attachment" => false));
?>