<!Doctype html>
<html>
  <head>
    <title>Bob`s Auto Parts - Order Results</title>
	<?php
	  // create short variable names
	  $tireqty     = $_POST['tireqty'];
	  $oilqty      = $_POST['oilqty'];
	  $sparkqty    = $_POST['sparkqty'];
	  
	  $totalqty    = 0;
	  $totalqty    = $tireqty + $oilqty + $sparkqty;
	  
	  $totalamount = 0.00;
	  
	  define( 'TIRESPRICE', 100 );
	  define( 'OILPRICE', 10 );
	  define( 'SPARKPRICE', 4 );
	  
	  $totalamount = $tireqty * TIRESPRICE
	               + $oilqty * OILPRICE
				   + $sparkqty * SPARKPRICE;
				   
	  $taxrate     = 0.10;
	  
	?>
  </head>
  <body>
    <h1>Bob`s Auto Parts</h1>
	<h2>Order Results</h2>
	<?php
	  if ( $totalqty == 0 ) {
		echo 'You didn`t order anything on previous page! <br />';
      }
	  else {
		echo '<p>Order Processed at ' ;
		echo date('H:i, jS F Y');
		echo '</p>';
		echo '<p>Your order is as follows: </p>';
		echo '<table>';
	    echo '<tr bgcolor="#cccccc">
		      <td width="15">Item</td>
			  <td width="150">Quantity</td>
			  </tr>';
		if ( $tireqty > 0 ) {
		  echo '<tr><td>'.$tireqty.'</td><td>tires</td></tr>';
		}
		if ( $oilqty > 0 ) {
		  echo '<tr><td>'.$oilqty.'</td><td>bottls of oil</td></tr>';
		}
		if ( $sparkqty > 0 ) {
		  echo '<tr><td>'.$sparkqty.'</td><td>spark plugs</td></tr>';
		}		
		echo '<tr bgcolor="#cccccc"><td>'.$totalqty.'</td><td>Total</td></tr>';
		echo '</table>';
		echo '<br />';
		  
		echo "Subtotal: $".number_format( $totalamount, 2 )."<br />";
		$totalamount = $totalamount * ( 1 + $taxrate );
		echo "Total including tax: $".number_format( $totalamount, 2 )."<br />";  
	  }
	  
	  switch( $_POST[ 'find' ] ) {
		  case 'a':
		    echo '<p>Regular customer</p>';
			break;
		  case 'b':
		    echo '<p>Customer reffered by TV advert</p>';
			break;
		  case 'c':
		    echo '<p>Customer reffered by phone directory</p>';
			break;
		  case 'd':
		    echo '<p>Customer reffered by word of mouth</p>';
			break;
		  default:
		    echo '<p>We don`t know how this customer found us</p>';
			break;
	  }
	?>
  </body>
</html>