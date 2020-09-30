<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Orders</title>

    <?php include("include/head.php"); ?>

  </head>
  <body>
  <?php include("include/navigation.php"); ?>

  <div class="container">
    <!-- Content here -->
    <h1>Orders</h1>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Size</th>
      <th scope="col">Toppings</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

    <?php
    $total_orders = 0;
    include('include/db.php');
    $sql = "SELECT * FROM 'pizza_order' ";
    //$result = mysql_query($con, $sql);

    // Perform query
    if ($result = mysqli_query($con, $sql)) {
      $total_orders = mysqli_num_rows($result);

      //fetch_assoc
      while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>";

        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['first_name']."</td>";
        echo "<td>".$row['last_name']."</td>";
        echo "<td>".$row['size']."</td>";
        echo "<td>".$row['toppings']."</td>";

        echo '<td><a href="order_details.php?order_id='.$row['id'].'">View Order</a></td>';
        echo '<td><a href="delete_order.php?order_id='.$row['id'].'">Delete Order</a></td>';

        echo "</tr>";


        //echo $row['first_name'] . ' ' . $row['last_name'] . ' ' . $row['size'] . ' ' . $row['toppings'] . '<br>'. $row['order_total'] ;
      }

      // Free result set
      mysqli_free_result($result);
    }else{
      echo "No results";
    }

    mysqli_close($con);


    ?>

  </tbody>
</table>
<h3>Total Orders: <?php echo $total_orders; ?></h3>

  </div>


    <?php include("include/scripts.php"); ?>

  </body>
</html>
