<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

error_reporting(E_ALL);

//  Include PHPExcel_IOFactory
include './PHPExcel/Classes/PHPExcel/IOFactory.php';

$inputFileName = './test.xls';

$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($inputFileName);
$objReader->setReadDataOnly(true);
$objWorksheet = $objPHPExcel->getActiveSheet();
$highestRow = $objWorksheet->getHighestRow(); // e.g. 10
$highestColumn = $objWorksheet->getHighestColumn(); // e.g 'F'
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn)-1; // e.g. 5

$data = array();	
$i=0;		
/*for ($row = 2; $row <= $highestRow; ++$row) {
	for ($col = 0; $col <= $highestColumnIndex; ++$col) {
		$val = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($col, $row)->getValue();
		switch($col){
			case "0":
				$bool = PHPExcel_Shared_Date::isDateTime($objWorksheet->getCellByColumnAndRow($col, $row))? 'yes' : 'no';
				if($bool == 'yes'): 
					$dateString = PHPExcel_Shared_Date::ExcelToPHP($val);
					$data[$i]['date'] = date("Y-m-d",$dateString);
				else:
					$data[$i]['date'] = $val;
				endif;
			break;
			case "1":
				$data[$i]['os'] = $val;
			break;
			case "2":
				$data[$i]['price'] = $val;
			break;
		}		
	}
	$i++;
}*/
for ($row = 2; $row <= $highestRow; ++$row) {
	for ($col = 0; $col <= $highestColumnIndex; ++$col) {
		$val = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($col, $row)->getValue();
		if($col == 0) $data[$i][$col] = date("Y-m-d",PHPExcel_Shared_Date::ExcelToPHP($val));
		else $data[$i][$col] = $val;
	}
	$i++;
}
print("<pre>");
print_r($data);
exit;
/*foreach ($objWorksheet->getRowIterator() as $row) {
	$j = 1;
	$data->sheets[0]
	$i++;
	
}*/ // end row getter
print("<pre>");print_r($data);exit;	
?>
</body>
</html>


