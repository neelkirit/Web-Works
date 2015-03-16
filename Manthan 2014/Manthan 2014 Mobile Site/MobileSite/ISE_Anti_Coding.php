 
 <?php
 include 'Template.php';
 ?>
 
 
 <script type="text/javascript">
 
 //Taking in the values
 
 var event_category = "Information Science and Engineering";
 var event_subcategory = "Anti Coding";
 var description = "Are you fatigued by traditional competitive programming? Do you want a break, out of this coding blasé? A ‘yes’ for any of these tells us you are watching the right space. Anti-Coding is an on campus event in which participants need to write code unconventionally.";
 var entry_fee = "Rs 50 per team";
  var day_and_time = "Day 1,@ 1pm";
 var prize_money = "First Prize = Rs 2000 <br> Second Prize = Rs 1000";
 
 var event_coordinators = "Kundan Kumar : 9916276127<br>Devdeep Nambla : 8867162220<br>Rupal Khurana:      88800 79420";
 
 
 var event_rules = "Each team shall be given a random problem statement out of a pool of problems. This can be anything like a simple problem printing a factorial but the aim of code is to make the code hard to read and interpret by a second person. ;Each team will have to write their code as hard to interpret as possible. ;The teams shall submit their code for the problem after 30 minutes after the commencement of this round. After the given time, each team will be given access to solutions submitted by other teams. ;Now each team can attempt to ‘hack’ some other team’s solution. A ‘hack’ attempt involves guessing the problem statement for the solution being hacked.;A successful hack attempt will disqualify the team who wrote the hacked code. An unsuccessful hack attempts by a team however lead to the elimination of the team attempting the hack.;The last team to be eliminated is declared winner.;Team of maximum  2;Use of internet will not be permitted.;No compilers shall be allowed after the ‘hacking’ round begins.;All decisions made by the judge will be final.";
 var event_image = "ISE.jpg";
 
 
 
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