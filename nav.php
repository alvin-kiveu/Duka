<style>
  nav {
    background-color: black;
  }
  nav a {
    color: white;
  }
  .addItemBtn{
    background-color: black;
    color: white;
  }
  .pqty{
    text-align: center;
  }
  .product-name{
    color: black;
    font-weight: 600;
  }
</style>
<nav class="navbar navbar-expand-md" >
  <a class="navbar-brand" href="index.php"><i class="fas fa-store"></i>&nbsp;&nbsp;Duka</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link active" href="index.php"><i class="fas fa-mobile-alt mr-2"></i>Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
      </li>
    </ul>
  </div>
</nav>