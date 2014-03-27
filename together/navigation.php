<?php
		echo '
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand centerit" href="index.php">
						<i class="fa fa-linkedin fa-lg"></i>
					</a>
			</div>
				<div class="input-group col-lg-6 col-lg-offset-0">
					<input type="text" class="form-control" placeholder="Look for people, groups, and anything">
					<span class="input-group-addon"><i class="fa fa-search"></i></span>
				</div>
			
			
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li>
                        <a href="#">News</a>
                    </li>
					<li>
                        <a href="profile.php">Profile</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Connections</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Keep In Touch</a>
                            </li>
                            <li><a href="contacts.php">Contacts</a>
                            </li>
                            <li><a href="#">Find Alumni</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Companies</a>
                    </li>
                    <li>
                        <a href="#">Groups</a>
                    </li>
                    <li>
                        <a href="#">Education</a>
                    </li>
                    <li>
                        <a href="#">Business</a>
                    </li>
                    <li>
                        <a href="#">Upgrade</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	';
?>