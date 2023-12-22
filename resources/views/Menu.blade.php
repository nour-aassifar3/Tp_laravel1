<style>
  .navbar {
    position: fixed;
    width: 100%;    
    z-index: 1000; 
    top:0;
  }
  .navbar-light .navbar-nav .nav-link {
    color: white; 
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;

  }
  .navbar-light .navbar-nav .nav-link:hover {
    color: white; 
    text-decoration: underline solid white;
  }
  .navbar-light .navbar-brand {
    color: white; 
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
    font-size: 25px
  }
  .navbar-light .navbar-brand:hover {
    color: white; 
  }
  .navbar-light {
    background-color: black; 
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand " href="/">Nour</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/produits/manteaux">Manteaux</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/produits/accessoires">Accessoires</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/produits/blazer">Blazer</a>
        </li>
      </ul>
    </div>
  </nav>
