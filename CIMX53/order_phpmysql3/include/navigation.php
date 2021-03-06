<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">

    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="events.php">Events</a>
    </li>

    <?php if(isset($_SESSION['user'])): ?>
    <li class="nav-item">
      <a class="nav-link" href="order.php">Order</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="orders.php">All Orders</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="profile.php">My Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  <?php else: ?>
    <li class="nav-item">
      <a class="nav-link" href="register.php">Register</a>
    </li>
  <?php endif;?>
  </ul>
</div>
</nav>
