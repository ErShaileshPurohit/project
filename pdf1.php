<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('config.php');
//include('htm2fpdf/sample.html')
require('fpdf183/fpdf.php');    
// session_start();
        
        //$email=$_SESSION['login'];
        
        $pdf = new FPDF();


        $pdf-> AddPage();
        

        $pdf->SetFillColor(230,230,230);

        $pdf->Image('ticket.jpg',0,-10,250,350);


        $pdf->SetTextColor(255,255,255);

        $pdf->SetFont("Arial","",15,"white");
        //$pdf->Cell(0,20,"",10,1,'C');
        $pdf->Cell(0,5,"TICKET",0,20,'C');
        $pdf->Cell(0,10,"",10,1,'C');

        
        // $pdf->Cell(10,10,"MOVIE:",0,20);
        // $pdf->Cell(10,10,"NAME:",0,20);

        // $pdf->Cell(10,10,"THEATRE:",0,20);

        // $pdf->Cell(10,10,"CITY:",0,20);

        // $pdf->Cell(10,10,"SCREEN:",0,20);
        // $pdf->Cell(10,10,"SEAT:",0,20);
        // $pdf->Cell(10,10,"DATE:",0,20);

        // $pdf->Cell(10,10,"TIME:",0,20);
        // $pdf->Cell(10,10,"AMOUNT:",0,20);

        
        //$query = "select * from add_booking ";
        $sql= "SELECT * FROM add_booking INNER JOIN add_theatre ON add_booking.theatre_id = add_theatre.theatre_id";


        $query = $conn->prepare($sql);
        $query->execute();

    //$sql = mysqli_query($conn , $query);
        while ($res= $query->fetch()) { 


           
                
          
            $movie = $res['movie_name'];
            $name = $res['username'];
            $theatre = $res['theatre_name'];

            $city = $res['city'];
             $screen = $res['screen_no']; 
             $seat = $res ['seat_no']; 
             $date = $res['date'];
              $time = $res['time']; 
              $amount = $res['price'];



    
    //$pdf->Cell(20,10,$id,1,0,'C');

            $pdf->Cell(30,10,"MOVIE:",0,0);
            $pdf->Cell(0,10,$movie,0,1);  

            $pdf->Cell(30,10,"NAME:",0,0);
            $pdf->Cell(0,10,$name,0,1);  

            $pdf->Cell(30,10,"THEATRE:",0,0);
            $pdf->Cell(0,10,$theatre,0,1);  

            $pdf->Cell(30,10,"CITY:",0,0);
            $pdf->Cell(0,10,$city,0,1);  

            $pdf->Cell(30,10,"SCREEN:",0,0);
            $pdf->Cell(0,10,$screen,0,1);  

            $pdf->Cell(30,10,"SEAT:",0,0);
            $pdf->Cell(0,10,$seat,0,1); 

            $pdf->Cell(30,10,"DATE:",0,0);
            $pdf->Cell(0,10,$date,0,1);  

            $pdf->Cell(30,10,"TIME:",0,0);
            $pdf->Cell(0,10,$time,0,1);  

            $pdf->Cell(30,10,"AMOUNT:",0,0);
            $pdf->Cell(0,10,$amount,0,1);   

            // $pdf->Cell(10,10,$movie,0,20);
            // $pdf->Cell(10,10,$name,0,20);
            // $pdf->Cell(10,10,$theatre,0,20);
            // $pdf->Cell(10,10,$city,0,20);
            // $pdf->Cell(10,10,$screen,0,20);

            // $pdf->Cell(10,10,$seat,0,20);

            // $pdf->Cell(10,10,$date,0,20);
            // $pdf->Cell(10,10,$time,0,20);
            // $pdf->Cell(10,10,$amount,0,20);



 
    $pdf->Ln(); 
}


        $file=time().'.pdf';    
        $pdf->output();

        
// require('fpdf183/fpdf.php');

// //$name = text to be added, $x= x cordinate, $y = y coordinate, $a = alignment , $f= Font Name, $t = Bold / Italic, $s = Font Size, $r = Red, $g = Green Font color, $b = Blue Font Color
// function AddText($pdf, $text, $x, $y, $a, $f, $t, $s, $r, $g, $b) {
// $pdf->SetFont($f,$t,$s);        
// $pdf->SetXY($x,$y);
// $pdf->SetTextColor($r,$g,$b);
// $pdf->Cell(0,10,$text,0,0,$a);  
// }

// //Create A 4 Landscape page
// $pdf = new FPDF('L','mm','A4');
// $pdf->AddPage();
// $pdf->SetFont('Arial','B',16);
// $pdf->SetCreator('Haneef Puttur');
// // Add background image for PDF

// $pdf->Image('ticket.jpg',0,-10,300,250);
  

// //Add a Name to the certificate

// AddText($pdf,ucwords('TICKET'), 0,80, 'C', 'Helvetica','B',30,3,84,156);


// $pdf->Output();
?>