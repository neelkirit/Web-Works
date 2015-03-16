<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Buda:300' rel='stylesheet' type='text/css'>
<title>Teams</title>
<link type="text/css" rel="stylesheet" href="style.css" />


</head>
<body>
	<p style="text-align:center;"><img src="downloadfile.png" width="300px" height="190px" alt="logo" /></p>
	<p style=" font-size:38px;text-align:center;">Damn It! Just Sell It!</p>
    

	<div class="par">
	<a  href="score.html" ><div class="grid" id="1"><p style="margin-top:33px;">
    
                <?php
                $i=0;
            $con=mysqli_connect("localhost","ecell","123321","enfinity");
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
            
            $result = mysqli_query($con,"SELECT * FROM scores LIMIT $i,1" );
            
           $i=$i+1;
            
            while($row = mysqli_fetch_array($result))
              {
              
              echo $row['team'] ;
             
              }
            
            
            mysqli_close($con);
            ?>

1</p></div></a>
    <a href="score.html" id="2"><div class="grid"><p style="margin-top:33px;">2</p></div></a>
    <a href="score.html" id="3"><div class="grid"><p style="margin-top:33px;">3</p></div></a>
 
    
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">4</div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">5</div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">6</div></a>
  
    
    <a href="score.html"> <div class="grid"><p style="margin-top:33px;">7</p></div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">8</p></div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">9</p></div></a>
    
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">10</p></div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">11</p></div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">12</p></div></a>
    
    
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">13</p></div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">14</p></div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">15</p></div></a>
    
    
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">16</p></div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">17</p></div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">18</p></div></a>
    
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">19</p></div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">20</p></div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">21</p></div></a>
  
    
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">22</p></div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">23</p></div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">24</p></div></a>
    
     <a href="score.html"><div class="grid"><p style="margin-top:33px;">25</p></div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">26</p></div></a>
    <a href="score.html"><div class="grid"><p style="margin-top:33px;">27</p></div></a>
    
</div>   
</body>
</html>
