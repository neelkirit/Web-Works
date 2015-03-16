 
 
 
 <?php
 include 'Template.php';
 ?>
 
 
 <script type="text/javascript">
 
 //Taking in the values
 
 var event_category = "Civil";
 var event_subcategory = "So you think you can build ??";
 var description = "Participants have to build (say a bridge) using the given materials only.It provides a stage to display your creativity design and analytical skills and engineering attitude. The aim is to design and build a structure using the given stuff and test until it fails.";
 var entry_fee = "Rs 100 per team";
 var day_and_time = "Day 2,@ 10am";
 var prize_money = "First Prize = Rs 3000 <br> Second Prize = Rs 1500";
 
 var event_coordinators = " Vaibhav Sarda: 80508 49214 <br> Suruchi Agarwal:   90351 22968<br>Vaidya L:  81470 43832 ";
 
 
 var event_rules = "Participants have to build (say a bridge) using the given materials only. ;The structure should specify the given condition.;It is a stage of planning and innovation.;All you have is just some ice cream sticks, a bottle of fevicol, some newspaper and some other stuff to make a full-fledged bridge which can not only stand by itself but also can bear maximum load so that you can outrun others to win this event.;Judging criteria will be based on innovation, stability etc.";
 var event_image = "Civil.jpg";
 
 
 
 //Processing full event name and list of rules
 var full_event_name = event_category+" "+event_subcategory;
 var rules = event_rules.split(";");
 var i = 0;
 for(i=0;i<rules.length;i++)
 {
	 var rule_list = document.createElement("LI");
	 var rule = document.createTextNode(rules[i]);
	 rule_list.appendChild(rule);
	 document.getElementById('rules_list').appendChild(rule_list);
	 var lb = document.createElement("BR");
	 document.getElementById('rules_list').appendChild(lb);
	 
 }
 //Assigning the values
 
 document.getElementById("rightimg").style.backgroundImage="url('"+event_image+"')";
 document.getElementById("rightimg").style.height="350px";
 document.getElementById("rightimg").style.width="300px";
 document.getElementById("rightimg").style.marginTop="60px";
 document.getElementById("rightimg").style.backgroundSize = "cover";
 document.getElementById("rightimg").style.backgroundRepeat = "no-repeat";
 document.getElementById("rightimg").style.borderRadius = "60px";
 document.getElementById("rightimg").style.boxShadow = "5px 5px 3px #533";
 document.getElementById('event_description').innerHTML = description;
 document.getElementById('full_event_name').innerHTML = full_event_name;
 document.getElementById('event_category').innerHTML = event_category;
 document.getElementById('event_subcategory').innerHTML = event_subcategory;
 document.getElementById('prize_money').innerHTML = prize_money;
 document.getElementById('event_coordinators').innerHTML = event_coordinators;
 document.getElementById('event_entry_fee').innerHTML = entry_fee;
 document.getElementById('form_event_name').value = full_event_name;
 document.getElementById('event_day').innerHTML = day_and_time;
 
 
 
 </script>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="./bootstrap.min.js"></script>
 
 </body>
 </html>