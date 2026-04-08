<?php
require 'vendor/autoload.php';
include 'db.php';

use Smalot\PdfParser\Parser;

if(isset($_FILES['pdf'])){

    $file = $_FILES['pdf']['tmp_name'];
    $filename = $_FILES['pdf']['name'];

    // Move file to uploads folder
    move_uploaded_file($file, "uploads/" . $filename);

    $parser = new Parser();
    $pdf = $parser->parseFile("uploads/" . $filename);

    $text = $pdf->getText();

    $lines = explode("\n", $text);

    foreach($lines as $line){

        $line = trim($line);
        $data = preg_split('/\s+/', $line);

        if(count($data) >= 4){

            $id = $data[0];
            $name = $data[1];
            $sub1 = (int)$data[2];
            $sub2 = (int)$data[3];

            $total = $sub1 + $sub2;
            $percentage = $total / 2;

            if($percentage >= 75) $class = "A";
            else if($percentage >= 60) $class = "B";
            else $class = "C";

            $sql = "INSERT INTO Results 
            (StudentID, Name, Semester, Subject1, Subject2, TotalMarks, Percentage, Class)
            VALUES ('$id', '$name', 1, '$sub1', '$sub2', '$total', '$percentage', '$class')";

            mysqli_query($conn, $sql);
        }
    }

    echo "PDF uploaded & data inserted successfully!";
}
?>