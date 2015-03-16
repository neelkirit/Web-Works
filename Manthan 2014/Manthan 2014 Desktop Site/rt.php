
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manthan 2014</title>
       <link rel="stylesheet" href="css/style.css"/>
        <script type="text/javascript" src="jarallax-0.2.4b.min.js" ></script>
     	<script type="text/javascript" src="jquery-2.1.0.min.js" ></script>
       <link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css' />
       <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
     	<meta name="description" content="Manthan 2014" />
		<meta name="keywords" content="college,Fest,Manthan 2014,Bangalore,institute of technology" />
		<meta name="author" content="Neel Kirit" />
        <meta name="robots" content="all,follow" />
		<script type="text/javascript">
		if (screen.width <= 800) {
   			 window.location = "http://m.bit-manthan.com";
 		 }
		$(document).ready(function() {
			$('#pagecontent').hide();
			$('#entry').hide();
			$(window).load(function() {
				$('#entry').show();
				$('#loading').hide();
				$('#entry').click(function(){
				
					$('#loader').hide();
				$('#pagecontent').show();
				init();});
			
			
					
				
			});
		});
		init = function(){
			
		
			
        var jarallax = new Jarallax();
		jarallax = new Jarallax(new ControllerScroll(true));
       
		
		jarallax.setDefault('#home', {opacity:'1'});
		jarallax.setDefault('#tech', {opacity:'0'},{top:'100%'});
		jarallax.setDefault('#cult', {opacity:'0'});
		jarallax.setDefault('#contact', {opacity:'0'});
		jarallax.setDefault('#bit', {opacity:'0'});
		
		//animation for main page
		jarallax.addAnimation('#home',[{progress:'0%', opacity:'1'},{progress:'7%', opacity:'1'},{progress:'15%', opacity:'0'},{progress:'21%', opacity:'0'},{progress:'24%', opacity:'0'},{progress:'100%', opacity:'0'}]);
		jarallax.addAnimation('#tech',[{progress:'0%', opacity:'0',top:'100%'},{progress:'10%', opacity:'0',top:'100%'},{progress:'21%', opacity:'0',top:'100%'},{progress:'28%', opacity:'1',top:'0%'},{progress:'34%', opacity:'1',top:'0%'},{progress:'37%', opacity:'0',top:'0%'},{progress:'48%', opacity:'0',top:'-100%'},{progress:'100%', opacity:'0',top:'-100%'}]);
		jarallax.addAnimation('#cult',[{progress:'24%', opacity:'0'},{progress:'45%', opacity:'0'},{progress:'47%', opacity:'1'},{progress:'55%', opacity:'1'},{progress:'57%', opacity:'0'},{progress:'100%', opacity:'0'}]);
		jarallax.addAnimation('#contact',[{progress:'65%', opacity:'0'},{progress:'68%', opacity:'1'},{progress:'71%', opacity:'1'},{progress:'74%', opacity:'0'},{progress:'100%', opacity:'0'}]);
		jarallax.addAnimation('#bit',[{progress:'93%', opacity:'0'},{progress:'97%', opacity:'1'},{progress:'100%', opacity:'1'},{progress:'100%', opacity:'1'}]);
		
		jarallax.setDefault('#star', {opacity:'0'});
		jarallax.addAnimation('#star',[{progress:'0%', opacity:'0'},{progress:'7%', opacity:'0'},{progress:'16%', opacity:'1'},{progress:'20%', opacity:'1'},{progress:'24%', opacity:'0'},{progress:'28%', opacity:'0'},{progress:'100%', opacity:'0'}]);
		
		
		//animation for cultural elements
		jarallax.setDefault('#dance', {left:"-42%"},{top:"-34%"},{opacity:'0'});
		jarallax.setDefault('#music', {left:"-42%"},{top:"-34%"},{opacity:'0'});
		jarallax.setDefault('#arts', {left:"-42%"},{top:"-34%"},{opacity:'0'});
		jarallax.setDefault('#theatre',{left:"-42%"},{top:"-34%"},{opacity:'0'});
		jarallax.setDefault('#literary', {left:"-42%"},{top:"-34%"},{opacity:'0'});
		jarallax.setDefault('#games', {left:"-42%"},{top:"-34%"},{opacity:'0'});
		jarallax.setDefault('#informal', {left:"-42%"},{top:"-34%"},{opacity:'0'});
		jarallax.addAnimation('#dance',[{progress: '0%', left:"-42%",top:"-34%",display:'block',opacity:'0'},{progress: '44%', left:"42%",top:"34%",display:'block',opacity:'0'},{progress: '48%',top:"6%", left:"2%",display:'block',opacity:'1'},{progress: '53%',top:"6%", left:"2%",display:'block',opacity:'1'},{progress: '60%', top:"-300%",left:"500%",display:'block',opacity:'1'},{progress: '73%', top:"-300%",left:"500%",display:'block',opacity:'0'},{progress: '100%', top:"-300%",left:"500%",display:'block',opacity:'0'}]);	
		  
		jarallax.addAnimation('#music',[{progress: '0%', left:"-42%",top:"-34%",display:'block',opacity:'0'},{progress: '44%', left:"42%",top:"34%",display:'block',opacity:'0'},{progress: '48%',top:"24%", left:"17%",display:'block',opacity:'1'},{progress: '53%',top:"24%", left:"17%",display:'block',opacity:'1'},{progress: '60%', top:"300%",left:"-500%",display:'block',opacity:'1'},{progress: '73%', top:"300%",left:"-500%",display:'block',opacity:'0'},{progress: '100%', top:"300%",left:"-500%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#arts',[{progress: '0%', left:"-42%",top:"-34%",display:'block',opacity:'0'},{progress: '44%', left:"42%",top:"34%",display:'block',opacity:'0'},{progress: '48%',top:"60%", left:"13%",display:'block',opacity:'1'},{progress: '53%',top:"60%", left:"13%",display:'block',opacity:'1'},{progress: '60%', top:"500%",left:"100%",display:'block',opacity:'1'},{progress: '73%', top:"500%",left:"1000%",display:'block',opacity:'0'},{progress: '100%', top:"500%",left:"1000%",display:'block',opacity:'0'}]);	  
		
		jarallax.addAnimation('#theatre',[{progress: '0%', left:"-42%",top:"-34%",display:'block',opacity:'0'},{progress: '44%', left:"42%",top:"34%",display:'block',opacity:'0'},{progress: '48%',top:"6%", left:"82%",display:'block',opacity:'1'},{progress: '53%',top:"6%", left:"82%",display:'block',opacity:'1'},{progress: '60%', top:"-300%",left:"-500%",display:'block',opacity:'1'},{progress: '73%', top:"-300%",left:"-500%",display:'block',opacity:'0'},{progress: '100%', top:"-300%",left:"-500%",display:'block',opacity:'0'}]);	
		
		
		jarallax.addAnimation('#kannada',[{progress: '0%', left:"-42%",top:"-34%",display:'block',opacity:'0'},{progress: '44%', left:"42%",top:"34%",display:'block',opacity:'0'},{progress: '48%',top:"-4%", left:"43%",display:'block',opacity:'1'},{progress: '53%',top:"-4%", left:"43%",display:'block',opacity:'1'},{progress: '60%', top:"-300%",left:"-500%",display:'block',opacity:'1'},{progress: '73%', top:"-300%",left:"-500%",display:'block',opacity:'0'},{progress: '100%', top:"-300%",left:"-500%",display:'block',opacity:'0'}]);	
		
		jarallax.addAnimation('#literary',[{progress: '0%', left:"-42%",top:"-34%",display:'block',opacity:'0'},{progress: '44%', left:"42%",top:"34%",display:'block',opacity:'0'},{progress: '48%', top:"24%", left:"64%",display:'block',opacity:'1'},{progress: '53%', top:"24%", left:"64%",display:'block',opacity:'1'},{progress: '60%', top:"300%",left:"500%",display:'block',opacity:'1'},{progress: '73%', top:"300%",left:"500%",display:'block',opacity:'0'},{progress: '100%', top:"300%",left:"500%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#games',[{progress: '0%', left:"-42%",top:"-34%",display:'block',opacity:'0'},{progress: '44%', left:"42%",top:"34%",display:'block',opacity:'0'},{progress: '48%', top:"60%", left:"67%",display:'block',opacity:'1'},{progress: '53%', top:"60%", left:"67%",display:'block',opacity:'1'},{progress: '60%', top:"500%",left:"1000%",display:'block',opacity:'1'},{progress: '73%', top:"500%",left:"1000%",display:'block',opacity:'0'},{progress: '100%', top:"500%",left:"1000%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#informal',[{progress: '0%', left:"-42%",top:"-34%",display:'block',opacity:'0'},{progress: '44%', left:"42%",top:"34%",display:'block',opacity:'0'},{progress: '48%', top:"64%", left:"42%",display:'block',opacity:'1'},{progress: '53%', top:"64%", left:"42%",display:'block',opacity:'1'},{progress: '60%', top:"600%",left:"42%",display:'block',opacity:'1'},{progress: '73%', top:"30%",left:"42%",display:'block',opacity:'0'},{progress: '100%', top:"30%",left:"42%",display:'block',opacity:'0'}]);
		
		//animation for cultural elements children
		jarallax.setDefault('#dancon', {opacity:'0'});
		jarallax.setDefault('#danduet', {opacity:'0'});
		jarallax.setDefault('#dansolo', {opacity:'0'});
		jarallax.setDefault('#danwest', {opacity:'0'});
		jarallax.addAnimation('#dancon',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);	
		jarallax.addAnimation('#dansolo',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);	
		jarallax.addAnimation('#danduet',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);	
		jarallax.addAnimation('#danwest',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);	
		jarallax.setDefault('#acc',{opacity:'0'});
		jarallax.setDefault('#westsolo',{opacity:'0'});
		jarallax.setDefault('#classolo',{opacity:'0'});
		jarallax.setDefault('#eastsolo',{opacity:'0'});
		jarallax.setDefault('#bob',{opacity:'0'});
		jarallax.addAnimation('#acc',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#westsolo',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#classolo',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#eastsolo',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#bob',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.setDefault('#face',{opacity:'0'});
		jarallax.setDefault('#mehndi',{opacity:'0'});
		jarallax.setDefault('#collage',{opacity:'0'});
		jarallax.addAnimation('#face',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#mehndi',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#collage',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.setDefault('#madads',{opacity:'0'});
		jarallax.setDefault('#streetplay',{opacity:'0'});
		jarallax.addAnimation('#madads',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#streetplay',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		
		jarallax.setDefault('#kanquiz',{opacity:'0'});
		jarallax.setDefault('#kanjam',{opacity:'0'});
		jarallax.addAnimation('#kanquiz',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#kanjam',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		
		
		jarallax.setDefault('#debate',{opacity:'0'});
		jarallax.setDefault('#writing',{opacity:'0'});
		jarallax.setDefault('#potpry',{opacity:'0'});
		jarallax.setDefault('#aircrash',{opacity:'0'});
		jarallax.addAnimation('#debate',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#writing',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#potpry',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#aircrash',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.setDefault('#nfs',{opacity:'0'});
		jarallax.setDefault('#dota',{opacity:'0'});
		jarallax.setDefault('#fifa',{opacity:'0'});
		jarallax.setDefault('#counterstrike',{opacity:'0'});
		jarallax.addAnimation('#nfs',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#fifa',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#dota',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#counterstrike',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.setDefault('#ipl',{opacity:'0'});
		jarallax.setDefault('#hog',{opacity:'0'});
		jarallax.setDefault('#arm',{opacity:'0'});
		jarallax.setDefault('#onesip',{opacity:'0'});
		jarallax.setDefault('#dumb',{opacity:'0'});
		jarallax.setDefault('#slodrag',{opacity:'0'});
		jarallax.setDefault('#wild',{opacity:'0'});
		jarallax.addAnimation('#ipl',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#hog',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#arm',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#onesip',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#dumb',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#slodrag',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		jarallax.addAnimation('#wild',[{progress: '0%',display:'block',opacity:'0'},{progress: '44%',display:'block',opacity:'0'},{progress: '48%',display:'block',opacity:'1'},{progress: '53%',display:'block',opacity:'1'},{progress: '60%',display:'block',opacity:'0'},{progress: '73%',display:'block',opacity:'0'},{progress: '100%',display:'block',opacity:'0'}]);
		
		//animation for sports page elements
		jarallax.setDefault('#sport0', {left:"-545%"},{top:"-533%"},{opacity:'0'});
		jarallax.setDefault('#sport1', {left:"-545%"},{top:"-533%"},{opacity:'0'});
		jarallax.setDefault('#sport2', {left:"-545%"},{top:"-533%"},{opacity:'0'});
		jarallax.setDefault('#sport3', {left:"-545%"},{top:"-533%"},{opacity:'0'});
		jarallax.setDefault('#sport4', {left:"-545%"},{top:"-533%"},{opacity:'0'});
		jarallax.setDefault('#sport5', {left:"-545%"},{top:"-533%"},{opacity:'0'});
		jarallax.setDefault('#sport6', {left:"-545%"},{top:"-533%"},{opacity:'0'});
		
		jarallax.addAnimation('#sport0',[{progress: '0%', left:"-545%",top:"-533%",display:'block',opacity:'0'},{progress: '64%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '65%', left:"45%",top:"33%",display:'block',opacity:'0'},{progress: '68%',left:"45%",top:"33%",display:'block',opacity:'1'},{progress: '71%',left:"45%",top:"33%",display:'block',opacity:'1'},{progress: '80%', left:"45%",top:"33%",display:'block',opacity:'0'},{progress: '82%', left:"41%",top:"37%",display:'block',opacity:'0'},{progress: '83%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '100%', left:"-545%",top:"-533%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sport1',[{progress: '0%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '64%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '65%', left:"41%",top:"37%",display:'block',opacity:'0'},{progress: '68%',top:"6%", left:"2%",display:'block',opacity:'1'},{progress: '71%',top:"6%", left:"2%",display:'block',opacity:'1'},{progress: '80%', left:"41%",top:"37%",display:'block',opacity:'0'},{progress: '82%', left:"41%",top:"37%",display:'block',opacity:'0'},{progress: '83%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '100%', left:"-541%",top:"-537%",display:'block',opacity:'0'}]);	
		  
		jarallax.addAnimation('#sport2',[{progress: '0%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '64%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '65%', left:"41%",top:"37%",display:'block',opacity:'0'},{progress: '68%',top:"29%", left:"17%",display:'block',opacity:'1'},{progress: '71%',top:"29%", left:"17%",display:'block',opacity:'1'},{progress: '80%', left:"41%",top:"37%",display:'block',opacity:'1'},{progress: '82%', left:"41%",top:"37%",display:'block',opacity:'0'},{progress: '83%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '100%', left:"-541%",top:"-537%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sport3',[{progress: '0%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '64%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '65%', left:"41%",top:"37%",display:'block',opacity:'0'},{progress: '68%',top:"52%", left:"32%",display:'block',opacity:'1'},{progress: '71%',top:"52%", left:"32%",display:'block',opacity:'1'},{progress: '80%', left:"41%",top:"37%",display:'block',opacity:'1'},{progress: '82%', left:"41%",top:"37%",display:'block',opacity:'0'},{progress: '83%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '100%', left:"-41%",top:"-37%",display:'block',opacity:'0'}]);	  
		
		jarallax.addAnimation('#sport4',[{progress: '0%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '64%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '65%', left:"41%",top:"37%",display:'block',opacity:'0'},{progress: '68%',top:"52%", left:"51%",display:'block',opacity:'1'},{progress: '71%',top:"52%", left:"51%",display:'block',opacity:'1'},{progress: '80%', left:"41%",top:"37%",display:'block',opacity:'1'},{progress: '82%', left:"41%",top:"37%",display:'block',opacity:'0'},{progress: '83%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '100%', left:"-541%",top:"-537%",display:'block',opacity:'0'}]);
		
		
		jarallax.addAnimation('#sport5',[{progress: '0%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '64%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '65%', left:"41%",top:"37%",display:'block',opacity:'0'},{progress: '68%',top:"29%", left:"66%",display:'block',opacity:'1'},{progress: '71%',top:"29%", left:"66%",display:'block',opacity:'1'},{progress: '80%', left:"41%",top:"37%",display:'block',opacity:'1'},{progress: '82%', left:"41%",top:"37%",display:'block',opacity:'0'},{progress: '83%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '100%', left:"-541%",top:"-537%",display:'block',opacity:'0'}]);	
		
		jarallax.addAnimation('#sport6',[{progress: '0%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '64%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '65%',left:"41%",top:"37%",display:'block',opacity:'0'},{progress: '68%', top:"6%", left:"81%",display:'block',opacity:'1'},{progress: '71%', top:"6%", left:"81%",display:'block',opacity:'1'},{progress: '80%',left:"41%",top:"37%",display:'block',opacity:'1'},{progress: '82%',left:"41%",top:"37%",display:'block',opacity:'0'},{progress: '83%', left:"-541%",top:"-537%",display:'block',opacity:'0'},{progress: '100%', left:"-541%",top:"-537%",display:'block',opacity:'0'}]);
		
		
		jarallax.setDefault('#sponsors',{opacity:'0'});
		jarallax.setDefault('#spon1', {opacity:'0'});
		jarallax.setDefault('#spon2', {opacity:'0'});
		jarallax.setDefault('#spon3', {opacity:'0'});
		jarallax.setDefault('#spon4', {opacity:'0'});
		jarallax.setDefault('#spon5', {opacity:'0'});
		jarallax.setDefault('#spon6', {opacity:'0'});
		jarallax.setDefault('#spon7', {opacity:'0'});
		jarallax.setDefault('#spon8', {opacity:'0'});
		
		jarallax.addAnimation('#sponsors',[{progress: '0%',opacity:'0'},{progress: '64%',opacity:'0'},{progress: '65%',opacity:'0'},{progress: '68%',opacity:'0'},{progress: '71%',opacity:'0'},{progress: '80%',opacity:'0'},{progress: '82%',opacity:'1'},{progress: '93%',opacity:'1'},{progress: '95%',opacity:'0'},{progress: '100%',opacity:'0'}]);
		jarallax.addAnimation('#spon1',[{progress: '0%',opacity:'0'},{progress: '64%',opacity:'0'},{progress: '65%',opacity:'0'},{progress: '68%',opacity:'0'},{progress: '71%',opacity:'0'},{progress: '80%',opacity:'0'},{progress: '82%',opacity:'1'},{progress: '93%',opacity:'1'},{progress: '95%',opacity:'0'},{progress: '100%',opacity:'0'}]);
		jarallax.addAnimation('#spon2',[{progress: '0%',opacity:'0'},{progress: '64%',opacity:'0'},{progress: '65%',opacity:'0'},{progress: '68%',opacity:'0'},{progress: '71%',opacity:'0'},{progress: '80%',opacity:'0'},{progress: '82%',opacity:'1'},{progress: '93%',opacity:'1'},{progress: '95%',opacity:'0'},{progress: '100%',opacity:'0'}]);
		jarallax.addAnimation('#spon3',[{progress: '0%',opacity:'0'},{progress: '64%',opacity:'0'},{progress: '65%',opacity:'0'},{progress: '68%',opacity:'0'},{progress: '71%',opacity:'0'},{progress: '80%',opacity:'0'},{progress: '82%',opacity:'1'},{progress: '93%',opacity:'1'},{progress: '95%',opacity:'0'},{progress: '100%',opacity:'0'}]);
		jarallax.addAnimation('#spon4',[{progress: '0%',opacity:'0'},{progress: '64%',opacity:'0'},{progress: '65%',opacity:'0'},{progress: '68%',opacity:'0'},{progress: '71%',opacity:'0'},{progress: '80%',opacity:'0'},{progress: '82%',opacity:'1'},{progress: '93%',opacity:'1'},{progress: '95%',opacity:'0'},{progress: '100%',opacity:'0'}]);
		jarallax.addAnimation('#spon5',[{progress: '0%',opacity:'0'},{progress: '64%',opacity:'0'},{progress: '65%',opacity:'0'},{progress: '68%',opacity:'0'},{progress: '71%',opacity:'0'},{progress: '80%',opacity:'0'},{progress: '82%',opacity:'1'},{progress: '93%',opacity:'1'},{progress: '95%',opacity:'0'},{progress: '100%',opacity:'0'}]);
		jarallax.addAnimation('#spon6',[{progress: '0%',opacity:'0'},{progress: '64%',opacity:'0'},{progress: '65%',opacity:'0'},{progress: '68%',opacity:'0'},{progress: '71%',opacity:'0'},{progress: '80%',opacity:'0'},{progress: '82%',opacity:'1'},{progress: '93%',opacity:'1'},{progress: '95%',opacity:'0'},{progress: '100%',opacity:'0'}]);
		jarallax.addAnimation('#spon7',[{progress: '0%',opacity:'0'},{progress: '64%',opacity:'0'},{progress: '65%',opacity:'0'},{progress: '68%',opacity:'0'},{progress: '71%',opacity:'0'},{progress: '80%',opacity:'0'},{progress: '82%',opacity:'1'},{progress: '93%',opacity:'1'},{progress: '95%',opacity:'0'},{progress: '100%',opacity:'0'}]);
		jarallax.addAnimation('#spon8',[{progress: '0%',opacity:'0'},{progress: '64%',opacity:'0'},{progress: '65%',opacity:'0'},{progress: '68%',opacity:'0'},{progress: '71%',opacity:'0'},{progress: '80%',opacity:'0'},{progress: '82%',opacity:'1'},{progress: '93%',opacity:'1'},{progress: '95%',opacity:'0'},{progress: '100%',opacity:'0'}]);
		/*jarallax.setDefault('#sheild',{opacity:'0'});
		jarallax.setDefault('#sheild1', {top:"0%"},{opacity:'0'},{left:'0%'});
		jarallax.setDefault('#sheild2', {top:"0%"},{opacity:'0'},{left:'0%'});
		jarallax.setDefault('#sheild3', {top:"0%"},{opacity:'0'},{left:'0%'});
		jarallax.setDefault('#sheild4', {top:"0%"},{opacity:'0'},{left:'0%'});
		jarallax.setDefault('#sheild5', {top:"0%"},{opacity:'0'},{left:'0%'});
		jarallax.setDefault('#sheild6', {top:"0%"},{opacity:'0'},{left:'0%'});
		jarallax.setDefault('#sheild7', {top:"0%"},{opacity:'0'},{left:'0%'});
		jarallax.addAnimation('#sheild',[{progress: '0%', top:"40px",display:'block',opacity:'0'},{progress: '40%', top:"40px",display:'block',opacity:'0'},{progress: '44%', top:"40px",display:'block',opacity:'1'},{progress: '45%', top:"40px", display:'block',opacity:'0'},{progress: '60%', top:"40px",display:'block',opacity:'0'},{progress: '73%', top:"40px",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sheild1',[{progress: '0%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '43%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '44%', top:"0%", left:"0%",display:'block',opacity:'0'},{progress: '45%', top:"0%", left:"40%",display:'block',opacity:'1'},{progress: '60%', top:"0%",left:"40%",display:'block',opacity:'1'},{progress: '73%', top:"0%",left:"0%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sheild2',[{progress: '0%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '43%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '44%', top:"0%", left:"0%",display:'block',opacity:'0'},{progress: '45%', top:"0%", left:"-40%",display:'block',opacity:'1'},{progress: '60%', top:"0%",left:"-40%",display:'block',opacity:'1'},{progress: '73%', top:"0%",left:"0%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sheild3',[{progress: '0%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '43%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '44%', top:"0%", left:"0%",display:'block',opacity:'1'},{progress: '45%', top:"-20%", left:"0%",display:'block',opacity:'1'},{progress: '60%', top:"-20%",left:"0%",display:'block',opacity:'1'},{progress: '73%', top:"0%",left:"0%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sheild4',[{progress: '0%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '43%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '44%', top:"0%", left:"0%",display:'block',opacity:'0'},{progress: '45%', top:"40%", left:"-40%",display:'block',opacity:'1'},{progress: '60%', top:"40%",left:"-40%",display:'block',opacity:'1'},{progress: '73%', top:"0%",left:"0%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sheild6',[{progress: '0%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '43%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '44%', top:"0%", left:"0%",display:'block',opacity:'0'},{progress: '45%', top:"60%", left:"0%",display:'block',opacity:'1'},{progress: '60%', top:"60%",left:"0%",display:'block',opacity:'1'},{progress: '73%', top:"0%",left:"0%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sheild5',[{progress: '0%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '43%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '44%', top:"0%", left:"0%",display:'block',opacity:'0'},{progress: '45%', top:"40%", left:"40%",display:'block',opacity:'1'},{progress: '60%', top:"40%",left:"40%",display:'block',opacity:'1'},{progress: '73%', top:"0%",left:"0%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sheild7',[{progress: '0%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '43%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '44%', top:"0%", left:"0%",display:'block',opacity:'0'},{progress: '45%', top:"20%", left:"0%",display:'block',opacity:'1'},{progress: '60%', top:"20%",left:"0%",display:'block',opacity:'1'},{progress: '73%', top:"0%",left:"0%",display:'block',opacity:'0'}]);*/
		
		//sheild animation
		jarallax.setDefault('#sheild',{opacity:'0'});
		jarallax.setDefault('#sheild1', {top:"0%"},{opacity:'0'},{left:'0%'});
		jarallax.setDefault('#sheild2', {top:"0%"},{opacity:'0'},{left:'0%'});
		jarallax.setDefault('#sheild3', {top:"0%"},{opacity:'0'},{left:'0%'});
		jarallax.setDefault('#sheild4', {top:"0%"},{opacity:'0'},{left:'0%'});
		jarallax.setDefault('#sheild5', {top:"0%"},{opacity:'0'},{left:'0%'});
		jarallax.setDefault('#sheild6', {top:"0%"},{opacity:'0'},{left:'0%'});
		jarallax.setDefault('#sheild7', {top:"0%"},{opacity:'0'},{left:'0%'});
		jarallax.addAnimation('#sheild',[{progress: '0%', top:"40px",display:'block',opacity:'0'},{progress: '40%', top:"40px",display:'block',opacity:'0'},{progress: '44%', top:"40px",display:'block',opacity:'1'},{progress: '45%', top:"40px", display:'block',opacity:'0'},{progress: '60%', top:"1040px",display:'block',opacity:'0'},{progress: '100%', top:"1040px",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sheild1',[{progress: '0%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '43%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '44%', top:"0%", left:"0%",display:'block',opacity:'0'},{progress: '46%', top:"0%", left:"50%",display:'block',opacity:'1'},{progress: '60%', top:"0%",left:"50%",display:'block',opacity:'1'},{progress: '63%', top:"-100%",left:"0%",display:'block',opacity:'0'},{progress: '100%', top:"-100%",left:"0%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sheild2',[{progress: '0%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '43%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '44%', top:"0%", left:"0%",display:'block',opacity:'0'},{progress: '46%', top:"0%", left:"-50%",display:'block',opacity:'1'},{progress: '60%', top:"0%",left:"-50%",display:'block',opacity:'1'},{progress: '63%', top:"-100%",left:"0%",display:'block',opacity:'0'},{progress: '100%', top:"0%",left:"0%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sheild3',[{progress: '0%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '43%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '44%', top:"0%", left:"0%",display:'block',opacity:'0'},{progress: '46%', top:"-30%", left:"0%",display:'block',opacity:'1'},{progress: '60%', top:"-30%",left:"0%",display:'block',opacity:'1'},{progress: '63%', top:"-90%",left:"0%",display:'block',opacity:'0'},{progress: '100%', top:"-90%",left:"0%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sheild4',[{progress: '0%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '43%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '44%', top:"0%", left:"0%",display:'block',opacity:'0'},{progress: '46%', top:"50%", left:"-50%",display:'block',opacity:'1'},{progress: '60%', top:"50%",left:"-50%",display:'block',opacity:'1'},{progress: '63%', top:"-60%",left:"0%",display:'block',opacity:'0'},{progress: '100%', top:"-60%",left:"0%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sheild6',[{progress: '0%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '43%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '44%', top:"0%", left:"0%",display:'block',opacity:'0'},{progress: '46%', top:"65%", left:"0%",display:'block',opacity:'1'},{progress: '60%', top:"65%",left:"0%",display:'block',opacity:'1'},{progress: '63%', top:"-70%",left:"0%",display:'block',opacity:'0'},{progress: '100%', top:"-70%",left:"0%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sheild5',[{progress: '0%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '43%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '44%', top:"0%", left:"0%",display:'block',opacity:'0'},{progress: '46%', top:"50%", left:"50%",display:'block',opacity:'1'},{progress: '60%', top:"50%",left:"50%",display:'block',opacity:'1'},{progress: '63%', top:"-60%",left:"0%",display:'block',opacity:'0'},{progress: '100%', top:"-60%",left:"0%",display:'block',opacity:'0'}]);
		
		jarallax.addAnimation('#sheild7',[{progress: '0%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '43%', top:"0%",left:"0%",display:'block',opacity:'0'},{progress: '44%', top:"0%", left:"0%",display:'block',opacity:'0'},{progress: '45%', top:"20%", left:"0%",display:'block',opacity:'1'},{progress: '46%', top:"20%", left:"0%",display:'block',opacity:'0'},{progress: '60%', top:"20%",left:"0%",display:'block',opacity:'0'},{progress: '63%', top:"-200%",left:"0%",display:'block',opacity:'0'},{progress: '100%', top:"0%",left:"-100%",display:'block',opacity:'0'}]);
		
		
		
		//header locator
		
		
		
		
		
		
		//technical page elements animation
		jarallax.setDefault('.tech1', {left:"-39%"},{top:"-37"},{opacity:'0'});
		jarallax.setDefault('.tech2', {left:"-39%"},{top:"-37"},{opacity:'0'});
		jarallax.setDefault('.tech3', {left:"-39%"},{top:"-37"},{opacity:'0'});
		jarallax.setDefault('.tech4', {left:"-39%"},{top:"-37"},{opacity:'0'});
		jarallax.setDefault('.tech5', {left:"-39%"},{top:"-37"},{opacity:'0'});
		jarallax.setDefault('.tech6', {left:"-39%"},{top:"-37"},{opacity:'0'});
		jarallax.setDefault('.tech7', {left:"-39%"},{top:"-37"},{opacity:'0'});
		jarallax.setDefault('.tech8', {left:"-39%"},{top:"-37"},{opacity:'0'});
		jarallax.setDefault('.tech9', {left:"-39%"},{top:"-37"},{opacity:'0'});
		jarallax.setDefault('.tech10', {left:"-39%"},{top:"-37"},{opacity:'0'});
		jarallax.setDefault('.tech11', {left:"-39%"},{top:"-37"},{opacity:'0'});
		
		
		
		jarallax.addAnimation('.tech1',[{progress: '0%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '24%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '25%',opacity:'0', top:"37%",left:"39%",display:'block'},/*{progress: '24%',opacity:'1', top:"37%",left:"39%",display:'block'},*/{progress: '26%',top:"25%", left:"5%",opacity:'1',display:'block'},{progress: '35%',top:"25%", left:"5%",opacity:'1',display:'block'},{progress: '40%', top:"-30%",left:"-30%",opacity:'1',display:'block'},{progress: '100%', top:"-30%",left:"-30%",display:'block',opacity:'1'}]);
			  
		jarallax.addAnimation('.tech2',[{progress: '0%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '24%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '25%',opacity:'0', top:"37%",left:"39%",display:'block'},/*{progress: '24%',opacity:'1', top:"37%",left:"39%",display:'block'},*/{progress: '26%',opacity:'1',top:"25%", left:"36%",opacity:'1',display:'block'},{progress: '35%',top:"25%", left:"36%",opacity:'1',display:'block'},{progress: '40%', top:"-50%",opacity:'1',display:'block'},{progress: '100%', top:"-50%",display:'block',opacity:'1'}]);
		
		jarallax.addAnimation('.tech9',[{progress: '0%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '24%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '25%',opacity:'0', top:"37%",left:"39%",display:'block'},/*{progress: '24%',opacity:'1', top:"37%",left:"39%",display:'block'},*/{progress: '26%',opacity:'1',top:"25%", left:"51%",opacity:'1',display:'block'},{progress: '35%',top:"25%", left:"51%",opacity:'1',display:'block'},{progress: '40%', top:"-50%",opacity:'1',display:'block'},{progress: '100%', top:"-50%",display:'block',opacity:'1'}]);
		
		jarallax.addAnimation('.tech3',[{progress: '0%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '24%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '25%',opacity:'0', top:"37%",left:"39%",display:'block'},/*{progress: '24%',opacity:'1', top:"37%",left:"39%",display:'block'},*/{progress: '26%',top:"25%", left:"67%",opacity:'1',display:'block'},{progress: '35%',top:"25%", left:"67%",opacity:'1',display:'block'},{progress: '40%', top:"-30%",left:"150%",opacity:'1',display:'block'},{progress: '100%',left:"150%",display:'block',opacity:'1'}]);
			  
		
		jarallax.addAnimation('.tech5',[{progress: '0%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '24%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '25%',opacity:'0', top:"37%",left:"39%",display:'block'},/*{progress: '24%',opacity:'1', top:"37%",left:"39%",display:'block'},*/{progress: '26%',top:"50%", left:"5%",opacity:'1',display:'block'},{progress: '35%',top:"50%", left:"5%",opacity:'1',display:'block'},{progress: '40%',top:"130%",opacity:'1',display:'block'},{progress: '100%',left:"-30%",display:'block',opacity:'1'}]);
		
		jarallax.addAnimation('.tech6',[{progress: '0%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '24%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '25%',opacity:'0', top:"37%",left:"39%",display:'block'},/*{progress: '24%',opacity:'1', top:"37%",left:"39%",display:'block'},*/{progress: '26%',top:"50%", left:"20%",opacity:'1',display:'block'},{progress: '35%',top:"50%", left:"20%",opacity:'1',display:'block'},{progress: '40%', top:"130%",opacity:'1',display:'block'},{progress: '100%', top:"130%",display:'block',opacity:'1'}]);
		
		jarallax.addAnimation('.tech7',[{progress: '0%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '24%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '25%',opacity:'0', top:"37%",left:"39%",display:'block'},/*{progress: '24%',opacity:'1', top:"37%",left:"39%",display:'block'},*/{progress: '26%',top:"50%", left:"36%",opacity:'1',display:'block'},{progress: '35%',top:"50%", left:"36%",opacity:'1',display:'block'},{progress: '40%', top:"130%",left:"150%",opacity:'1',display:'block'},{progress: '100%',left:"-50%",display:'block',opacity:'1'}]);
		
		jarallax.addAnimation('.tech4',[{progress: '0%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '24%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '25%',opacity:'0', top:"37%",left:"39%",display:'block'},/*{progress: '24%',opacity:'1', top:"37%",left:"39%",display:'block'},*/{progress: '26%',top:"75%", left:"5%",opacity:'1',display:'block'},{progress: '35%',top:"75%", left:"5%",opacity:'1',display:'block'},{progress: '40%',left:"250%",opacity:'1',display:'block'},{progress: '100%',left:"250%",display:'block',opacity:'1'}]);	
		
		
		jarallax.addAnimation('.tech8',[{progress: '0%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '24%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '25%',opacity:'0', top:"37%",left:"39%",display:'block'},/*{progress: '24%',opacity:'1', top:"37%",left:"39%",display:'block'},*/{progress: '26%',top:"75%", left:"36%",opacity:'1',display:'block'},{progress: '35%',top:"75%", left:"36%",opacity:'1',display:'block'},{progress: '40%',top:"130%",left:"-50%",opacity:'1',display:'block'},{progress: '100%',left:"250%",display:'block',opacity:'1'}]);
		
		jarallax.addAnimation('.tech10',[{progress: '0%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '24%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '25%',opacity:'0', top:"37%",left:"39%",display:'block'},/*{progress: '24%',opacity:'1', top:"37%",left:"39%",display:'block'},*/{progress: '26%',top:"75%", left:"67%",opacity:'1',display:'block'},{progress: '35%',top:"75%", left:"67%",opacity:'1',display:'block'},{progress: '40%',top:"130%",left:"-50%",opacity:'1',display:'block'},{progress: '100%',left:"250%",display:'block',opacity:'1'}]);
		
		jarallax.addAnimation('.tech11',[{progress: '0%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '24%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '25%',opacity:'0', top:"37%",left:"39%",display:'block'},/*{progress: '24%',opacity:'1', top:"37%",left:"39%",display:'block'},*/{progress: '26%',top:"75%", left:"82%",opacity:'1',display:'block'},{progress: '35%',top:"75%", left:"82%",opacity:'1',display:'block'},{progress: '40%',top:"130%",left:"-50%",opacity:'1',display:'block'},{progress: '100%',left:"250%",display:'block',opacity:'1'}]);
		
		jarallax.addAnimation('.tech12',[{progress: '0%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '24%',opacity:'0', top:"-38%",left:"-39%",display:'block'},{progress: '25%',opacity:'0', top:"37%",left:"39%",display:'block'},/*{progress: '24%',opacity:'1', top:"37%",left:"39%",display:'block'},*/{progress: '26%',top:"25%", left:"36%",opacity:'1',display:'block'},{progress: '35%',top:"25%", left:"36%",opacity:'1',display:'block'},{progress: '40%',top:"130%",left:"-50%",opacity:'1',display:'block'},{progress: '100%',left:"250%",display:'block',opacity:'1'}]);

jarallax.setDefault('#hlogo', {height:"360px"},{opacity:'1'},{top:'200px'});	
jarallax.setDefault('#log', {height:"360px"},{opacity:'1'});
	
jarallax.addAnimation('#log',[{progress:'0%', height:'360px',opacity:'1'},{progress:'7%', height:'300px',opacity:'1'},{progress:'10%', height:'210px',opacity:'1'},{progress:'12%', height:'140px',opacity:'1'},{progress:'35%',height:'140px',opacity:'1'},{progress:'42%',height:'360px',opacity:'1'},{progress:'53%',height:'360px',opacity:'1'},{progress:'55%', height:'140px',opacity:'1'},{progress:'100%', height:'140px',opacity:'0.4'}]);

jarallax.addAnimation('#hlogo',[{progress:'0%', height:'360px',top:'200px',opacity:'1'},{progress:'7%', height:'300px',top:'150px',opacity:'1'},{progress:'10%', height:'210px',top:'50px',opacity:'1'},{progress:'12%', height:'140px',top:'30px',opacity:'1'},{progress:'35%',height:'140px',top:'30px',opacity:'1'},{progress:'42%', height:'300px',top:'160px',opacity:'1'},{progress:'45%', height:'140px',top:'150px',opacity:'1'},{progress:'55%', height:'140px',top:'150px',opacity:'1'},{progress:'65%', height:'140px',top:'30px',opacity:'1'},{progress:'100%', height:'140px',top:'30px',opacity:'0.4'}]);
/*jarallax.setDefault('#gods', {bottom:"0px"},{left:'1100px'});
jarallax.setDefault('#god2', {bottom:"0px"},{left:'-40px'});
jarallax.setDefault('#god3', {bottom:"400px"},{left:'250px'},{opacity:'1'});

jarallax.setDefault('#demons', {bottom:"60px"},{left:'900px'});	
jarallax.setDefault('#demon2', {bottom:"-40px"},{left:'890px'});
jarallax.setDefault('#demon3', {bottom:"420px"},{left:'830px'},{opacity:'1'});

jarallax.addAnimation('#gods',[{progress:'0%', bottom:'0px',left:'110px'},{progress:'7%', bottom:'0px',left:'90px'},{progress:'12%',bottom:'0px',left:'60px'},{progress:'21%',bottom:'0px',left:'90px'},{progress:'100%',left:'-900px', bottom:'0px'}]);
jarallax.addAnimation('#god2',[{progress:'0%', bottom:'0px',left:'-40px'},{progress:'7%', bottom:'0px',left:'-90px'},{progress:'12%',bottom:'0px',left:'-180px'},{progress:'21%',bottom:'0px',left:'-210px'},{progress:'100%',left:'-900px', bottom:'0px'}]);
jarallax.addAnimation('#god3',[{progress:'0%', bottom:'400px',left:'250px',opacity:'1'},{progress:'7%', bottom:'400px',left:'290px',opacity:'1'},{progress:'12%',bottom:'400px',left:'380px',opacity:'1'},{progress:'21%',bottom:'400px',left:'550px',opacity:'1'},{progress:'100%', bottom:'400px',opacity:'0'}]);



jarallax.addAnimation('#demons',[{progress:'0%', bottom:'60px',left:'900px'},{progress:'7%',bottom:'60px',left:'950px'},{progress:'12%',bottom:'60px',left:'1140px'},{progress:'21%', bottom:'60px',left:'9000px'},{progress:'100%', bottom:'60px',left:'9000px'}]);
jarallax.addAnimation('#demon2',[{progress:'0%', bottom:'-40px',left:'890px'},{progress:'7%',bottom:'-40px',left:'910px'},{progress:'12%',bottom:'-40px',left:'940px'},{progress:'21%', bottom:'-40px',left:'970px'},{progress:'100%', bottom:'-40px',left:'9000px'}]);
jarallax.addAnimation('#demon3',[{progress:'0%', bottom:'420px',left:'830px',opacity:'1'},{progress:'7%',bottom:'420px',left:'790px',opacity:'1'},{progress:'12%',bottom:'420px',left:'650px',opacity:'1'},{progress:'21%', bottom:'420px',left:'650px',opacity:'1'},{progress:'100%', bottom:'420px',opacity:'0'}]);

jarallax.setDefault('#phoenix', {height:"160px"});	
jarallax.addAnimation('#phoenix',[{progress:'0%', height:'160px'},{progress:'7%', height:'150px'},{progress:'12%', height:'130px'},{progress:'21%', height:'120px'},{progress:'40%',height:'30px'},{progress:'46%', height:'1px'},{progress:'100%', height:'0px'}]);

jarallax.setDefault('#deathwing', {height:"160px"});	
jarallax.addAnimation('#deathwing',[{progress:'0%', height:'160px'},{progress:'7%', height:'130px'},{progress:'12%', height:'120px'},{progress:'21%', height:'110px'},{progress:'40%',height:'30px'},{progress:'46%', height:'1px'},{progress:'100%', height:'0px'}]);
*/





				}
				</script>
                <script type="text/javascript">
		//cultural page parent child visibility		
		shodiv2=function()
		{	
			dance.style.visibility='hidden' ;
			arts.style.visibility='hidden' ;
			theatre.style.visibility='hidden' ;
			literary.style.visibility='hidden' ;
			games.style.visibility='hidden' ;
			informal.style.visibility='hidden' ;
			kannada.style.visibility='hidden' ;
			
			eastsolo.style.visibility='visible' ;
			bob.style.visibility='visible' ;
			classolo.style.visibility='visible' ;
			westsolo.style.visibility='visible' ;
			acc.style.visibility='visible' ;
			}
			shodiv2t=function()
		{	
			dance.style.visibility='visible' ;
			arts.style.visibility='visible';
			theatre.style.visibility='visible' ;
			literary.style.visibility='visible' ;
			games.style.visibility='visible' ;
			informal.style.visibility='visible' ;
			kannada.style.visibility='visible' ;
			
			eastsolo.style.visibility='hidden';
			bob.style.visibility='hidden' ;
			classolo.style.visibility='hidden';
			westsolo.style.visibility='hidden' ;
			acc.style.visibility='hidden' ;
			}
			
			shodiv1=function(){
				music.style.visibility='hidden' ;
				arts.style.visibility='hidden' ;
				theatre.style.visibility='hidden' ;
				literary.style.visibility='hidden' ;
				games.style.visibility='hidden' ;
				informal.style.visibility='hidden' ;
				kannada.style.visibility='hidden' ;
				
				dancon.style.visibility='visible' ;
				danduet.style.visibility='visible' ;
				dansolo.style.visibility='visible' ;
				danwest.style.visibility='visible' ;
				
				}
				shodiv1t=function(){
				music.style.visibility='visible' ;
				arts.style.visibility='visible';
				theatre.style.visibility='visible' ;
				literary.style.visibility='visible' ;
				games.style.visibility='visible' ;
				informal.style.visibility='visible' ;
				kannada.style.visibility='visible' ;
				
				dancon.style.visibility='hidden' ;
				danduet.style.visibility='hidden' ;
				dansolo.style.visibility='hidden' ;
				danwest.style.visibility='hidden' ;
				
				}
				
			shodiv3=function(){
				dance.style.visibility='hidden' ;
				music.style.visibility='hidden' ;
				theatre.style.visibility='hidden' ;
				literary.style.visibility='hidden' ;
				games.style.visibility='hidden' ;
				informal.style.visibility='hidden' ;
				kannada.style.visibility='hidden' ;
				
				collage.style.visibility='visible' ;
				mehndi.style.visibility='visible' ;
				face.style.visibility='visible' ;
				}
				shodiv3t=function(){
				dance.style.visibility='visible' ;
				music.style.visibility='visible' ;
				theatre.style.visibility='visible' ;
				literary.style.visibility='visible' ;
				games.style.visibility='visible';
				informal.style.visibility='visible' ;
				kannada.style.visibility='visible' ;
				
				collage.style.visibility='hidden' ;
				mehndi.style.visibility='hidden' ;
				face.style.visibility='hidden' ;
				}
				
			shodiv4=function(){
				dance.style.visibility='hidden' ;
				arts.style.visibility='hidden' ;
				music.style.visibility='hidden' ;
				literary.style.visibility='hidden' ;
				games.style.visibility='hidden' ;
				informal.style.visibility='hidden' ;
				kannada.style.visibility='hidden' ;
				
				madads.style.visibility='visible' ;
				streetplay.style.visibility='visible' ;
				}
			shodiv4t=function(){
				dance.style.visibility='visible';
				arts.style.visibility='visible' ;
				music.style.visibility='visible' ;
				literary.style.visibility='visible' ;
				games.style.visibility='visible' ;
				informal.style.visibility='visible' ;
				kannada.style.visibility='visible' ;
				
				madads.style.visibility='hidden' ;
				streetplay.style.visibility='hidden' ;
				}
				
				shodiv8=function(){
				dance.style.visibility='hidden' ;
				arts.style.visibility='hidden' ;
				music.style.visibility='hidden' ;
				literary.style.visibility='hidden' ;
				games.style.visibility='hidden' ;
				informal.style.visibility='hidden' ;
				theatre.style.visibility='hidden' ;
				
				kanjam.style.visibility='visible' ;
				kanquiz.style.visibility='visible' ;
				}
				shodiv8t=function(){
				dance.style.visibility='visible';
				arts.style.visibility='visible' ;
				music.style.visibility='visible' ;
				literary.style.visibility='visible' ;
				games.style.visibility='visible' ;
				informal.style.visibility='visible' ;
				theatre.style.visibility='visible' ;
				
				kanjam.style.visibility='hidden' ;
				kanquiz.style.visibility='hidden' ;
				}
				
			shodiv5=function(){
				dance.style.visibility='hidden' ;
				arts.style.visibility='hidden' ;
				theatre.style.visibility='hidden' ;
				music.style.visibility='hidden' ;
				games.style.visibility='hidden' ;
				informal.style.visibility='hidden' ;
				kannada.style.visibility='hidden' ;
				
				
				aircrash.style.visibility='visible' ;
				potpry.style.visibility='visible' ;
				debate.style.visibility='visible' ;
				writing.style.visibility='visible' ;
				}
				
				shodiv5t=function(){
				dance.style.visibility='visible' ;
				arts.style.visibility='visible' ;
				theatre.style.visibility='visible' ;
				music.style.visibility='visible' ;
				games.style.visibility='visible' ;
				informal.style.visibility='visible' ;
				kannada.style.visibility='visible' ;
				
				aircrash.style.visibility='hidden' ;
				potpry.style.visibility='hidden' ;
				debate.style.visibility='hidden' ;
				writing.style.visibility='hidden' ;
				}
			shodiv6=function(){
				dance.style.visibility='hidden' ;
				arts.style.visibility='hidden' ;
				theatre.style.visibility='hidden' ;
				literary.style.visibility='hidden' ;
				music.style.visibility='hidden' ;
				informal.style.visibility='hidden' ;
				kannada.style.visibility='hidden' ;
				
				nfs.style.visibility='visible' ;
				dota.style.visibility='visible' ;
				fifa.style.visibility='visible' ;
				counterstrike.style.visibility='visible' ;
				}
				shodiv6t=function(){
				dance.style.visibility='visible' ;
				arts.style.visibility='visible' ;
				theatre.style.visibility='visible' ;
				literary.style.visibility='visible' ;
				music.style.visibility='visible' ;
				informal.style.visibility='visible' ;
				kannada.style.visibility='visible' ;
				
				nfs.style.visibility='hidden' ;
				dota.style.visibility='hidden' ;
				fifa.style.visibility='hidden' ;
				counterstrike.style.visibility='hidden' ;
				}
				
			shodiv7=function(){
				dance.style.visibility='hidden' ;
				arts.style.visibility='hidden' ;
				theatre.style.visibility='hidden' ;
				literary.style.visibility='hidden' ;
				games.style.visibility='hidden' ;
				music.style.visibility='hidden' ;
				kannada.style.visibility='hidden' ;
				
				wild.style.visibility='visible' ;
				slodrag.style.visibility='visible' ;
				dumb.style.visibility='visible' ;
				arm.style.visibility='visible' ;
				hog.style.visibility='visible' ;
				onesip.style.visibility='visible' ;
				ipl.style.visibility='visible' ;
				}
				shodiv7t=function(){
				dance.style.visibility='visible' ;
				arts.style.visibility='visible' ;
				theatre.style.visibility='visible' ;
				literary.style.visibility='visible' ;
				games.style.visibility='visible' ;
				music.style.visibility='visible' ;
				kannada.style.visibility='visible' ;
				
				wild.style.visibility='hidden' ;
				slodrag.style.visibility='hidden' ;
				dumb.style.visibility='hidden' ;
				arm.style.visibility='hidden' ;
				hog.style.visibility='hidden' ;
				onesip.style.visibility='hidden' ;
				ipl.style.visibility='hidden' ;
				}
				
 
    
		</script>	
        <script type="text/javascript">
			//navigation bar
			/*jump1=function()
			{
				$('html,body').animate({ scrollTop: $('#tech').offset().top }, 'slow');
			}
			jump2=function()
			{
				$('html,body').animate({ scrollTop: $('.tech9').offset().top }, 'slow');
			}
			jump3=function()
			{
				$('html,body').animate({ scrollTop: $('#t03').offset().top }, 'slow');
			}
			jump4=function()
			{
				$('html,body').animate({ scrollTop: $('#t04').offset().top }, 'slow');
			}
			jump5=function()
			{
				$('html,body').animate({ scrollTop: $('#bit').offset().top }, 'slow');
			}*/
			function pageScroll0() {
				window.scrollTo(0,0);
    			 // horizontal and vertical scroll increments
    		}
			function pageScroll() {
				window.scrollTo(0,0);
    			window.scrollBy(0,1800); // horizontal and vertical scroll increments
    		}
			function pageScroll2() {
				window.scrollTo(0,0);
    			window.scrollBy(0,2800); // horizontal and vertical scroll increments
    		}
			function pageScroll3() {
				window.scrollTo(0,0);
    			window.scrollBy(0,4800); // horizontal and vertical scroll increments
    		}
			function pageScroll4() {
				window.scrollTo(0,0);
    			window.scrollBy(0,6600); // horizontal and vertical scroll increments
    		}
			function pageScroll5() {
				window.scrollTo(0,0);
    			window.scrollBy(0,9520); // horizontal and vertical scroll increments
    		}
			function pageScroll6() {
				window.scrollTo(0,0);
    			window.scrollBy(0,8520); // horizontal and vertical scroll increments
    		}
			
		</script>
        
         
</head>
<body >
<!--Pre load page-->
	<div id="loader">
    <img src="assets/Manthanlogo.png" alt="logo" width="200px" height="200px"/><br />
    <span id="welcome">Thank You for making Manthan 2014 a Grand Success !</span><br />
    <div id="holder" >
	<div id="timer">
		<div id="note"></div>
		<div id="countdown">
			<img height=21 src="digital-numbers/bkgd.gif" width=16 name="day1">
			<img height=21 src="digital-numbers/bkgd.gif" width=16 name="day2">
			<img height=21 src="digital-numbers/bkgd.gif" width=16 name="day3">
			<img height=21 id="colon1" src="digital-numbers/colon.png" width=9 name="d1">
			<img height=21 src="digital-numbers/bkgd.gif" width=16 name="h1">
			<img height=21 src="digital-numbers/bkgd.gif" width=16 name="h2">
			<img height=21 id="colon2" src="digital-numbers/colon.png" width=9 name="g1">
			<img height=21 src="digital-numbers/bkgd.gif" width=16 name="m1">
			<img height=21 src="digital-numbers/bkgd.gif" width=16 name="m2">
			<img height=21 id="colon3" src="digital-numbers/colon.png" width=9 name="j1">
			<img height=21 src="digital-numbers/bkgd.gif" width=16 name="s1">
			<img height=21 src="digital-numbers/bkgd.gif" width=16 name="s2">
			<div id="title">
				<div class="title" style="position: absolute; top: 36px; left: 42px">DAYS</div>
				<div class="title" style="position: absolute; top: 36px; left: 105px">HRS</div>
				<div class="title" style="position: absolute; top: 36px; left: 156px">MIN</div>
				<div class="title" style="position: absolute; top: 36px; left: 211px">SEC</div>
			</div>
		</div>
	</div>
</div><br /><br />
<span id = "preloadtext"></span>
<div id="loading">
		<div id="block_1" class="barlittle"></div>
		<div id="block_2" class="barlittle"></div>
		<div id="block_3" class="barlittle"></div>
		<div id="block_4" class="barlittle"></div>
		<div id="block_5" class="barlittle"></div>
</div><br />

<div id="entry">Enter</div>
         
	</div>
	<div id = "pagecontent">
	<div id="header">
	<div>
		<div id="logo"><a href="javascript:pageScroll0()">Manthan 2014</a></div>
        
        
		<div id="nav">
    		<ul>
    			<li><a href="javascript:pageScroll()"    >Star Event</a></li>
    			<li><a href="javascript:pageScroll2()"  >Technical</a></li>
    			<li><a href="javascript:pageScroll3()"  >Cultural</a></li>
    			<li><a href="javascript:pageScroll4()"  >Sports</a></li>
                <li><a href="javascript:pageScroll6()"  >Sponsors</a></li>
    			<li><a href="javascript:pageScroll5()"   >Contact Us</a></li>
    	   </ul>
		</div>
	</div>
	</div>
    	<!--<div id="loc0">Manthan 2014</div>-->
    	
    <div id="background">
    		
			<div id="star">
            	<a href="Music_Battle_Of_Bands.php"><img src="assets/star/Battle of Bands.png" alt="star event" height="45%" width="25%" id="starimg"/></a><br />
                <img src="assets/star/default_03.png" alt="star event" height="15%" width="30%" id="starimg2"/>
                <img src="assets/star/Fashion Show.png" alt="star event" height="45%" width="25%" id="starimg3"/>
                <a href="Dance_Street_Dance.php"><img src="assets/star/HALO.png" alt="star event" height="10%" width="30%" id="starimg4"/></a>
                <img src="assets/star/Nikhil Chinapa.png" alt="star event" height="65%" width="34%" id="starimg5"/>
                
                
            </div>
			<div id="hlogo"> 
            	<img src="ManthanLogo1.png"  height="360px"  alt="logo" id="log" />
        	</div>
            <div id="home">
<!--          	<div id="gods">
            		<img src="hoplight.png" width:"300px" height="500px" alt="god"  />
                </div>
                <div id="god2">
                	<img src="Jaguar.png" width="350px" height="550px" alt="god" />
                </div>
                <div id="god3">
                	<img src="Phoenix2.png" width="230px" height="160px" alt="god" id="phoenix"/>
                </div>
 -->               
                
            	<div id="colg"><img src="assets/logo white.png" alt="BIT Logo" width="80px" height="100px" /><br />Bangalore Institute of Technology<br /><em>presents</em></div>
                <div id="date">10th-12th April 2014</div>
<!--                 <div id="demons">
                 	<img src="Chimera.png" width:"250px" height="555px" alt="demon" />
                	
                </div>
                <div id="demon2">
                	<img src="Werewolf.png" width:"300px" height="380px" alt="demon"  />
                </div>
                <div id="demon3">
                	
                    <img src="Deathwing.png" width:"250px" height="160px" alt="demon" id="deathwing"/>
                </div>-->
           		<!--<div id="schedule"><figure><a href="assets/TECHNICAL EVENT SCHEDULE.pdf"><img src="assets/Schedule.png" width="90px" height="60px" alt="schedule" /></a><figcaption style="text-align:center; color:#CCC; font-family:'Wellfleet';">Schedule</figcaption></figure></div>-->
               
   			</div>
            
            <div id="buffer" >
            			
                        <a><div class="tech1"  >
               				<div ><p style="font-weight: 30;font-size:16px; color:#000;"><img src="assets/icons/appbar.cogs.png" width="75px" height="75px" alt="civil" /><br />SAE</p></div>
                            <div ><p ><ul><li style="margin-top:50px;"><a class = "techlink" href="SAE_Glider_Prototype.php">Glider Prototype</a></li>
                            <li style="margin-top:20px;"><a class = "techlink" href="SAE_Auto_Trivia.php">Auto Trivia</a></li>
                                  </ul></p></div>
               			</div></a>
                		<!--<a><div class="tech2">
                		<div><p ><ul><li style="margin-top:50px;"><a class = "techlink" href="#">Best Manager</a></li><li style="margin-top:20px;"><a class = "techlink" href="#">Marketing Event</a></li></ul></p></div>
                            <div><p style=" font-weight: 30;font-size:16px; color:#000;"><img src="assets/icons/appbar.graph.line.up.png" width="80px" height="80px" alt="civil" /><br />MBA
                            		 </p></div>
                         	   
               			</div></a>-->
               			<a ><div class="tech3 rotate3d rotate3dY">
                        <div class="faces">
               				<div class="front" style="padding-left:0px; "><p style="font-weight: 30;font-size:16px; color:#000; "><img src="assets/icons/appbar.xbox.png" width="80px" height="80px" alt="civil" /><br />Xkalibre</p></div>
               				<div class="back"><p><ul><li style="padding-left:50px; padding-bottom:10px;"><a href="Xkalibre_Train_Your_Brain.php" class = "techlink">Train Ur Brain</a></li>
                            <li style="padding-left:50px; padding-bottom:10px; "><a class = "techlink" href="Xkalibre_Soap_Opera.php">Soap Opera</a></li
                            ><li style="padding-left:50px; padding-bottom:10px; "><a class = "techlink" href="Xkalibre_Around_The_World.php">Around the world in 80 mins</a></li>
                                     </ul></p></div></div>
               			</div></a>
                		<a ><div class="tech4">
               				<div><p style=" font-weight: 30;font-size:16px; color:#000;"><img src="assets/icons/appbar.hardware.mouse.png" width="100px" height="80px" alt="civil" /><br />ISE Club</p></div>
               				<figcaption class="cleft"><p><ul><li style="margin-top:50px;"><a class = "techlink" href="ISE_Argo_Comic_Fiesta.php">Agro Movie Trivia</a></li>
                            <br>
                            <li ><a href="ISE_Anti_Coding.php" class = "techlink" >Anti Coding</a></li>
                                     </ul></p></figcaption>
               			</div></a>
               			<a ><div class="tech5 rotate3d rotate3dX">
                        
                        <div class="faces">
               				<div class="front" style="padding-left:60px; padding-top:30px;"><p style="font-weight: 30;font-size:16px; color:#000; margin-top:50px;"><img src="assets/icons/appbar.marvel.ironman.png" width="80px" height="80px" alt="civil" /><br />Rotaract</p></div>
               				<div class="back"><p><ul><li style="margin-top:50px;"><a href="Rotaract_Technovation.php" class = "techlink">Technovation</a></li>
					<br>
					<li><a href="Rotaract_Reverse_Engineering.php" class = "techlink">Reverse Engineering</a></li>
                                    
                                     </ul></p></div>
                                     </div>
               			</div></a>
                        
                		<a><div class="tech6">
                		<div><p ><ul><li style="margin-top:50px;"><a class = "techlink" href="Civil_So_You_Think.php">So U Think U can Build</a></li>
               				<br>
               				<li><a class = "techlink"  href="Civil_AutoCad.php">Autocad</a></li>
                                     </ul></p></div>
                            <div><p style=" font-weight: 30;font-size:16px; color:#000;"><img src="assets/icons/appbar.city.sanfrancisco.png" width="80px" height="80px" alt="civil" /><br />Civil</p></div>
               			</div></a>
                        
               			<a ><div class="tech7">
               				<div><p style=" font-weight: 30;font-size:16px; color:#000;"><img src="assets/icons/appbar.markup.png" width="80px" height="80px" alt="civil" /><br />CSE</p></div>
               				<div><p ><ul><li style="margin-top:50px;"><a href="CSE_C_Tycoon.php" class = "techlink">C Tycoon</a></li>
						<br>
						<li><a href="CSE_Switch_Coding.php" class = "techlink">Switch Coding</a></li>
                                     </ul></p></div>
               			</div></a>
                        
                        <a ><div class="tech8">
               				<div><p style="font-weight: 30;font-size:16px; color:#000;"><img src="assets/icons/appbar.laptop.png" width="80px" height="80px" alt="civil" /><br />MCA</p></div>
               				<div><p ><ul><li style="margin-top:60px;"><a class = "techlink"href="MCA_IT_Quiz.php">IT Quiz</a></li>
						<br>
						<li><a href="MCA_Code_Breaking.php" class = "techlink">Code Breaking</a></li>
                                     </ul></p></div>
               			</div></a>
                        <a href="Musical_Picture_Slider.php"><div class="tech9">
               				<p style="font-weight: 30;font-size:16px; color:#000; margin-top:30px;"><img src="assets/icons/appbar.projector.screen.png" width="80px" height="80px" alt="civil" /><br />Musical Picture Slider</p>
               			</div></a>
                        <a ><div class="tech10">
               				
                            <div><p style="font-weight: 30;font-size:16px; color:#000;"><img src="assets/icons/appbar.image.gallery.png" width="80px" height="80px" alt="civil" /><br />SHUTTERed</p></div>
                            <div style="font-weight: 30;font-size:16px; color:#000;"><p style=""><a href="Shuttered_Mini_Movie_Making.php" class = "techlink">The Mini Movie Maker</a></p>
               			
               			<p style=""><a href="Shuttered_Spot_Photography.php" class = "techlink">Spot Photography</a></p></div>
               			</div></a>
                        <a ><div class="tech11">
                        <div><p style="font-weight: 30;font-size:16px; color:#000;"><img src="assets/icons/appbar.hardware.cpu.png" width="80px" height="80px" alt="civil" /><br />ECSA</p></div>
                        <div><p ><ul><li style="margin-top:50px;"><a class = "techlink" href="ECSA_Rig_It_To_Win_It.php">Rig it to Win it</a></li>
						<br>
						<li><a href="ECSA_Robotron.php" class = "techlink">Robotron</a></li>
                                     </ul></p></div>
                            
                        </div></a>
                        <a ><div class="tech12">
                        <div><p ><ul><li style="margin-top:70px;"><a href="Enfinity_Damn_It.php" class = "techlink">Damn it Just Sell it</a></li>
                            		 </ul></p></div>
                            <div><p style="font-weight: 30;font-size:16px; color:#000;"><img src="assets/icons/appbar.visualstudio.png" width="80px" height="80px" alt="civil" /><br />Enfinity</p></div>
                        </div></a>
                        
            </div>
   		<div id="tech">
                   	                        
   		</div>
       
        <div id="buffer2" >
        	<div id="dance" onmouseover="shodiv1()" onmouseout="shodiv1t()">
               		<p id="content2"><a href="#theatre" ><img src="assets/Dance Separate.png" alt="Dance" height="110px" width="250px" /></a></p>
               </div>
               <div id="dancon" onmouseover="shodiv1()" onmouseout="shodiv1t()"><a href="Dance_Contemporary_Group.php" ><img src="assets/Contemporary.png" alt="Dance" height="200px" width="70px" /></a></div>
                <div id="danduet" onmouseover="shodiv1()" onmouseout="shodiv1t()"><a href="Dance_Duet.php" ><img src="assets/Duet.png" alt="Dance" height="80px" width="50px" /></a></div>
                <div id="dansolo" onmouseover="shodiv1()" onmouseout="shodiv1t()"><a href="Dance_Solo.php" ><img src="assets/Solo.png" alt="Dance" height="80px" width="50px" /></a></div>
                <div id="danwest" onmouseover="shodiv1()" onmouseout="shodiv1t()"><a href="Dance_Western_Group.php" ><img src="assets/Western Group.png" alt="Dance" height="210px" width="70px" /></a></div>
                
                
                
               <div id="music" onmouseover="shodiv2()" onmouseout="shodiv2t()">
               		<p id="content3"><a href="#theatre" ><img src="assets/music/Music Separate.png" alt="Dance" height="120px" width="250px" /></a></p>
                    
               </div>
               		<div id="eastsolo" onmouseover="shodiv2()" onmouseout="shodiv2t()"><a href="Music_Classical_Solo.php" ><img src="assets/music/Eastern Solo.png" alt="Dance" height="70px" width="150px" /></a></div>
                    <div id="acc" onmouseover="shodiv2()" onmouseout="shodiv2t()"><a href="Music_Western_Acoustic_Group.php" ><img src="assets/music/Western Acoustic Group.png" alt="Dance" height="70px" width="250px" /></a></div>
                    <div id="bob" onmouseover="shodiv2()" onmouseout="shodiv2t()"><a href="Music_Battle_Of_Bands.php" ><img src="assets/music/Battle of Bands.png" alt="Dance" height="220px" width="70px" /></a></div>
                    <div id="classolo" onmouseover="shodiv2()" onmouseout="shodiv2t()"><a href="Music_Classical_Solo.php" ><img src="assets/music/Classical Solo.png" alt="Dance" height="70px" width="150px" /></a></div>
                    <div id="westsolo" onmouseover="shodiv2()" onmouseout="shodiv2t()"><a href="Music_Western_Vocal_Solo.php" ><img src="assets/music/Western Vocals Solo.png" alt="Dance" height="70px" width="220px" /></a></div>
                   
                   
                   
               <div id="arts" onmouseover="shodiv3()" onmouseout="shodiv3t()" >
               		<p id="content4"><a href="#theatre" ><img src="assets/art/Art Separate.png" alt="Dance" height="140px" width="150px" /></a></p>
               </div>
                <div id="face" onmouseover="shodiv3()" onmouseout="shodiv3t()" ><a href="Art_Face_Painting.php" ><img src="assets/art/Face Painting.png" alt="Dance" height="70px" width="220px" /></a></div>
                <div id="mehndi" onmouseover="shodiv3()" onmouseout="shodiv3t()" ><a href="Art_Mehendi.php" ><img src="assets/art/Mehendi.png" alt="Dance" height="65px" width="180px" /></a></div>
                <div id="collage" onmouseover="shodiv3()" onmouseout="shodiv3t()" ><a href="Art_Collage.php" ><img src="assets/art/Collage.png" alt="Dance" height="70px" width="90px" /></a></div>
                
                
                
               <div id="theatre" onmouseover="shodiv4()" onmouseout="shodiv4t()" >
               		<p id="content5"><a href="#theatre" ><img src="assets/theatre/Theatre Separate.png" alt="Dance" height="250px" width="120px" /></a></p>
               </div>
               <div id="madads" onmouseover="shodiv4()" onmouseout="shodiv4t()"><a href="Theatre_Mad_Ads.php" ><img src="assets/theatre/Mad Ads.png" alt="Dance" height="70px" width="150px" /></a></div>
                <div id="streetplay" onmouseover="shodiv4()" onmouseout="shodiv4t()"><a href="Theatre_Street_Play.php" ><img src="assets/theatre/Street Play.png" alt="Dance" height="70px" width="200px" /></a></div>
                
                
                 <div id="kannada" onmouseover="shodiv8()" onmouseout="shodiv8t()" >
               		<p id="content5"><a href="#theatre" ><img src="assets/kannada/Kannada Separate.png" alt="Dance" height="70px" width="220px" /></a></p>
               </div>
               <div id="kanjam" onmouseover="shodiv8()" onmouseout="shodiv8t()"><a href="KANNADA_JAM.php" ><img src="assets/kannada/Kannada JAM.png" alt="Dance" height="40px" width="150px" /></a></div>
                <div id="kanquiz" onmouseover="shodiv8()" onmouseout="shodiv8t()"><a href="KANNADA_QUIZ.php" ><img src="assets/kannada/Kannada Quiz.png" alt="Dance" height="40px" width="150px" /></a></div>
                
                
               <div id="literary" onmouseover="shodiv5()" onmouseout="shodiv5t()">
               		<p id="content6"><a href="#theatre" ><img src="assets/lit/Literary Separate.png" alt="Dance" height="120px" width="250px" /></a></p>
               </div>
               <div id="aircrash" onmouseover="shodiv5()" onmouseout="shodiv5t()"><a href="Literary_Air_Crash.php" ><img src="assets/lit/Air Crash.png" alt="Dance" height="150px" width="70px" /></a></div>
                <div id="writing" onmouseover="shodiv5()" onmouseout="shodiv5t()"><a href="Literary_Creative_Writing.php" ><img src="assets/lit/Creative Writing.png" alt="Dance" height="280px" width="80px" /></a></div>
                <div id="debate" onmouseover="shodiv5()" onmouseout="shodiv5t()"><a href="Literary_Debate.php" ><img src="assets/lit/Debate.png" alt="Dance" height="150px" width="70px" /></a></div>
                <div id="potpry" onmouseover="shodiv5()" onmouseout="shodiv5t()"><a href="Literary_Potpourri.php" ><img src="assets/lit/Pot Pourri.png" alt="Dance" height="70px" width="160px" /></a></div>
                
                
                
                <div id="games" onmouseover="shodiv6()" onmouseout="shodiv6t()">
               		<p id="content7" ><a href="#theatre" ><img src="assets/games/Gaming Separate.png" alt="Dance" height="120px" width="250px" /></a></p>
               </div>
               <div id="nfs" onmouseover="shodiv6()" onmouseout="shodiv6t()"><a href="Games_NFS.php" ><img src="assets/games/NFS.png" alt="Dance" height="50px" width="70px" /></a></div>
                <div id="dota" onmouseover="shodiv6()" onmouseout="shodiv6t()"><a href="Games_DOTA.php" ><img src="assets/games/DOTA.png" alt="Dance" height="100px" width="100px" /></a></div>
                <div id="fifa" onmouseover="shodiv6()" onmouseout="shodiv6t()"><a href="Games_FIFA.php" ><img src="assets/games/FIFA 14.png" alt="Dance" height="80px" width="150px" /></a></div>
                <div id="counterstrike" onmouseover="shodiv6()" onmouseout="shodiv6t()"><a href="Games_Counter_Strike.php" ><img src="assets/games/Counter Strike.png" alt="Dance" height="210px" width="70px" /></a></div>
                
                
                
               <div id="informal" onmouseover="shodiv7()" onmouseout="shodiv7t()">
               		<p id="content1"><img src="assets/informal/Informal Separate.png" alt="Dance" height="120px" width="250px" /></p>  </div>
               </div>
                <div id="hog" onmouseover="shodiv7()" onmouseout="shodiv7t()"><a href="Informal_Hogathon.php" ><img src="assets/informal/Hogathon.png" alt="Dance" height="120px" width="50px" /></a></div>
                <div id="dumb" onmouseover="shodiv7()" onmouseout="shodiv7t()"><a href="Informal_Dumb_Charade.php" ><img src="assets/informal/Dumb Charades.png" alt="Dance" height="150px" width="50px" /></a></div>
                <div id="arm" onmouseover="shodiv7()" onmouseout="shodiv7t()"><a href="Informal_Arm_Wrestling.php" ><img src="assets/informal/Arm Wrestling.png" alt="Dance" height="50px" width="200px" /></a></div>
                <div id="ipl" onmouseover="shodiv7()" onmouseout="shodiv7t()"><a href="Informal_Mock_IPL.php" ><img src="assets/informal/Mock IPL.png" alt="Dance" height="120px" width="50px" /></a></div>
                <div id="onesip" onmouseover="shodiv7()" onmouseout="shodiv7t()"><a href="Informal_One_Sip_Ahead.php" ><img src="assets/informal/One Sip Ahead.png" alt="Dance" height="50px" width="200px" /></a></div>                
                <div id="slodrag" onmouseover="shodiv7()" onmouseout="shodiv7t()"><a href="Informal_Slow_Drag.php" ><img src="assets/informal/Slow Drag.png" alt="Dance" height="50px" width="180px" /></a></div>
                 <div id="wild" onmouseover="shodiv7()" onmouseout="shodiv7t()"><a href="Informal_Wild_Goose_Chase.php" ><img src="assets/informal/Wild Goose Chase.png" alt="Dance" height="50px" width="220px" /></a></div>
         
         
         
       <div>
       	<div id="sheild"><img src="sheild/shield.png" alt="sheild" height="105%" width="100%" /></div>
                <div id="sheild1"><img src="sheild/piece1.png" alt="sheild" height="400px"/></div>
                <div id="sheild2"><img src="sheild/piece2.png" alt="sheild" height="400px"/></div>
                <div id="sheild3"><img src="sheild/piece3.png" alt="sheild" height="400px"/></div>
                <div id="sheild4"><img src="sheild/piece4.png" alt="sheild" height="400px"/></div>
                <div id="sheild5"><img src="sheild/piece5.png" alt="sheild" height="400px"/></div>
                <div id="sheild6"><img src="sheild/piece6.png" alt="sheild" height="400px"/></div>
                <div id="sheild7"><img src="sheild/piece7.png" alt="sheild" height="400px"/></div>
       </div>
   		<div id="cult" >
         	
                              
   		</div>
        
  		<div id="buffer3">
        <div id="sport0">
            	Sports
            </div>
        	<a href="Sports_Jordan.php"><div id="sport1">
            	
            </div></a>
            <a href="Sports_Carrom.php"><div id="sport2">
            	
            </div></a>
            <a href="Sports_Chess.php"><div id="sport3">
            	
            </div></a>
            <a href="Sports_Cricket.php"><div id="sport4">
            	
            </div></a>
            <a href="Sports_Football.php"><div id="sport5">
            	
            </div></a>
            <a href="Sports_Table_Tennis.php"><div id="sport6">
            	
            </div></a>
        </div>      
        
   		<div id="contact">
        		
                      
  		 </div>
         
         	<div id="buffer4">
        <div id="sponsors">
            	Our Proud Sponsors
            </div>
            <div id="spcon">
                    <div id="spon1">
                        <img src="assets/sponsors/BTP.png" alt="sponsor" width="200px" height="150px" />
                    </div>
                    <div id="spon2">
                        <img src="assets/sponsors/Cadd Centre.png" alt="sponsor" width="200px" height="150px"/>
                    </div>
                    <div id="spon3">
                        <img src="assets/sponsors/image001.jpg" alt="sponsor" width="200px" height="150px"/>
                    </div>
                    <div id="spon4">
                        <img src="assets/sponsors/syndicate-bank-logo-1.jpg" alt="sponsor" width="200px" height="100px"/>
                    </div>
                    <div id="spon5">
                        <img src="assets/sponsors/INOX.png" alt="sponsor" width="220px" height="100px"/>
                    </div>
                    <div id="spon6">
                        <img src="assets/sponsors/radio-one.jpg" alt="sponsor" width="150px" height="150px"/>
                    </div>
                    <div id="spon7">
                        <img src="assets/sponsors/50.jpg" alt="sponsor" width="200px" height="100px" />
                    </div>
                    <div id="spon8">
                        <img src="assets/sponsors/Adla Logo.png" alt="sponsor" width="300px" height="200px"/>
                    </div>
            </div>
        </div>
         
    	<div id="bit">
        	<div id="contab">
            	Contact Us
    			<table class="tg">
  <tr>
    <th class="tg-hgcj" colspan="2">Core Committee</th>
    <th class="tg-hgcj" colspan="2">Technical Events</th>
    <th class="tg-hgcj" colspan="2">Fashion</th>
    <th class="tg-hgcj" colspan="2">Stalls</th>
  </tr>
  <tr>
    <td class="tg-031e">Paschim Prasad</td>
    <td class="tg-031n">98866 90900</td>
    <td class="tg-031e">Soumya</td>
    <td class="tg-031n">97426 25328</td>
    <td class="tg-031e">Parikshita</td>
    <td class="tg-031n">89712 45246</td>
    <td class="tg-031e">Ashish</td>
    <td class="tg-031n">99000 15030</td>
  </tr>
  <tr>
    <td class="tg-031e">Gautham Reddy</td>
    <td class="tg-031n">99016 64250</td>
    <td class="tg-031e">Mayank</td>
    <td class="tg-031n">88840 71798</td>
    <td class="tg-031e">Deepthi</td>
    <td class="tg-031n">95917 74419</td>
    <td class="tg-031e">Sagar</td>
    <td class="tg-031n">77606 44146</td>
  </tr>
  <tr>
    <th class="tg-hgcj" colspan="2">Cultural Events</th>
    <th class="tg-hgcj" colspan="2">Sports</th>
    <th class="tg-hgcj" colspan="2">Nikhil Chinapa Tickets</th>
    <th class="tg-hgcj" colspan="2">Technical</th>
  </tr>
  <tr>
    <td class="tg-031e">Rithvik</td>
    <td class="tg-031n">96328 32855</td>
    <td class="tg-031e">Harsha</td>
    <td class="tg-031n">96635 98848</td>
    <td class="tg-031e">Harsha</td>
    <td class="tg-031n">88925 60133</td>
    <td class="tg-031e">Ashish</td>
    <td class="tg-031n">81234 41422</td>
  </tr>
  <tr>
    <td class="tg-031e">Nishantha</td>
    <td class="tg-031n">88840 71798</td>
    <td class="tg-031e">Ujwal</td>
    <td class="tg-031n">88808 81108</td>
    <td class="tg-031e">Niranth</td>
    <td class="tg-031n">81056 57149</td>
    <td class="tg-031e">Tushar</td>
    <td class="tg-031n">88845 97407</td>
  </tr>
  <tr>
    <th class="tg-hgcj" colspan="2">Hospitality</th>
    <th class="tg-hgcj" colspan="2">Creative Team</th>
    <th class="tg-hgcj" colspan="2">Squad</th>
    <th class="tg-hgcj" colspan="2">Security</th>
  </tr>
  <tr>
    <td class="tg-031e">Mouna Giri</td>
    <td class="tg-031n">95350 15155</td>
    <td class="tg-031e">Amita</td>
    <td class="tg-031n">97422 46422</td>
    <td class="tg-031e">Likith</td>
    <td class="tg-031n">95385 67274</td>
    <td class="tg-031e">Prateek</td>
    <td class="tg-031n">81231 48351</td>
  </tr>
  <tr>
    <td class="tg-031e">Poornima I</td>
    <td class="tg-031n">96201 88643</td>
    <td class="tg-031e">Babbli</td>
    <td class="tg-031n">81059 21532</td>
    <td class="tg-031e">Akarsh</td>
    <td class="tg-031n">80959 60744</td>
    <td class="tg-031e">Amith</td>
    <td class="tg-031n">98455 37274</td>
  </tr>
</table><br /><br />
          <span style="font-size:22px;"> Website Developed by-Abhay Sastry & Neel Kirit </span>        
           </div>
            
		</div>
        
     </div>
     <script type="text/javascript">  
     $('.techlink').css("color","black");
     var color;
     var bgcolor;
     $('.techlink').mouseover(function(){
	      color = $(this).css("color");
	      bgcolor = $(this).css("background-color");
	      $(this).css("color","white");
	      $(this).css("background-color","black");
	      $(this).mouseout(function(){
		      $(this).css("color",color);
		      $(this).css("background-color",bgcolor);
		      
	});
	     
	});
     </script>
       <script type="text/javascript">
    		
			var note="The Battle Begins!!";    
    var year=2015;     
    var month=4;     
    var day=9;         
    var hour=13;         
    var minute=31;     
    var tz=-5;          

    //-->    DO NOT CHANGE THE CODE BELOW!    <--
    d1 = new Image(); d1.src = "digital-numbers/1.png";
    d2 = new Image(); d2.src = "digital-numbers/2.png";
    d3 = new Image(); d3.src = "digital-numbers/3.png";
    d4 = new Image(); d4.src = "digital-numbers/4.png";
    d5 = new Image(); d5.src = "digital-numbers/5.png";
    d6 = new Image(); d6.src = "digital-numbers/6.png";
    d7 = new Image(); d7.src = "digital-numbers/7.png";
    d8 = new Image(); d8.src = "digital-numbers/8.png";
    d9 = new Image(); d9.src = "digital-numbers/9.png";
    d0 = new Image(); d0.src = "digital-numbers/0.png";
    bkgd = new Image(); bkgd.src = "digital-numbers/bkgd.gif";

    var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

    function countdown(yr,m,d,hr,min){
        theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
        var today=new Date();
        var todayy=today.getYear();
        if (todayy < 1000) {todayy+=1900;}
        var todaym=today.getMonth();
        var todayd=today.getDate();
        var todayh=today.getHours();
        var todaymin=today.getMinutes();
        var todaysec=today.getSeconds();
        var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
        var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
        var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
        var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
        var dd=futurestring-todaystring;
        var dday=Math.floor(dd/(60*60*1000*24)*1);
        var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
        var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
        var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
        if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
            document.getElementById('note').innerHTML=note;
            document.getElementById('note').style.display="block";
            document.getElementById('countdown').style.display="none";
            clearTimeout(startTimer);
            return;
        }
        else {
            document.getElementById('note').style.display="none";
            document.getElementById('timer').style.display="block";
            startTimer = setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",500);
        }
        convert(dday,dhour,dmin,dsec);
    }

    function convert(d,h,m,s) {
        if (!document.images) return;
        if (d <= 9) {
            document.images.day1.src = bkgd.src;
            document.images.day2.src = bkgd.src;
            document.images.day3.src = eval("d"+d+".src");
        }
        else if (d <= 99) {
            document.images.day1.src = bkgd.src;
            document.images.day2.src = eval("d"+Math.floor(d/10)+".src");
            document.images.day3.src = eval("d"+(d%10)+".src");
        }
        else {
            document.images.day1.src = eval("d"+Math.floor(d/100)+".src");
            var day = d.toString();
            day = day.substr(1,1);
            day = parseInt(day);
            document.images.day2.src = eval("d"+day+".src");
            document.images.day3.src = eval("d"+(d%10)+".src");
        }
        if (h <= 9) {
            document.images.h1.src = d0.src;
            document.images.h2.src = eval("d"+h+".src");
        }
        else {
            document.images.h1.src = eval("d"+Math.floor(h/10)+".src");
            document.images.h2.src = eval("d"+(h%10)+".src");
        }
        if (m <= 9) {
            document.images.m1.src = d0.src;
            document.images.m2.src = eval("d"+m+".src");
        }
        else {
            document.images.m1.src = eval("d"+Math.floor(m/10)+".src");
            document.images.m2.src = eval("d"+(m%10)+".src");
        }
        if (s <= 9) {
            document.images.s1.src = d0.src;
            document.images.s2.src = eval("d"+s+".src");
        }
        else {
            document.images.s1.src = eval("d"+Math.floor(s/10)+".src");
            document.images.s2.src = eval("d"+(s%10)+".src");
        }
    }
			
			
			
			
			
    </script>
     </div>
</body>
</html>