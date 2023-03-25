<?php

    session_start();
    error_reporting(1);
  ?>

  <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
         <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        
        <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
        
    </head>
  <?php

$con=mysqli_connect("localhost","id20197494_root","Rawlings1616$","id20197494_academic");
$q=mysqli_query($con,"select price,tax,delivery_fee, quantity, total, gas_station, location, amount_paid from petrol_orders where order_id = '".$_GET['order_id']."'");
$n=  mysqli_fetch_assoc($q);
$price= $n['price'];
$tax= $n['tax'];
$delivery_fee= $n['delivery_fee'];
$quantity= $n['quantity'];
$total= $n['total'];
$gas_station= $n['gas_station'];
$location= $n['location'];
$amount_paid= $n['amount_paid'];





$id=$_SESSION['user'];

$result = mysqli_query($con,"SELECT * FROM petrol_orders WHERE order_id = '".$_GET['order_id']."'");
                    
                    while($row = mysqli_fetch_array($result))
                      {
?>

<hr style="border: 1px solid black;border-style: dashed;">
<center><h3>Kenya Airports Authority</h3></center>
<center><h2>Flight Reservation Slip</h2></center><h4><?php echo $booking_status;?></h4>
<br>
<td style="width:4%;"> <font style="font-family: Verdana;">Price : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $price;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <font style="font-family: Verdana;">Tax : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $tax;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <font style="font-family: Verdana;">Delivery fee : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $delivery_fee;?> </td><br>
<td style="width:4%;"> <font style="font-family: Verdana;">Quantity : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $quantity;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <font style="font-family: Verdana;">Total : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $total;?> </td><br>
<td style="width:4%;"> <font style="font-family: Verdana;">Gas station : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $gas_station;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <font style="font-family: Verdana;">Location : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $location;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <font style="font-family: Verdana;">Amount paid : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $amount_paid;?> </td><br>


    <body>

                 
                
        </div>

         
  <div class="container-fluid">
                            <div class="row">
                               <div class="col-sm-12">
      <center>  <table class="table table-bordered" style="font-family: Verdana">
                
              
                
                <center><font style="font-family:Verdana; font-size:18px;">
                   
                    </font></center>
                
                <br>
                <br>
                <center><font style="font-family:Arial Black; font-size:20px;">
		
                   </font></center>
                </td>
                    <td colspan="2" width="3%" >
                   <?php
                  /*
                    $picfile_path ='images/';
                    $result1 = mysqli_query($con,"SELECT * FROM petrol_orders where order_id = '".$_GET['order_id']."'");
                   $row1 = mysqli_fetch_array($result1)  ; 
                    
                    
                        $picsrc=$picfile_path.$row1['s_pic'];
                        
                        
                        */
                   ?>
                        </td>
                 </tr>   


    
                 
                 
                       </table></center>
                               </div>
                            </div>
            </div>
        <?php
              }
        ?>
 <p> 
<center> <input type="submit" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></center>
<CENTER><a class="print_hide" href="pnr.php">Check other PNR</a></center>
</p>
   <style>
     @media print {
      .print_hide{
        display:none;
      }
     }
   </style> 

    </body>
</html>


                     