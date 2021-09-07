<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
// include('config.php');

$conn=mysqli_connect("localhost","admin","Admin@123","moviedb");
//include('htm2fpdf/sample.html')
require('fpdf183/fpdf.php');

session_start();
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



SELECT add_movie.movie_name,user_registration.name,add_theatre.theatre_name,city.c_name,screens.screen_name,show_time.start_time,screens.charge FROM `bookings`,add_movie,user_registration,add_theatre,screens,city,show_time where add_movie.movie_name='Bell Bottom' and add_theatre.theatre_name='PVR(Ahmd)' and screens.screen_name='Screen-1' and city.c_name='Ahmedabad' and show_time.start_time='10:00:00';




        
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





       $sql=" SELECT add_movie.movie_name,user_registration.name,add_theatre.theatre_name,city.c_name,screens.screen_name,show_time.start_time,screens.charge FROM `bookings`,add_movie,user_registration,add_theatre,screens,city,show_time where add_movie.movie_name='Bell Bottom' and add_theatre.theatre_name='PVR(Ahmd)' and screens.screen_name='Screen-1' and city.c_name='Ahmedabad' and show_time.start_time='10:00:00'";


// $sql="select * from city inner join add_theatre on city.c_id=add_theatre.city  inner join add_movie  on add_theatre.theatre_id=add_movie.t_id inner join screens on add_theatre.theatre_id=screens.t_id inner join show_time on screens.screen_id=show_time.screen_id";









// $sql= "SELECT * FROM  bookings inner join add_movie on bookings.movie_id=add_movie.m_id ";


        // $sql = "select * from bookings inner join add_theatre on bookings.t_id=add_theatre.theatre_id inner join
        //  add_movie on bookings.movie_id=add_movie.m_id
        //   inner join screens on 
        //   add_theatre.theatre_id=screens.t_id
        //   inner join user_registration on bookings.user_id=user_registration.u_id
        //     inner join city on add_theatre.city=city.c_id";

// select * from bookings inner join add_theatre on bookings.t_id=add_theatre.theatre_id inner join
//  add_movie on bookings.movie_id=add_movie.m_id
//    inner join screens on 
//    add_theatre.theatre_id=screens.t_id
//    inner join user_registration on bookings.user_id=user_registration.u_id
//      inner join city on add_theatre.city=city.c_id;


        // lect2($table1, $table2, $condition1, $table3, $condition2, $table4, $condition3, $table4, $condition4, $table5, $condition5 )











        // $sql=$obj->select2('bookings','add_theatre','bookings.t_id=add_theatre.theatre_id','add_movie','bookings.movie_id=add_movie.m_id','screens','add_theatre.theatre_id=screens.t_id','user_registration','bookings.user_id=user_registration.u_id','city','add_theatre.city=city.c_id"');

        // $sql=$obj->select('bookings');      

// SELECT add_movie.movie_name,user_registration.name,add_theatre.theatre_name,city.c_name,screens.screen_name,show_time.start_time,screens.charge FROM `bookings`,add_movie,user_registration,add_theatre,screens,city,show_time where add_movie.movie_name='Bell Bottom' and add_theatre.theatre_name='PVR(Ahmd)' and screens.screen_name='Screen-1' and city.c_name='Ahmedabad' and show_time.start_time='10:00:00';






        // $query = $conn->prepare($sql);
        // $query->execute();

    $sql = mysqli_query($conn , $sql);
        // while ($res= $query->fetch()) { 




        foreach($sql as $res) {
          
            $movie = $res['movie_name'];
            $name = $res['name'];
            $theatre = $res['theatre_name'];

            $city = $res['c_name'];
            $screen = $res['screen_name'];
            $seat = $res['no_seats'];
            $date = $res['date'];
            $time = $res['start_time'];
            $amount = $res['charge'];



    
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