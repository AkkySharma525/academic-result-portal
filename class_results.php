<?php
require 'vendor/autoload.php';
include 'db.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header
$sheet->setCellValue('A1', 'StudentID');
$sheet->setCellValue('B1', 'Name');
$sheet->setCellValue('C1', 'Semester');
$sheet->setCellValue('D1', 'Total');
$sheet->setCellValue('E1', 'Percentage');

$sql = "SELECT * FROM Results";
$result = mysqli_query($conn, $sql);

$rowNum = 2;

while($row = mysqli_fetch_assoc($result)){
    $sheet->setCellValue('A'.$rowNum, $row['StudentID']);
    $sheet->setCellValue('B'.$rowNum, $row['Name']);
    $sheet->setCellValue('C'.$rowNum, $row['Semester']);
    $sheet->setCellValue('D'.$rowNum, $row['TotalMarks']);
    $sheet->setCellValue('E'.$rowNum, $row['Percentage']);
    $rowNum++;
}

$writer = new Xlsx($spreadsheet);
$fileName = "class_results.xlsx";

header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=".$fileName);

$writer->save("php://output");
exit;
?>