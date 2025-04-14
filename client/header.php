

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="./"><img src="./public/logo.png"/></a>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active"  href="./">Home</a>
        </li>


        <?php 
        if(isset($_SESSION['user']['username'])){ ?>
    
        <li class="nav-item">
          <a class="nav-link" href="./server/requests.php?logout=true">Logout(<?php echo $_SESSION['user']['username']?>)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?ask=true">Ask A Question</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id'] ?>">My Questions</a>
          </li>
       <?php }  ?>



       <?php 
        if(!isset($_SESSION['user']['username'])){ ?>
    
       <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">SignUp</a>
        </li>
       <?php }  ?>


         
        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Questions</a>
        </li>
      </ul>
      
    </div>
    <form class="d-flex" role="search" action="">
        <input class="form-control me-2" name ="search" type="search" placeholder="Search Questions" >
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
</nav>