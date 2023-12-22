<style>
  footer {
    background-color: black; 
    color: white; 
    width: 100%; 
    position: fixed;
    bottom: 0; 
    left: 0;
    z-index: 1000; 
  }
</style>

<footer class="py-3">
  <div class="container">
    <p class="text-center">
      <?php
        
        echo "Copyright &copy; Nom du site " . date("Y");
      ?>
    </p>
  </div>
</footer>
