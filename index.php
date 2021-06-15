<?php
header("Content-Type: text/html; charset=gb2312"); 
if(!file_exists("mytest.pdf"))
{
    require_once 'pdf.php';
    $pdf = new office2pdf();
    $input_url1 = dirname(__FILE__).'/mytest.ppt';
    $output_url1 = dirname(__FILE__).'/mytest.pdf';
    $pdf->run($input_url1,$output_url1);
}

?>

<html>
<body>
<iframe src="mytest.pdf" width=1000 height=900>
This browser does not support PDFs. Please download the PDF to view it: <a href="mytest.pdf">Download PDF</a>
</iframe>
</body>
</html>

