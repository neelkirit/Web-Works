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
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: black; ">
<div class="container" style="background-color: black;">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="./index.html">Manthan 2014</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
</ul>
<ul class="nav navbar-nav navbar-right">

<li><a href="./index.html">Back</a></li>
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
<h1 style="color: #ddd; " id = "event_category"></h1><br><h1><small id="event_subcategory"  style="color: #bbb;"></small></h1>
</div>	
<div class = "col-md-3">
<a href="./index.html"><img src="./ManthanLogo.png" alt="Manthan" class="img-thumbnail" height="0px" width="250px" id = "manthan_logo"></a>
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
<h4>Description : </h4>
<p id = "event_description"></p>
<br>
<h4>Entry fee : </h4><p id = "event_entry_fee"></p>
<br>
<h4>Prize :</h4><p id = "prize_money"></p>
<br>			
<h4>Event Coordinators : </h4>
<p id = "event_coordinators"></p>	
<br>
<h4>Event Date and Time : </h4>
<p id = "event_day"></p>
</div>
<div class="tab-pane fade " id="rules">
<br>
<!-- This is to set the rules of the event -->
<ul id = "rules_list">
<!-- Mention the rules of the event below with each single rule enclosed between <li> tags and each <li> seperated by a <br> tag-->
</ul>
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
<div class="panel-footer" style="text-align: center; background-color: black;"><a href = "./index.html">Manthan</a></div>
</div>




