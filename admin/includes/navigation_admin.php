<?php session_start(); ?>

<?php
 $user = $_SESSION['username'];

?>


<nav class="navbar navbar-default navbar-fixed-top cust-mav">
        <div class="container-fluid">
            <div class="navbar-header cust-nav"><a class="navbar-brand navbar-link cust-nav" href="index.php">Admin Panel </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="cursor: pointer;"><i class="glyphicon glyphicon-user"></i>&nbsp&nbsp <?php echo "$user"; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li role="presentation"><a href="/International Gems Council/admin/index.php">Admin Panel</a></li>
                            <li role="presentation"><a href="#">Settings </a></li>
                            <li class="divider" role="presentation"></li>
                            <li role="presentation"><a href="..\admin\includes\admin_logout.php">Logout </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

   