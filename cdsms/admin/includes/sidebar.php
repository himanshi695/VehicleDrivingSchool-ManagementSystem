<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
<?php
$adminid=$_SESSION['cdsmsaid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adminid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?>
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="dashboard.php"><?php echo $name; ?></a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Packages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-o"></i><a href="add-package.php">Add Package</a></li>
                            <li><i class="menu-icon fa fa-file-o"></i><a href="manage-package.php">Manage Packages</a></li>
                        </ul>
                    </li>




 <li class="menu-item-has-children dropdown">
                        <a href="registered-users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Applied Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="registered-new-users.php">New Users</a></li>
                            <li><a href="registered-old-user.php">Old Users</a></li>
                          
                        </ul>
                    </li>
                     <li class="active">
                        <a href="subscribed-users.php"> <i class="menu-icon fa fa-users"></i>Subscribed Users</a>
                    </li>
                    
               <li class="menu-item-has-children dropdown">
                        <a href="registered-users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-email"></i>Enquiry</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="new-user-enquiry.php">Unread Enquiry</a></li>
                            <li><a href="old-user-enquiry.php">Read Enquiry</a></li>
                          
                        </ul>
                    </li> 

   



   <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-o"></i><a href="about-us.php">About Us</a></li>
                            <li><i class="menu-icon fa fa-file-o"></i><a href="contact-us.php">Contact us</a></li>
                        </ul>
                    </li>

<li class="active">
                        <a href="search.php"> <i class="menu-icon fa fa-search"></i>Search </a>
                    </li>
  <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-o"></i><a href="bwdates-report-ds.php">Between Dates Report</a></li>
                           
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>