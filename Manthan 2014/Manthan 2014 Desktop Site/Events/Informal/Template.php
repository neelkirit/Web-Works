<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title id = "full_event_name">Manthan</title>

<!-- Bootstrap -->
<link href="./bootstrap.min.css" rel="stylesheet">
</head>
<body style="min-width: 100%; min-height: 100%;">
<div class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: black; ">
<div class="container" style="background-color: black;">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Manthan 2014</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li><a href="#">Home</a></li>
<li><a href="#">Cultural Events</a></li>
<li><a href="#">Technical Events</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">

<li><a href="#">Contact Us</a></li>
<li><a href="#">Sponsers</a></li>
</ul>
</div><!--/.nav-collapse -->
</div>
</div>

<br>
<br>

<div id = container style = "background:url('./Tartarus.jpg'); background-attachment: fixed; background-size : cover; background-repeat: no-repeat;">
<!-- Row For headers(pagename etc)-->
<div class = "row">
<div class = "col-md-1"></div>
<div class = "col-md-10">
<div class="page-header">
<div class = "row" id = "head">
<div class = "col-md-1"></div>
<div class = "col-md-8" id = "event_name">
<h1 style="color: #ddd; " id = "event_category" style = "font-size = 2em;">Arts</h1><h1><small id="event_subcategory"  style="color: #bbb;">Collage</small></h1>
</div>	
<div class = "col-md-3">
<a href="#"><img src="./ManthanLogo.png" alt="Manthan" class="img-thumbnail" height="0px" width="250px" id = "manthan_logo"></a>
</div>
</div>
</div>
</div>
<div class = "col-md-1"></div>
</div>
<br>
<!-- The body of the page with the info,registration form and navigation table -->
<div class = "row" >
<div class="col-md-1"></div>
<!-- Hold the event details + registration form -->
<div class="col-md-5">
<!-- Nav tabs -->
<ul class="nav nav-tabs">
<li class="active"><a href="#about" data-toggle="tab">About</a></li>
<li><a href="#rules" data-toggle="tab">Rules</a></li>
<li><a href="#register" data-toggle="tab">Register</a></li>
</ul> 
<!-- Tab panes -->
<div class="tab-content" style="color :#ccc; padding-left: 3%;padding-right: 3%;padding-bottom: 3%;margin-bottom: 3%">
<div class="tab-pane fade in active" id="about">
<br>
<!-- Enter the general description of the event like about the event, eligibility, prize,entry fee etc-->
<h3>Description : </h3>
<h4 id = "event_description"></h4>
<br>
<h3>Entry fee : </h3><h4 id = "event_entry_fee"></h4>
<br>
<h3>Prize :</h3><h4 id = "prize_money"></h4>
<br>			
<h3>Event Coordinators : </h3>
<h4 id = "event_coordinators"></h4>					
</div>
<div class="tab-pane fade " id="rules">
<br>
<h3>
<!-- This is to set the rules of the event -->
<ul id = "rules_list">
<!-- Mention the rules of the event below with each single rule enclosed between <li> tags and each <li> seperated by a <br> tag-->
</ul>
</h3>
</div>	
<!-- This is the registration form -->		
<div class="tab-pane fade" id="register">
<br>
<form role="form" action="Form.php" method="post">
<div class="form-group">
<label for="TeamName">Team/Participant Name</label>
<input type="text" class="form-control" id="name" name="name" placeholder="What is the team/your name ?" required>
</div>					
<div class="form-group">
<label for="CollegeName">College Name</label>
<input type="text" class="form-control" id="college" name="college" placeholder="Which college do you belong to ?" required>
</div>					
<div class="form-group">
<label for="EmailId">Email</label>
<input type="email" class="form-control" id="email" name="email" placeholder="Please enter your email ID" required>
</div>				
<div class="form-group">
<label for="EmailId">Phone Number</label>
<input type="number" class="form-control" id="phone" name="phone" placeholder="Please enter your contact number" required>
</div>
<!-- CHANGE THE VALUE ATTRIBUTE UNDERNEATH BASED ON THE NAME OF THE EVENT-->
<input type = "hidden" id ="form_event_name" name="event">			
<button type="submit" class="btn btn-default">Submit</button>
</form> 
</div>
</div>
</div>
<div class="col-md-1"></div>
<!-- This is for the right side nav bar -->
<div class="col-md-4" id="rightimg">		
</div>
</div>
<div class="panel-footer" style="text-align: center; background-color: black;"><a href = "http://bit-manthan.com/">Manthan</a></div>
</div>




