 
 
 
 <?php
 include 'Template.php';
 ?>
 
 
 <script type="text/javascript">
 
 //Taking in the values
 
 var event_category = "Information Science and Engineering";
 var event_subcategory = "Argo Comic Fiesta";
 var description = "Are you a fan of comics and movies? Are you always fascinated by spiderman's web? Do you still laugh at Amol Palekar’s antics Golmaal or is it The Spiderman that takes away all the action? Well… whatever be your choice, we welcome all comic and movie maniacs in the first ever Manthan Movie Comic conquizition 'Comic Fiesta', a fun-filled quiz on anything and everything related to Comics. Quiz includes questions or snippets of movie and comic scenes,or characters from the comic series divided among various thrilling rounds. Each team need to qualify consecutive rounds eliminating their competitors and finally emerging as winners.";
 var entry_fee = "Rs 50 per team";
 var day_and_time = "Day 1,@ 2pm";
 var prize_money = "First Prize = Rs 2000 <br> Second Prize = Rs 1000";
 
 var event_coordinators = "Jahnvi : 95385 50892<br>Ullas : 9738831758<br>Aashita : 80504 89794<br>Aditya : 89515 46935";
 
 
 var event_rules = "Team of 3;Rules for each round will be discussed on the spot;All decisions made by the judges will be final and binding.";
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