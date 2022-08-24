<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">GRUD PROJECT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
      <?php if(!empty($_SESSION['user'])): ?>
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php endif ?>
        
        <?php if(empty($_SESSION['user'])): ?>
        <li class="nav-item">
          <a class="nav-link active" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <?php endif ?>


        <?php if(!empty($_SESSION['user'])): ?>
        <li class="nav-item ml-5">
          <a class="btn btn-danger" href="logout.php">Logout</a>
        </li>
        <?php endif ?>
       
      </ul>
    </div>
  </nav>