<?php

require './dbcon.php';

?>

<?php
		    $db_sinfo = mysqli_query($link, "SELECT * FROM `semester_21` ");
			while($row = mysqli_fetch_assoc($db_sinfo)){ 
?>
			
            <?php echo $row['roll']; ?> <br>

            <?php 


            // theory ece 2103 starts

            $ct1_2103 = $row['ece_2103_ct1'];  
            $ct2_2103 = $row['ece_2103_ct2'];
            $ct3_2103 = $row['ece_2103_ct3'];
            $ct4_2103 = $row['ece_2103_ct4'];
            $att2103 = $row['ece_2103_att'];
            $exam2103 = $row['ece_2103_exam'];


            if($ct1_2103==0){
                $avg_1 = ($ct2_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if($ct2_2103==0){
                $avg_1 = ($ct1_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if($ct3_2103==0){
                $avg_1 = ($ct2_2103+$ct1_2103+$ct4_2103)/3;
            }
            else if($ct4_2103==0){
                $avg_1 = ($ct2_2103+$ct3_2103+$ct1_2103)/3;
            }
            else if($ct1_2103==0 && $ct2_2103==0){
                $avg_1 = ($ct3_2103+$ct4_2103)/3;
            }
            else if($ct1_2103==0 && $ct3_2103==0){
                $avg_1 = ($ct2_2103+$ct4_2103)/3;
            }
            else if($ct1_2103==0 && $ct4_2103==0){
                $avg_1 = ($ct2_2103+$ct3_2103)/3;
            }
            else if($ct2_2103==0 && $ct3_2103==0){
                $avg_1 = ($ct1_2103+$ct4_2103)/3;
            }
            else if($ct2_2103==0 && $ct4_2103==0){
                $avg_1 = ($ct1_2103+$ct3_2103)/3;
            }
            else if($ct3_2103==0 && $ct4_2103==0){
                $avg_1 = ($ct1_2103+$ct2_2103)/3;
            }
            else if($ct1_2103==0 && $ct2_2103==0 && $ct3_2103==0){
                $avg_1 = $ct4_2103/3;
            }
            else if($ct1_2103==0 && $ct2_2103==0 && $ct4_2103==0){
                $avg_1 = $ct3_2103/3;
            }
            else if($ct1_2103==0 && $ct3_2103==0 && $ct4_2103==0){
                $avg_1 = $ct2_2103/3;
            }
            else if($ct2_2103==0 && $ct3_2103==0 && $ct4_2103==0){
                $avg_1 = $ct1_2103/3;
            }
            else if($ct1_2103==0 && $ct2_2103==0 && $ct3_2103==0 && $ct4_2103==0){
                $avg_1 = 0;
            }
            else if(($ct1_2103 > $ct3_2103) && ($ct1_2103 > $ct4_2103) && ($ct2_2103 > $ct3_2103) && ($ct2_2103 > $ct4_2103) && ($ct3_2103 == $ct4_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct3_2103)/3;
            }
            else if(($ct1_2103 > $ct2_2103) && ($ct1_2103 > $ct4_2103) && ($ct3_2103 > $ct2_2103) && ($ct3_2103 > $ct4_2103) && ($ct2_2103 == $ct4_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct3_2103)/3;
            }
            else if(($ct1_2103 > $ct2_2103) && ($ct1_2103 > $ct3_2103) && ($ct4_2103 > $ct2_2103) && ($ct4_2103 > $ct3_2103) && ($ct2_2103 == $ct3_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct4_2103)/3;
            }
            else if(($ct2_2103 > $ct1_2103) && ($ct2_2103 > $ct4_2103) && ($ct3_2103 > $ct1_2103) && ($ct3_2103 > $ct4_2103) && ($ct1_2103 == $ct4_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct3_2103)/3;
            }
            else if(($ct2_2103 > $ct1_2103) && ($ct2_2103 > $ct3_2103) && ($ct4_2103 > $ct1_2103) && ($ct4_2103 > $ct3_2103) && ($ct1_2103 == $ct3_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct4_2103)/3;
            }
            else if(($ct3_2103 > $ct1_2103) && ($ct3_2103 > $ct2_2103) && ($ct4_2103 > $ct1_2103) && ($ct4_2103 > $ct2_2103) && ($ct1_2103 == $ct2_2103)){
                $avg_1 = ($ct1_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if(($ct1_2103 > $ct4_2103) && ($ct2_2103 > $ct4_2103) && ($ct3_2103 > $ct4_2103 )){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct3_2103)/3;
            }
            else if(($ct1_2103 > $ct3_2103) && ($ct2_2103 > $ct3_2103) && ($ct4_2103 > $ct3_2103 )){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct4_2103)/3;
            }
            else if(($ct1_2103 > $ct2_2103) && ($ct3_2103 > $ct2_2103) && ($ct4_2103 > $ct2_2103 )){
                $avg_1 = ($ct1_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if(($ct2_2103 > $ct1_2103) && ($ct3_2103 > $ct1_2103) && ($ct4_2103 > $ct1_2103 )){
                $avg_1 = ($ct2_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if($ct1_2103==$ct2_2103 && $ct2_2103==$ct3_2103 && $ct3_2103==$ct4_2103){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct3_2103)/3;
            }
            else if(($ct1_2103 > $ct2_2103) && ($ct2_2103 > $ct3_2103) && ($ct3_2103 > $ct4_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct3_2103)/3;
            }
            else if(($ct2_2103 > $ct3_2103) && ($ct3_2103 > $ct4_2103) && ($ct4_2103 > $ct1_2103)){
                $avg_1 = ($ct2_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if(($ct3_2103 > $ct4_2103) && ($ct4_2103 > $ct1_2103) && ($ct1_2103 > $ct2_2103)){
                $avg_1 = ($ct1_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if(($ct4_2103 > $ct1_2103) && ($ct1_2103 > $ct2_2103) && ($ct2_2103 > $ct3_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct4_2103)/3;
            }
            else if(($ct1_2103 > $ct2_2103) && ($ct1_2103 > $ct3_2103) && ($ct1_2103 > $ct4_2103) && ($ct2_2103==$ct3_2103) && ($ct3_2103==$ct4_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct3_2103)/3;
            }
            else if(($ct2_2103 > $ct3_2103) && ($ct2_2103 > $ct4_2103) && ($ct2_2103 > $ct1_2103) && ($ct3_2103==$ct4_2103) && ($ct4_2103==$ct1_2103)){
                $avg_1 = ($ct2_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if(($ct3_2103 > $ct1_2103) && ($ct3_2103 > $ct2_2103) && ($ct3_2103 > $ct4_2103) && ($ct1_2103==$ct2_2103) && ($ct2_2103==$ct4_2103)){
                $avg_1 = ($ct3_2103+$ct2_2103+$ct4_2103)/3;
            }
            else if(($ct4_2103 > $ct1_2103) && ($ct4_2103 > $ct2_2103) && ($ct4_2103 > $ct3_2103) && ($ct1_2103==$ct2_2103) && ($ct2_2103==$ct3_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct4_2103)/3;
            }
           


            $res2103 = $avg_1+$att2103+$exam2103;

            echo '<br>';

            echo $res2103;

            echo '<br>';

            if($res2103>=0 && $res2103<=39){
                $gp2103 = 0.00;
            }
            else if($res2103>39 && $res2103<=44){
                $gp2103 = 2.00;
            }
            else if($res2103>44 && $res2103<=49){
                $gp2103 = 2.25;
            }
            else if($res2103>49 && $res2103<=54){
                $gp2103 = 2.50;
            }
            else if($res2103>54 && $res2103<=59){
                $gp2103 = 2.75;
            }
            else if($res2103>59 && $res2103<=64){
                $gp2103 = 3.00;
            }
            else if($res2103>64 && $res2103<=69){
                $gp2103 = 3.25;
            }
            else if($res2103>69 && $res2103<=74){
                $gp2103 = 3.50;
            }
            else if($res2103>74 && $res2103<=79){
                $gp2103 = 3.75;
            }
            else if($res2103>79){
                $gp2103 = 4.00;
            }

            echo '<br>';

            echo $gp2103;


            //theory ece 2103 ends


             echo '<br>';


            // theory ece 2107 starts

            $ct1_2107 = $row['ece_2107_ct1'];
            $ct2_2107 = $row['ece_2107_ct2'];
            $ct3_2107 = $row['ece_2107_ct3'];
            $ct4_2107 = $row['ece_2107_ct4'];
            $att2107 = $row['ece_2107_att'];
            $exam2107 = $row['ece_2107_exam'];


            if($ct1_2107==0){
                $avg_2 = ($ct2_2107+$ct3_2107+$ct4_2107)/3;
            }
            else if($ct2_2107==0){
                $avg_2 = ($ct1_2107+$ct3_2107+$ct4_2107)/3;
            }
            else if($ct3_2107==0){
                $avg_2 = ($ct2_2107+$ct1_2107+$ct4_2107)/3;
            }
            else if($ct4_2107==0){
                $avg_2 = ($ct2_2107+$ct3_2107+$ct1_2107)/3;
            }
            else if($ct1_2107==0 && $ct2_2107==0){
                $avg_2 = ($ct3_2107+$ct4_2107)/3;
            }
            else if($ct1_2107==0 && $ct3_2107==0){
                $avg_2 = ($ct2_2107+$ct4_2107)/3;
            }
            else if($ct1_2107==0 && $ct4_2107==0){
                $avg_2 = ($ct2_2107+$ct3_2107)/3;
            }
            else if($ct2_2107==0 && $ct3_2107==0){
                $avg_2 = ($ct1_2107+$ct4_2107)/3;
            }
            else if($ct2_2107==0 && $ct4_2107==0){
                $avg_2 = ($ct1_2107+$ct3_2107)/3;
            }
            else if($ct3_2107==0 && $ct4_2107==0){
                $avg_2 = ($ct1_2107+$ct2_2107)/3;
            }
            else if($ct1_2107==0 && $ct2_2107==0 && $ct3_2107==0){
                $avg_2 = $ct4_2107/3;
            }
            else if($ct1_2107==0 && $ct2_2107==0 && $ct4_2107==0){
                $avg_2 = $ct3_2107/3;
            }
            else if($ct1_2107==0 && $ct3_2107==0 && $ct4_2107==0){
                $avg_2 = $ct2_2107/3;
            }
            else if($ct2_2107==0 && $ct3_2107==0 && $ct4_2107==0){
                $avg_2 = $ct1_2107/3;
            }
            else if($ct1_2107==0 && $ct2_2107==0 && $ct3_2107==0 && $ct4_2107==0){
                $avg_2 = 0;
            }
            else if(($ct1_2107 > $ct3_2107) && ($ct1_2107 > $ct4_2107) && ($ct2_2107 > $ct3_2107) && ($ct2_2107 > $ct4_2107) && ($ct3_2107 == $ct4_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct1_2107 > $ct2_2107) && ($ct1_2107 > $ct4_2107) && ($ct3_2107 > $ct2_2107) && ($ct3_2107 > $ct4_2107) && ($ct2_2107 == $ct4_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct1_2107 > $ct2_2107) && ($ct1_2107 > $ct3_2107) && ($ct4_2107 > $ct2_2107) && ($ct4_2107 > $ct3_2107) && ($ct2_2107 == $ct3_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct4_2107)/3;
            }
            else if(($ct2_2107 > $ct1_2107) && ($ct2_2107 > $ct4_2107) && ($ct3_2107 > $ct1_2107) && ($ct3_2107 > $ct4_2107) && ($ct1_2107 == $ct4_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct2_2107 > $ct1_2107) && ($ct2_2107 > $ct3_2107) && ($ct4_2107 > $ct1_2107) && ($ct4_2107 > $ct3_2107) && ($ct1_2107 == $ct3_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct4_2107)/3;
            }
            else if(($ct3_2107 > $ct1_2107) && ($ct3_2107 > $ct2_2107) && ($ct4_2107 > $ct1_2107) && ($ct4_2107 > $ct2_2107) && ($ct1_2107 == $ct2_2107)){
                $avg_2 = ($ct1_2107+$ct3_2107+$ct4_2107)/3;
            }
            else if(($ct1_2107 > $ct4_2107) && ($ct2_2107 > $ct4_2107) && ($ct3_2107 > $ct4_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct1_2107 > $ct3_2107) && ($ct2_2107 > $ct3_2107) && ($ct4_2107 > $ct3_2107 )){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct4_2107)/3;
            }
            else if(($ct1_2107 > $ct2_2107) && ($ct3_2107 > $ct2_2107) && ($ct4_2107 > $ct2_2107) ){
                $avg_2 = ($ct1_2107+$ct3_2107+$ct4_2107)/3;
            }
            else if(($ct2_2107 > $ct1_2107) && ($ct3_2107 > $ct1_2107) && ($ct4_2107 > $ct1_2107)){
                $avg_2 = ($ct2_2107+$ct3_2107+$ct4_2107)/3;
            }
            else if($ct1_2107==$ct2_2107 && $ct2_2107==$ct3_2107 && $ct3_2107==$ct4_2107){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct1_2107 > $ct2_2107) && ($ct2_2107 > $ct3_2107) && ($ct3_2107 > $ct4_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct2_2107 > $ct3_2107) && ($ct3_2107 > $ct4_2107) && ($ct4_2107 > $ct1_2107)){
                $avg_2 = ($ct2_2107+$ct3_2107+$ct4_2107)/3;
            }
            else if(($ct3_2107 > $ct4_2107) && ($ct4_2107 > $ct1_2107) && ($ct1_2107 > $ct2_2107)){
                $avg_2 = ($ct1_2107+$ct3_2107+$ct4_2107)/3;
            }
            else if(($ct4_2107 > $ct1_2107) && ($ct1_2107 > $ct2_2107) && ($ct2_2107 > $ct3_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct4_2107)/3;
            }
            else if(($ct1_2107 > $ct2_2107) && ($ct1_2107 > $ct3_2107) && ($ct1_2107 > $ct4_2107) && ($ct2_2107==$ct3_2107) && ($ct3_2107==$ct4_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct2_2107 > $ct3_2107) && ($ct2_2107 > $ct4_2107) && ($ct2_2107 > $ct1_2107) && ($ct3_2107==$ct4_2107) && ($ct4_2107==$ct1_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct3_2107 > $ct1_2107) && ($ct3_2107 > $ct2_2107) && ($ct3_2107 > $ct4_2107) && ($ct1_2107==$ct2_2107) && ($ct2_2107==$ct4_2107)){
                $avg_2 = ($ct3_2107+$ct2_2107+$ct4_2107)/3;
            }
            else if(($ct4_2107 > $ct1_2107) && ($ct4_2107 > $ct2_2107) && ($ct4_2107 > $ct3_2107) && ($ct1_2107==$ct2_2107) && ($ct2_2107==$ct3_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct4_2107)/3;
            }
           


            $res2107 = $avg_2+$att2107+$exam2107;

            echo '<br>';

            echo $res2107;

            echo '<br>';

            if($res2107>=0 && $res2107<=39){
                $gp2107 = 0.00;
            }
            else if($res2107>39 && $res2107<=44){
                $gp2107 = 2.00;
            }
            else if($res2107>44 && $res2107<=49){
                $gp2107 = 2.25;
            }
            else if($res2107>49 && $res2107<=54){
                $gp2107 = 2.50;
            }
            else if($res2107>54 && $res2107<=59){
                $gp2107 = 2.75;
            }
            else if($res2107>59 && $res2107<=64){
                $gp2107 = 3.00;
            }
            else if($res2107>64 && $res2107<=69){
                $gp2107 = 3.25;
            }
            else if($res2107>69 && $res2107<=74){
                $gp2107 = 3.50;
            }
            else if($res2107>74 && $res2107<=79){
                $gp2107 = 3.75;
            }
            else if($res2107>79){
                $gp2107 = 4.00;
            }

            echo '<br>';

            echo $gp2107;


            //theory ece 2107 ends




            echo "<br>";



            // theory ece 2111 starts


            $ct1_2111 = $row['ece_2111_ct1'];
            $ct2_2111 = $row['ece_2111_ct2'];
            $ct3_2111 = $row['ece_2111_ct3'];
            $ct4_2111 = $row['ece_2111_ct4'];
            $att2111 = $row['ece_2111_att'];
            $exam2111 = $row['ece_2111_exam'];





            if($ct1_2111==0){
                $avg_3 = ($ct2_2111+$ct3_2111+$ct4_2111)/3;
            }
            else if($ct2_2111==0){
                $avg_3 = ($ct1_2111+$ct3_2111+$ct4_2111)/3;
            }
            else if($ct3_2111==0){
                $avg_3 = ($ct2_2111+$ct1_2111+$ct4_2111)/3;
            }
            else if($ct4_2111==0){
                $avg_3 = ($ct2_2111+$ct3_2111+$ct1_2111)/3;
            }
            else if($ct1_2111==0 && $ct2_2111==0){
                $avg_3 = ($ct3_2111+$ct4_2111)/3;
            }
            else if($ct1_2111==0 && $ct3_2111==0){
                $avg_3 = ($ct2_2111+$ct4_2111)/3;
            }
            else if($ct1_2111==0 && $ct4_2111==0){
                $avg_3 = ($ct2_2111+$ct3_2111)/3;
            }
            else if($ct2_2111==0 && $ct3_2111==0){
                $avg_3 = ($ct1_2111+$ct4_2111)/3;
            }
            else if($ct2_2111==0 && $ct4_2111==0){
                $avg_3 = ($ct1_2111+$ct3_2111)/3;
            }
            else if($ct3_2111==0 && $ct4_2111==0){
                $avg_3 = ($ct1_2111+$ct2_2111)/3;
            }
            else if($ct1_2111==0 && $ct2_2111==0 && $ct3_2111==0){
                $avg_3 = $ct4_2111/3;
            }
            else if($ct1_2111==0 && $ct2_2111==0 && $ct4_2111==0){
                $avg_3 = $ct3_2111/3;
            }
            else if($ct1_2111==0 && $ct3_2111==0 && $ct4_2111==0){
                $avg_3 = $ct2_2111/3;
            }
            else if($ct2_2111==0 && $ct3_2111==0 && $ct4_2111==0){
                $avg_3 = $ct1_2111/3;
            }
            else if($ct1_2111==0 && $ct2_2111==0 && $ct3_2111==0 && $ct4_2111==0){
                $avg_3 = 0;
            }
            else if(($ct1_2111 > $ct3_2111) && ($ct1_2111 > $ct4_2111) && ($ct2_2111 > $ct3_2111) && ($ct2_2111 > $ct4_2111) && ($ct3_2111 == $ct4_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct1_2111 > $ct2_2111) && ($ct1_2111 > $ct4_2111) && ($ct3_2111 > $ct2_2111) && ($ct3_2111 > $ct4_2111) && ($ct2_2111 == $ct4_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct1_2111 > $ct2_2111) && ($ct1_2111 > $ct3_2111) && ($ct4_2111 > $ct2_2111) && ($ct4_2111 > $ct3_2111) && ($ct2_2111 == $ct3_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct4_2111)/3;
            }
            else if(($ct2_2111 > $ct1_2111) && ($ct2_2111 > $ct4_2111) && ($ct3_2111 > $ct1_2111) && ($ct3_2111 > $ct4_2111) && ($ct1_2111 == $ct4_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct2_2111 > $ct1_2111) && ($ct2_2111 > $ct3_2111) && ($ct4_2111 > $ct1_2111) && ($ct4_2111 > $ct3_2111) && ($ct1_2111 == $ct3_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct4_2111)/3;
            }
            else if(($ct3_2111 > $ct1_2111) && ($ct3_2111 > $ct2_2111) && ($ct4_2111 > $ct1_2111) && ($ct4_2111 > $ct2_2111) && ($ct1_2111 == $ct2_2111)){
                $avg_3 = ($ct1_2111+$ct3_2111+$ct4_2111)/3;
            }
            else if(($ct1_2111 > $ct4_2111) && ($ct2_2111 > $ct4_2111) && ($ct3_2111 > $ct4_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct1_2111 > $ct3_2111) && ($ct2_2111 > $ct3_2111) && ($ct4_2111 > $ct3_2111 )){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct4_2111)/3;
            }
            else if(($ct1_2111 > $ct2_2111) && ($ct3_2111 > $ct2_2111) && ($ct4_2111 > $ct2_2111) ){
                $avg_3 = ($ct1_2111+$ct3_2111+$ct4_2111)/3;
            }
            else if(($ct2_2111 > $ct1_2111) && ($ct3_2111 > $ct1_2111) && ($ct4_2111 > $ct1_2111)){
                $avg_3 = ($ct2_2111+$ct3_2111+$ct4_2111)/3;
            }
            else if($ct1_2111==$ct2_2111 && $ct2_2111==$ct3_2111 && $ct3_2111==$ct4_2111){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct1_2111 > $ct2_2111) && ($ct2_2111 > $ct3_2111) && ($ct3_2111 > $ct4_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct2_2111 > $ct3_2111) && ($ct3_2111 > $ct4_2111) && ($ct4_2111 > $ct1_2111)){
                $avg_3 = ($ct2_2111+$ct3_2111+$ct4_2111)/3;
            }
            else if(($ct3_2111 > $ct4_2111) && ($ct4_2111 > $ct1_2111) && ($ct1_2111 > $ct2_2111)){
                $avg_3 = ($ct1_2111+$ct3_2111+$ct4_2111)/3;
            }
            else if(($ct4_2111 > $ct1_2111) && ($ct1_2111 > $ct2_2111) && ($ct2_2111 > $ct3_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct4_2111)/3;
            }
            else if(($ct1_2111 > $ct2_2111) && ($ct1_2111 > $ct3_2111) && ($ct1_2111 > $ct4_2111) && ($ct2_2111==$ct3_2111) && ($ct3_2111==$ct4_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct2_2111 > $ct3_2111) && ($ct2_2111 > $ct4_2111) && ($ct2_2111 > $ct1_2111) && ($ct3_2111==$ct4_2111) && ($ct4_2111==$ct1_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct3_2111 > $ct1_2111) && ($ct3_2111 > $ct2_2111) && ($ct3_2111 > $ct4_2111) && ($ct1_2111==$ct2_2111) && ($ct2_2111==$ct4_2111)){
                $avg_3 = ($ct3_2111+$ct2_2111+$ct4_2111)/3;
            }
            else if(($ct4_2111 > $ct1_2111) && ($ct4_2111 > $ct2_2111) && ($ct4_2111 > $ct3_2111) && ($ct1_2111==$ct2_2111) && ($ct2_2111==$ct3_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct4_2111)/3;
            }
           


            $res2111 = $avg_3+$att2111+$exam2111;

            echo '<br>';

            echo $res2111;

            echo '<br>';

            if($res2111>=0 && $res2111<=39){
                $gp2111 = 0.00;
            }
            else if($res2111>39 && $res2111<=44){
                $gp2111 = 2.00;
            }
            else if($res2111>44 && $res2111<=49){
                $gp2111 = 2.25;
            }
            else if($res2111>49 && $res2111<=54){
                $gp2111 = 2.50;
            }
            else if($res2111>54 && $res2111<=59){
                $gp2111 = 2.75;
            }
            else if($res2111>59 && $res2111<=64){
                $gp2111 = 3.00;
            }
            else if($res2111>64 && $res2111<=69){
                $gp2111 = 3.25;
            }
            else if($res2111>69 && $res2111<=74){
                $gp2111 = 3.50;
            }
            else if($res2111>74 && $res2111<=79){
                $gp2111 = 3.75;
            }
            else if($res2111>79){
                $gp2111 = 4.00;
            }

            echo '<br>';

            echo $gp2111;


            

            //theory ece 2111 ends



            
            echo '<br>';




            // theory math 2117 starts


            $ct1math_2117 = $row['math_2117_ct1'];
            $ct2math_2117 = $row['math_2117_ct2'];
            $ct3math_2117 = $row['math_2117_ct3'];
            $ct4math_2117 = $row['math_2117_ct4'];
            $att_math_2117 = $row['math_2117_att'];
            $exam_math_2117 = $row['math_2117_exam'];



            if($ct1math_2117==0){
                $avg_4 = ($ct2math_2117+$ct3math_2117+$ct4math_2117)/3;
            }
            else if($ct2math_2117==0){
                $avg_4 = ($ct1math_2117+$ct3math_2117+$ct4math_2117)/3;
            }
            else if($ct3math_2117==0){
                $avg_4 = ($ct2math_2117+$ct1math_2117+$ct4math_2117)/3;
            }
            else if($ct4math_2117==0){
                $avg_4 = ($ct2math_2117+$ct3math_2117+$ct1math_2117)/3;
            }
            else if($ct1math_2117==0 && $ct2math_2117==0){
                $avg_4 = ($ct3math_2117+$ct4math_2117)/3;
            }
            else if($ct1math_2117==0 && $ct3math_2117==0){
                $avg_4 = ($ct2math_2117+$ct4math_2117)/3;
            }
            else if($ct1math_2117==0 && $ct4math_2117==0){
                $avg_4 = ($ct2math_2117+$ct3math_2117)/3;
            }
            else if($ct2math_2117==0 && $ct3math_2117==0){
                $avg_4 = ($ct1math_2117+$ct4math_2117)/3;
            }
            else if($ct2math_2117==0 && $ct4math_2117==0){
                $avg_4 = ($ct1math_2117+$ct3math_2117)/3;
            }
            else if($ct3math_2117==0 && $ct4math_2117==0){
                $avg_4 = ($ct1math_2117+$ct2math_2117)/3;
            }
            else if($ct1math_2117==0 && $ct2math_2117==0 && $ct3math_2117==0){
                $avg_4 = $ct4math_2117/3;
            }
            else if($ct1math_2117==0 && $ct2math_2117==0 && $ct4math_2117==0){
                $avg_4 = $ct3math_2117/3;
            }
            else if($ct1math_2117==0 && $ct3math_2117==0 && $ct4math_2117==0){
                $avg_4 = $ct2math_2117/3;
            }
            else if($ct2math_2117==0 && $ct3math_2117==0 && $ct4math_2117==0){
                $avg_4 = $ct1math_2117/3;
            }
            else if($ct1math_2117==0 && $ct2math_2117==0 && $ct3math_2117==0 && $ct4math_2117==0){
                $avg_4 = 0;
            }
            else if(($ct1math_2117 > $ct3math_2117) && ($ct1math_2117 > $ct4math_2117) && ($ct2math_2117 > $ct3math_2117) && ($ct2math_2117 > $ct4math_2117) && ($ct3math_2117 == $ct4math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct1math_2117 > $ct2math_2117) && ($ct1math_2117 > $ct4math_2117) && ($ct3math_2117 > $ct2math_2117) && ($ct3math_2117 > $ct4math_2117) && ($ct2math_2117 == $ct4math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct1math_2117 > $ct2math_2117) && ($ct1math_2117 > $ct3math_2117) && ($ct4math_2117 > $ct2math_2117) && ($ct4math_2117 > $ct3math_2117) && ($ct2math_2117 == $ct3math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct4math_2117)/3;
            }
            else if(($ct2math_2117 > $ct1math_2117) && ($ct2math_2117 > $ct4math_2117) && ($ct3math_2117 > $ct1math_2117) && ($ct3math_2117 > $ct4math_2117) && ($ct1math_2117 == $ct4math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct2math_2117 > $ct1math_2117) && ($ct2math_2117 > $ct3math_2117) && ($ct4math_2117 > $ct1math_2117) && ($ct4math_2117 > $ct3math_2117) && ($ct1math_2117 == $ct3math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct4math_2117)/3;
            }
            else if(($ct3math_2117 > $ct1math_2117) && ($ct3math_2117 > $ct2math_2117) && ($ct4math_2117 > $ct1math_2117) && ($ct4math_2117 > $ct2math_2117) && ($ct1math_2117 == $ct2math_2117)){
                $avg_4 = ($ct1math_2117+$ct3math_2117+$ct4math_2117)/3;
            }
            else if(($ct1math_2117 > $ct4math_2117) && ($ct2math_2117 > $ct4math_2117) && ($ct3math_2117 > $ct4math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct1math_2117 > $ct3math_2117) && ($ct2math_2117 > $ct3math_2117) && ($ct4math_2117 > $ct3math_2117 )){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct4math_2117)/3;
            }
            else if(($ct1math_2117 > $ct2math_2117) && ($ct3math_2117 > $ct2math_2117) && ($ct4math_2117 > $ct2math_2117) ){
                $avg_4 = ($ct1math_2117+$ct3math_2117+$ct4math_2117)/3;
            }
            else if(($ct2math_2117 > $ct1math_2117) && ($ct3math_2117 > $ct1math_2117) && ($ct4math_2117 > $ct1math_2117)){
                $avg_4 = ($ct2math_2117+$ct3math_2117+$ct4math_2117)/3;
            }
            else if($ct1math_2117==$ct2math_2117 && $ct2math_2117==$ct3math_2117 && $ct3math_2117==$ct4math_2117){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct1math_2117 > $ct2math_2117) && ($ct2math_2117 > $ct3math_2117) && ($ct3math_2117 > $ct4math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct2math_2117 > $ct3math_2117) && ($ct3math_2117 > $ct4math_2117) && ($ct4math_2117 > $ct1math_2117)){
                $avg_4 = ($ct2math_2117+$ct3math_2117+$ct4math_2117)/3;
            }
            else if(($ct3math_2117 > $ct4math_2117) && ($ct4math_2117 > $ct1math_2117) && ($ct1math_2117 > $ct2math_2117)){
                $avg_4 = ($ct1math_2117+$ct3math_2117+$ct4math_2117)/3;
            }
            else if(($ct4math_2117 > $ct1math_2117) && ($ct1math_2117 > $ct2math_2117) && ($ct2math_2117 > $ct3math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct4math_2117)/3;
            }
            else if(($ct1math_2117 > $ct2math_2117) && ($ct1math_2117 > $ct3math_2117) && ($ct1math_2117 > $ct4math_2117) && ($ct2math_2117==$ct3math_2117) && ($ct3math_2117==$ct4math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct2math_2117 > $ct3math_2117) && ($ct2math_2117 > $ct4math_2117) && ($ct2math_2117 > $ct1math_2117) && ($ct3math_2117==$ct4math_2117) && ($ct4math_2117==$ct1math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct3math_2117 > $ct1math_2117) && ($ct3math_2117 > $ct2math_2117) && ($ct3math_2117 > $ct4math_2117) && ($ct1math_2117==$ct2math_2117) && ($ct2math_2117==$ct4math_2117)){
                $avg_4 = ($ct3math_2117+$ct2math_2117+$ct4math_2117)/3;
            }
            else if(($ct4math_2117 > $ct1math_2117) && ($ct4math_2117 > $ct2math_2117) && ($ct4math_2117 > $ct3math_2117) && ($ct1math_2117==$ct2math_2117) && ($ct2math_2117==$ct3math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct4math_2117)/3;
            }
           


            $resmath2117 = $avg_4+$att_math_2117+$exam_math_2117;

            echo '<br>';

            echo $resmath2117;

            echo '<br>';

            if($resmath2117>=0 && $resmath2117<=39){
                $gpmath2117 = 0.00;
            }
            else if($resmath2117>39 && $resmath2117<=44){
                $gpmath2117 = 2.00;
            }
            else if($resmath2117>44 && $resmath2117<=49){
                $gpmath2117 = 2.25;
            }
            else if($resmath2117>49 && $resmath2117<=54){
                $gpmath2117 = 2.50;
            }
            else if($resmath2117>54 && $resmath2117<=59){
                $gpmath2117 = 2.75;
            }
            else if($resmath2117>59 && $resmath2117<=64){
                $gpmath2117 = 3.00;
            }
            else if($resmath2117>64 && $resmath2117<=69){
                $gpmath2117 = 3.25;
            }
            else if($resmath2117>69 && $resmath2117<=74){
                $gpmath2117 = 3.50;
            }
            else if($resmath2117>74 && $resmath2117<=79){
                $gpmath2117 = 3.75;
            }
            else if($resmath2117>79){
                $gpmath2117 = 4.00;
            }

            echo '<br>';

            echo $gpmath2117;

            

            //theory math 2117 ends



            
            echo '<br>';




            // theory chem 2117 starts


            $ct1chem_2117 = $row['chem_2117_ct1'];
            $ct2chem_2117 = $row['chem_2117_ct2'];
            $ct3chem_2117 = $row['chem_2117_ct3'];
            $ct4chem_2117 = $row['chem_2117_ct4'];
            $att_chem_2117 = $row['chem_2117_att'];
            $exam_chem_2117 = $row['chem_2117_exam'];



            if($ct1chem_2117==0){
                $avg_5 = ($ct2chem_2117+$ct3chem_2117+$ct4chem_2117)/3;
            }
            else if($ct2chem_2117==0){
                $avg_5 = ($ct1chem_2117+$ct3chem_2117+$ct4chem_2117)/3;
            }
            else if($ct3chem_2117==0){
                $avg_5 = ($ct2chem_2117+$ct1chem_2117+$ct4chem_2117)/3;
            }
            else if($ct4chem_2117==0){
                $avg_5 = ($ct2chem_2117+$ct3chem_2117+$ct1chem_2117)/3;
            }
            else if($ct1chem_2117==0 && $ct2chem_2117==0){
                $avg_5 = ($ct3chem_2117+$ct4chem_2117)/3;
            }
            else if($ct1chem_2117==0 && $ct3chem_2117==0){
                $avg_5 = ($ct2chem_2117+$ct4chem_2117)/3;
            }
            else if($ct1chem_2117==0 && $ct4chem_2117==0){
                $avg_5 = ($ct2chem_2117+$ct3chem_2117)/3;
            }
            else if($ct2chem_2117==0 && $ct3chem_2117==0){
                $avg_5 = ($ct1chem_2117+$ct4chem_2117)/3;
            }
            else if($ct2chem_2117==0 && $ct4chem_2117==0){
                $avg_5 = ($ct1chem_2117+$ct3chem_2117)/3;
            }
            else if($ct3chem_2117==0 && $ct4chem_2117==0){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117)/3;
            }
            else if($ct1chem_2117==0 && $ct2chem_2117==0 && $ct3chem_2117==0){
                $avg_5 = $ct4chem_2117/3;
            }
            else if($ct1chem_2117==0 && $ct2chem_2117==0 && $ct4chem_2117==0){
                $avg_5 = $ct3chem_2117/3;
            }
            else if($ct1chem_2117==0 && $ct3chem_2117==0 && $ct4chem_2117==0){
                $avg_5 = $ct2chem_2117/3;
            }
            else if($ct2chem_2117==0 && $ct3chem_2117==0 && $ct4chem_2117==0){
                $avg_5 = $ct1chem_2117/3;
            }
            else if($ct1chem_2117==0 && $ct2chem_2117==0 && $ct3chem_2117==0 && $ct4chem_2117==0){
                $avg_5 = 0;
            }
            else if(($ct1chem_2117 > $ct3chem_2117) && ($ct1chem_2117 > $ct4chem_2117) && ($ct2chem_2117 > $ct3chem_2117) && ($ct2chem_2117 > $ct4chem_2117) && ($ct3chem_2117 == $ct4chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct1chem_2117 > $ct2chem_2117) && ($ct1chem_2117 > $ct4chem_2117) && ($ct3chem_2117 > $ct2chem_2117) && ($ct3chem_2117 > $ct4chem_2117) && ($ct2chem_2117 == $ct4chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct1chem_2117 > $ct2chem_2117) && ($ct1chem_2117 > $ct3chem_2117) && ($ct4chem_2117 > $ct2chem_2117) && ($ct4chem_2117 > $ct3chem_2117) && ($ct2chem_2117 == $ct3chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct2chem_2117 > $ct1chem_2117) && ($ct2chem_2117 > $ct4chem_2117) && ($ct3chem_2117 > $ct1chem_2117) && ($ct3chem_2117 > $ct4chem_2117) && ($ct1chem_2117 == $ct4chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct2chem_2117 > $ct1chem_2117) && ($ct2chem_2117 > $ct3chem_2117) && ($ct4chem_2117 > $ct1chem_2117) && ($ct4chem_2117 > $ct3chem_2117) && ($ct1chem_2117 == $ct3chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct3chem_2117 > $ct1chem_2117) && ($ct3chem_2117 > $ct2chem_2117) && ($ct4chem_2117 > $ct1chem_2117) && ($ct4chem_2117 > $ct2chem_2117) && ($ct1chem_2117 == $ct2chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct3chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct1chem_2117 > $ct4chem_2117) && ($ct2chem_2117 > $ct4chem_2117) && ($ct3chem_2117 > $ct4chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct1chem_2117 > $ct3chem_2117) && ($ct2chem_2117 > $ct3chem_2117) && ($ct4chem_2117 > $ct3chem_2117 )){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct1chem_2117 > $ct2chem_2117) && ($ct3chem_2117 > $ct2chem_2117) && ($ct4chem_2117 > $ct2chem_2117) ){
                $avg_5 = ($ct1chem_2117+$ct3chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct2chem_2117 > $ct1chem_2117) && ($ct3chem_2117 > $ct1chem_2117) && ($ct4chem_2117 > $ct1chem_2117)){
                $avg_5 = ($ct2chem_2117+$ct3chem_2117+$ct4chem_2117)/3;
            }
            else if($ct1chem_2117==$ct2chem_2117 && $ct2chem_2117==$ct3chem_2117 && $ct3chem_2117==$ct4chem_2117){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct1chem_2117 > $ct2chem_2117) && ($ct2chem_2117 > $ct3chem_2117) && ($ct3chem_2117 > $ct4chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct2chem_2117 > $ct3chem_2117) && ($ct3chem_2117 > $ct4chem_2117) && ($ct4chem_2117 > $ct1chem_2117)){
                $avg_5 = ($ct2chem_2117+$ct3chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct3chem_2117 > $ct4chem_2117) && ($ct4chem_2117 > $ct1chem_2117) && ($ct1chem_2117 > $ct2chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct3chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct4chem_2117 > $ct1chem_2117) && ($ct1chem_2117 > $ct2chem_2117) && ($ct2chem_2117 > $ct3chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct1chem_2117 > $ct2chem_2117) && ($ct1chem_2117 > $ct3chem_2117) && ($ct1chem_2117 > $ct4chem_2117) && ($ct2chem_2117==$ct3chem_2117) && ($ct3chem_2117==$ct4chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct2chem_2117 > $ct3chem_2117) && ($ct2chem_2117 > $ct4chem_2117) && ($ct2chem_2117 > $ct1chem_2117) && ($ct3chem_2117==$ct4chem_2117) && ($ct4chem_2117==$ct1chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct3chem_2117 > $ct1chem_2117) && ($ct3chem_2117 > $ct2chem_2117) && ($ct3chem_2117 > $ct4chem_2117) && ($ct1chem_2117==$ct2chem_2117) && ($ct2chem_2117==$ct4chem_2117)){
                $avg_5 = ($ct3chem_2117+$ct2chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct4chem_2117 > $ct1chem_2117) && ($ct4chem_2117 > $ct2chem_2117) && ($ct4chem_2117 > $ct3chem_2117) && ($ct1chem_2117==$ct2chem_2117) && ($ct2chem_2117==$ct3chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct4chem_2117)/3;
            }
           


            $reschem2117 = $avg_5+$att_chem_2117+$exam_chem_2117;

            echo '<br>';

            echo $reschem2117;

            echo '<br>';

            if($reschem2117>=0 && $reschem2117<=39){
                $gpchem2117 = 0.00;
            }
            else if($reschem2117>39 && $reschem2117<=44){
                $gpchem2117 = 2.00;
            }
            else if($reschem2117>44 && $reschem2117<=49){
                $gpchem2117 = 2.25;
            }
            else if($reschem2117>49 && $reschem2117<=54){
                $gpchem2117 = 2.50;
            }
            else if($reschem2117>54 && $reschem2117<=59){
                $gpchem2117 = 2.75;
            }
            else if($reschem2117>59 && $reschem2117<=64){
                $gpchem2117 = 3.00;
            }
            else if($reschem2117>64 && $reschem2117<=69){
                $gpchem2117 = 3.25;
            }
            else if($reschem2117>69 && $reschem2117<=74){
                $gpchem2117 = 3.50;
            }
            else if($reschem2117>74 && $reschem2117<=79){
                $gpchem2117 = 3.75;
            }
            else if($reschem2117>79){
                $gpchem2117 = 4.00;
            }

            echo '<br>';

            echo $gpchem2117;

            

            //theory chem 2117 ends




             echo '<br>';
             echo '<br>';
             echo '<br>';
             echo '<br>';
             echo '<br>';



            // sessional ece 2104 starts

            
            $att2104 = $row['ece_2104_att'];
            $report2104 = $row['ece_2104_re'];
            $quiz2104 = $row['ece_2104_quiz'];
            $bv2104 = $row['ece_2104_bv'];

            $res2104 = $att2104+$report2104+$quiz2104+$bv2104;

            echo '<br>';

            echo $res2104;

            echo '<br>';

            if($res2104>=0 && $res2104<=39){
                $gp2104 = 0.00;
            }
            else if($res2104>=40 && $res2104<=44){
                $gp2104 = 2.00;
            }
            else if($res2104>=45 && $res2104<=49){
                $gp2104 = 2.25;
            }
            else if($res2104>=50 && $res2104<=54){
                $gp2104 = 2.50;
            }
            else if($res2104>=55 && $res2104<=59){
                $gp2104 = 2.75;
            }
            else if($res2104>=60 && $res2104<=64){
                $gp2104 = 3.00;
            }
            else if($res2104>=65 && $res2104<=69){
                $gp2104 = 3.25;
            }
            else if($res2104>=70 && $res2104<=74){
                $gp2104 = 3.50;
            }
            else if($res2104>=75 && $res2104<=79){
                $gp2104 = 3.75;
            }
            else if($res2104>=80){
                $gp2104 = 4.00;
            }

            echo '<br>';

            echo $gp2104;


            // sessional ece 2104 ends



            echo '<br>';



            // sessional ece 2108 starts

            
            $att2108 = $row['ece_2108_att'];
            $report2108 = $row['ece_2108_re'];
            $quiz2108 = $row['ece_2108_quiz'];
            $bv2108 = $row['ece_2108_bv'];

            $res2108 = $att2108+$report2108+$quiz2108+$bv2108;

            echo '<br>';

            echo $res2108;

            echo '<br>';

            if($res2108>=0 && $res2108<=39){
                $gp2108 = 0.00;
            }
            else if($res2108>=40 && $res2108<=44){
                $gp2108 = 2.00;
            }
            else if($res2108>=45 && $res2108<=49){
                $gp2108 = 2.25;
            }
            else if($res2108>=50 && $res2108<=54){
                $gp2108 = 2.50;
            }
            else if($res2108>=55 && $res2108<=59){
                $gp2108 = 2.75;
            }
            else if($res2108>=60 && $res2108<=64){
                $gp2108 = 3.00;
            }
            else if($res2108>=65 && $res2108<=69){
                $gp2108 = 3.25;
            }
            else if($res2108>=70 && $res2108<=74){
                $gp2108 = 3.50;
            }
            else if($res2108>=75 && $res2108<=79){
                $gp2108 = 3.75;
            }
            else if($res2108>=80){
                $gp2108 = 4.00;
            }

            echo '<br>';

            echo $gp2108;


            // sessional ece 2108 ends


            echo '<br>';


            // sessional chem 2118 starts

            
            $att2118 = $row['chem_2118_att'];
            $report2118 = $row['chem_2118_re'];
            $quiz2118 = $row['chem_2118_quiz'];
            $bv2118 = $row['chem_2118_bv'];

            $res2118 = $att2118+$report2118+$quiz2118+$bv2118;

            echo '<br>';

            echo $res2118;

            echo '<br>';

            if($res2118>=0 && $res2118<=39){
                $gp2118 = 0.00;
            }
            else if($res2118>=40 && $res2118<=44){
                $gp2118 = 2.00;
            }
            else if($res2118>=45 && $res2118<=49){
                $gp2118 = 2.25;
            }
            else if($res2118>=50 && $res2118<=54){
                $gp2118 = 2.50;
            }
            else if($res2118>=55 && $res2118<=59){
                $gp2118 = 2.75;
            }
            else if($res2118>=60 && $res2118<=64){
                $gp2118 = 3.00;
            }
            else if($res2118>=65 && $res2118<=69){
                $gp2118 = 3.25;
            }
            else if($res2118>=70 && $res2118<=74){
                $gp2118 = 3.50;
            }
            else if($res2118>=75 && $res2118<=79){
                $gp2118 = 3.75;
            }
            else if($res2118>=80){
                $gp2118 = 4.00;
            }

            echo '<br>';

            echo $gp2118;


            // sessional chem 2118 ends



            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';



            // project 2100 starts

            $res2100 = $row['ece_2100_score'];

            echo '<br>';

            echo $res2100;

            echo '<br>';

            if($res2100>=0 && $res2100<=39){
                $gp2100 = 0.00;
            }
            else if($res2100>=40 && $res2100<=44){
                $gp2100 = 2.00;
            }
            else if($res2100>=45 && $res2100<=49){
                $gp2100 = 2.25;
            }
            else if($res2100>=50 && $res2100<=54){
                $gp2100 = 2.50;
            }
            else if($res2100>=55 && $res2100<=59){
                $gp2100 = 2.75;
            }
            else if($res2100>=60 && $res2100<=64){
                $gp2100 = 3.00;
            }
            else if($res2100>=65 && $res2100<=69){
                $gp2100 = 3.25;
            }
            else if($res2100>=70 && $res2100<=74){
                $gp2100 = 3.50;
            }
            else if($res2100>=75 && $res2100<=79){
                $gp2100 = 3.75;
            }
            else if($res2100>=80){
                $gp2100 = 4.00;
            }

            echo '<br>';

            echo $gp2100;


            // project 2100 ends





            ?>  
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            

<?php
	} 
?>
			