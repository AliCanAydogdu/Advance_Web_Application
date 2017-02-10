 <!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Chinese Zodiac</title>
		<style type="text/css">

			body{
				padding-left: 0px;
				margin-left: -8.7px;
        margin-top: -8.7px;

			}

			h2 {
				font-size: 3em;
				color: #a70f0e;
				font-family: arial;
				text-align: center;
				margin-top: 0px;
				margin-bottom: 0px;

			}
			h3{
				margin-top: 0px;
				padding-top: 0px;
				font-size: 1em;
				text-align: center;
				color: #5a1023;
				margin-bottom: 0px;

			}
			h1{
				margin-top: -115px;
        			margin-left: -15px;

				padding-left: 0px;

				display: inline-block;
			}
      			h4{
      				margin-top: -115px;
        			margin-left: 850px;

        			padding-left: 0px;

        			display: inline-block;
     			 }
   			h5{
        			height: 200px;
        			margin-top: 430px;
        			margin-left: -30px;

        			padding-left: 10px;

        			display: inline-block;
     			 }


			header {
				border-top-left-radius: 10px;
				border-top-right-radius: 10px;
				background:#e1e1e1  ;
				width: 96.57%;
				height: 130px;
				padding:60px;
				padding-left: 30px;
				padding-right: 11px;
				padding-bottom: 0px;
				margin-bottom: 0px;
        			margin-left: 0px;
				margin: 10px 10px 0px 10px;
        			border: 1px solid black;
				}


		       	a {
				margin:0;
				padding:10px;
				text-align:center;
				left:0px;
				left: 0px;
				right: 0px;
				text-decoration: none;
				color: black;
				font-size: large;
				}
			a:hover {
				color:white;
				border:1px solid black;
				border-radius: 0px 17px 0px 17px;
				background-color: 	#194470;
				padding: 10px;

				}

			nav{
				height: 33px;
				width: 99.75%;
				text-align: center;
				padding-top: 11px;
				border: 1px solid black;
				margin-left: 10px;
				margin-right: 10px;
	            		background-color: #e5838e;
				}
			aside{
				margin-left: 10px;
				height: 650px;
				width: 255px;
				border: 1px solid black;
				background-color: #e1e1e1;
				text-decoration: none;
				padding-left: -20px;
				}
			ul li{
				text-decoration: none;
				color: black;
				list-style-type: none;
				padding: 14px 0;
				}
			ul li:nth-child{

				}

			footer {
			        position: absolute;
			        bottom: 0;
		         	top:891px;
         			left: 1px;
				height:30px;
				width: 100%;
				padding-top: 10px;
		                background-color:red;
				border: 1px solid black;
				border-radius: 0px 0px 8px 8px;
				color: black;
				text-align: center;
				background-color:#e5838e;

				}

	</style>
	</head>
	<body>
		<div>
			<?php include("Includes/inc_header.php") ?>
		</div>
		<div>
			<?php include("Includes/inc_button_nav.php") ?>
		</div>
		<div>
			<?php include("Includes/inc_text_links.php") ?>
		</div>

		<div id="content">
		    <p><?php
		    If (isset($_GET['page'])) {
		      switch ($_GET['page']) {
		        case 'site_layout':
		          include('Includes/inc_site_layout.php');
		          break;
		        case 'control_structures':
		          include('Includes/inc_control_structures.php');
		          break;
		        case 'string_functions':
		          include('Includes/inc_string_functions.php');
		          break;
		        case 'web_forms':
		          include('Includes/inc_web_forms.php');
		          break;
		        case 'midterm_assignment':
		          include('Includes/inc_midterm_assignment.php');
		          break;
		        case 'state_information':
		          include('Includes/inc_state_information.php');
		          break;
		        case 'user_templates':
		          include('Includes/inc_user_templates.php');
		          break;
		        case 'final_project':
		          include('Includes/inc_final_project.php');
		          break;
		        case 'home_page':
		        default:
		          include('Includes/inc_home.php');
		          break;
		        }
		    } else {
		      include('Includes/inc_home.php');
		    }
			?></p>
		</div>
		<div>
			<?php include("Includes/inc_footer.php") ?>
		</div>
</body>
</html>
