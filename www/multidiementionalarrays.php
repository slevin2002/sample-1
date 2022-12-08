<!DOCTYPE html>
<html>
<body>

  <?php
  $district = array(
                    array(
                         array(
                               array("BMW",25, 30),
                               array("HONDA",15, 25),
                               array("TATA",30, 15),
                               array("land rover",17, 15)
                              ),
                         array(
                             array("BMW",10, 20),
                             array("HONDA",15, 25),
                             array("TATA",30, 15),
                             array("land rover",30, 15)
                             ),
                        ),
                   array(
                        array(
                            array("BMW",25, 30),
                            array("HONDA",15, 25),
                            array("TATA",30, 15),
                            array("land rover",30, 15)
                             ),
                        array(
                            array("BMW",25, 30),
                            array("HONDA",15, 25),
                            array("TATA",30, 15),
                            array("land rover",30, 15)
                          ),
                       ),
                  );


    /*
  echo $SHOWROOM[0][0].":in stock: " .$SHOWROOM[0][1].",sold: ".$SHOWROOM[0][2].".<hr/>";
  echo $SHOWROOM[1][0].":in stock: " .$SHOWROOM[1][1].",sold: ".$SHOWROOM[1][2].".<hr/>";
  echo $SHOWROOM[2][0].":in stock: " .$SHOWROOM[2][1].",sold: ".$SHOWROOM[2][2].".<hr/>";
  echo $SHOWROOM[3][0].":in stock: " .$SHOWROOM[3][1].",sold: ".$SHOWROOM[3][2].".<hr/><hr/>";
  */

  $dn[0]= "DK";
  $dn[1]= "UDUPI";


    $tndk[0] = "kadaba";
    $tndk[1] = "puttur";
    $tndp[0] = "karkala";
    $tndp[1] = "kundhapura";

  $cn[0] ="details of bmw";
  $cn[1] ="details of honda";
  $cn[2] ="details of tata";
  $cn[3] ="details of land ronvar";


  for($dist=0;$dist<2;$dist++)
      {
       echo "<br>"."<br>".$dn[$dist]."<br>"."<hr/>";

       for($town=0;$town <2;$town++)
     {
       if($dist ==0)
       {
      echo "<br>"."<br>".$tndk[$town]."<br>"."***************";
       }
    if($dist ==1)
      {
      echo "<br>"."<br>".$tndp[$town]."<br>"."***************";
       }

       for($carname = 0; $carname<4; $carname++)
      {

       echo"<br>"."<br>".$cn[$carname]."<br>"."***************"."<br>";
    //echo "details . $carname";
      for($details = 0;$details<3;$details++)
      {
        echo $district[$dist][$town][$carname][$details]; echo "  ";
      }
      }
    }
}
