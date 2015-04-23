<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2013 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2013 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.7.9, 2013-06-02
 */

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once './PHPExcel/Classes/PHPExcel.php';

$host = "localhost";
$db = "pnf";
$db_username = "root";
$db_password = "";

mysql_connect($host, $db_username, $db_password) or die("Error connecting to the host");
mysql_select_db($db) or die("Error selecting the database");

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Prakash K. S.")
							 ->setLastModifiedBy("Prakash K. S.")
							 ->setTitle("PNF Multiple Landing Pages")
							 ->setSubject("PNF Multiple Landing Pages")
							 ->setDescription("PNF Multiple Landing Pages")
							 ->setKeywords("PNF Multiple Landing Pages")
							 ->setCategory("PNF Multiple Landing Pages");


$query = "select * from landing_pages where template_type='landing-orange' and published=1 and deleted=0";
$queryresult = mysql_query($query) or die("Error executing the query");

$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A1', 'Alliance Code')
				->setCellValue('B1', 'Title')
				->setCellValue('C1', 'URL')
				->setCellValue('D1', 'Locations');
$i=2;
while($row = mysql_fetch_array($queryresult)){
	$query1 = "select code from landing_page_airports A, airports B where A.airport_id = B.id and landing_page_id='".$row['id']."'";
	$queryresult1 = mysql_query($query1) or die("Error executing the query");
	$locations = "";
	
	while($row1 = mysql_fetch_array($queryresult1)){
		if($locations == "") $locations = $row1['code']; else $locations .= ", ".$row1['code'];
	}
	// Add some data
	$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A'.$i, "'$row[alliance_code]'")
				->setCellValue('B'.$i, $row['title'])
				->setCellValue('C'.$i, 'http://www.pnf.com/book/'.$row['alliance_code'])
				->setCellValue('D'.$i, $locations);
	$i++;
}

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Multiple Landing Pages');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="multiple-landing-page.xlsx"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>