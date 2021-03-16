  <!-- Left Panel -->
  <?php
  session_start();
  $adminid="";
  if(isset($_SESSION["adminid"]))
  {
    $adminid=$_SESSION["adminid"];
  }
  else
  {
    header("location:login.php");
  }
  ?>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- <a class="navbar-brand" href="index.php">News</a> -->
                <a class="navbar-brand" href="index.php">News</a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>News Dashboard</a>
                    </li>
                    <h3 class="menu-title"></h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class=" menu-icon fa fa-newspaper-o" ></i>News</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i><a href="addnews.php">Add news</a></li>
                            <li><i class="fa fa-eye"></i><a href="viewnews.php">View news</a></li>    
                        </ul>
                    </li>



                    <li>
                        <a href="logout.php"> <i class="menu-icon fa fa-sign-out"></i>Logout</a>
                        
                    </li>
                    
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->