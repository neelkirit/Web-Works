 
 
 
 <?php
 include 'Template.php';
 ?>
 
 
 <script type="text/javascript">
 
 //Taking in the values
 
 var event_category = "Literary";
 var event_subcategory = "Pot Pourri";
 var description = " Potpourri (noun) is a mixture or medley of things<br>Basically, a khichdi of all sorts of games, only for those ready to do anything.<br>Lightening fast aping around, drawing pictures that would make Da Vinci turn in his grave,a knack of guessing the right answer – these are all the talents you’ll need to reach the unmatched glory!";
 var entry_fee = "Rs 50";
 var prize_money = "First Prize = Rs 1500 <br> Second Prize = Rs 1000";
 
 var event_coordinators = "Anshul : 9902347981<br>Tanay : 9972026267";
 
 
 var event_rules = "Format: written elimination round(Hint: Only in three words) followed by an on-stage final round for 5 qualifying teams";
 var event_image = "Literary.jpg";
 
 var day_and_time = "10am(Day 3)";
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