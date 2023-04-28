<?php
require_once "connect.php";
require_once "fpdf.php";

$sql = "SELECT * FROM users ORDER BY id";
$result = $conn->query($sql);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
while ($row = $result->fetch_object()) {
    $id = $row->id;
    $first_name = $row->fname;
    $last_name = $row->lname;
    $email = $row->email;
    $password = $row->password;
    $gender = $row->gender;

    $pdf->Cell(40, 15, $id, 1);
    $pdf->Cell(40, 15, $first_name, 1);
    $pdf->Cell(40, 15, $last_name, 1);
    $pdf->Cell(40, 15, $email, 1);
    $pdf->Cell(40, 15, $password, 1);
    $pdf->Cell(40, 15, $gender, 1);
    $pdf->Ln();
}
$pdf->Output();
?>
