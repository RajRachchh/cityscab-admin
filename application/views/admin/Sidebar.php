<?php
$url = base_url();
$url_array = explode('/', $_SERVER['REQUEST_URI']);

// echo "xx";
// print_r($url_array);

$nav_url = end($url_array);


$AccessMenu = ($this->permission);

//print_r($AccessMenu);


?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">

        <span class="brand-text font-weight-light">
		
		Admin
		</span>
		</a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">




			
            <div class="image">
                <?php if (empty($this->session->image)) { ?>
                    <img src="https://adminlte.io/themes/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                <?php } else { ?>
                    <img class="img-circle elevation-2" src="<?php echo base_url('upload/profile/') . $this->session->image; ?>"  alt="User Image">
                <?php } ?>
            </div>
			
			

            <div class="info">
                <a align="center" class="d-block">Welcome <?php echo strtoupper($this->session->name1); ?> </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			
			
		
				

			
			
			
			<?php if(in_array('ViewUser', $AccessMenu) || in_array('ViewAdmin', $AccessMenu))
				{ 
				?>  
				 <li class="nav-item">
                    <a href="<?php echo $url; ?>admin/dashboard" class="nav-link <?php
                    if ($nav_url == "dashboard")
                        echo "actives";
                    else
                        "";
                    ?>" style="<?php if ($nav_url == "dashboard") echo "color: WHITE"; ?>"> 
                        <i class="nav-icon fas fa-tachometer-alt "></i>
                        <p>Dashboard</p>
                    </a>
                </li>
				
				
					
					
					
					
						
					
					
					<li class="nav-item">
                    <a href="<?php echo $url; ?>admin/profile" class="nav-link <?php if ($nav_url == "profile") echo "actives"; ?>" style="<?php
                    if ($nav_url == "profile")
                        echo "color: WHITE";
                    else
                        "";
                    ?>"> 
                        <i class="nav-icon far fa-user-circle"></i>  
                        <p class="text">My Profile</p>
                    </a>
					</li>
					
					
					
					
					
				<?php  } ?>


		<?php if(in_array('ViewAdmin', $AccessMenu)){ ?> 
					
					
               

                <li class="nav-item">
                    <a href="<?php echo $url; ?>admin/bookdata" class="nav-link <?php if ($nav_url == "bookdata") echo "actives"; ?>" style="<?php
                    if ($nav_url == "bookdata")
                        echo "color: WHITE";
                    else
                        "";
                    ?>"> 
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Inquery Data
                        </p>
                    </a>
                </li>
				
				

                

				<li class="nav-item">
                    <a href="<?php echo $url; ?>admin/category" class="nav-link <?php if ($nav_url == "category") echo "actives"; ?>" style="<?php
                    if ($nav_url == "category")
                        echo "color: WHITE";
                    else
                        "";
                    ?>"> 
                        <i class="nav-icon fa fa-globe"></i>
                        <p class="text">Add Package</p>
                    </a>
                </li>
				
				
				<li class="nav-item">
                    <a href="<?php echo $url; ?>admin/category/view_data" class="nav-link <?php if ($nav_url == "view_data") echo "actives"; ?>" style="<?php
                    if ($nav_url == "view_data")
                        echo "color: WHITE";
                    else
                        "";
                    ?>"> 
                        <i class="nav-icon fa fa-eye"></i>
                        <p class="text">View Package</p>
                    </a>
                </li>
				
				
				
				
				
				<?php  } ?>
				
				
				
				


                <li class="nav-item">
                    <a href="<?php echo $url; ?>admin/Auth/Logout" class="nav-link"> 
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<style>
    .actives
    {
        background: #796f7e63;

    }
</style>