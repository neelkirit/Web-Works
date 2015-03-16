 
 <?php
 include 'Template.php';
 ?>
 
 
 <script type="text/javascript">
 
 //Taking in the values
 
 var event_category = "Theatre";
 var event_subcategory = "Street Play";
 var description = "The play opened at the Knickerbocker Theatre in New York on November 11, 1901, produced by Charles Frohman and starring Maude Adams, but ran for only a modestly successful 64 performances. Street plays are fun, With minimal props and a stress on action and sounds, they can be enacted in a quadrangle, a classroom, a playground and of course, a street. Here are complete scripts of two plays and a mini-script that starts you off and lets you ";
 var entry_fee = "Rs 100";
 var prize_money = "First Prize = Rs 3000 <br> Second Prize = Rs 1500";
 
 var event_coordinators = "Sumukh : 966345828<br>Jayanth : 8147586295";
 
 
 var event_rules = "Design your own play.;Any theme of your choice;Maximum 10+2 member per team;Time limit:10+2 min";
 var event_image = "Theatre.jpg";
 var day_and_time = "1pm(Day 2)";
 document.getElementById('event_day').innerHTML = day_and_time;
 
 
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
 
 
 
 </script>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="./bootstrap.min.js"></script>
 
 </body>
 </html>