  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>
RESUME 
</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript"  src="./bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="./jquery.js"></script>

<link rel="stylesheet" type="text/css" href="./style.css" media="screen">

</head>
<body>

     <div id ="container">
	 <a><h1>click</a>
	 <script>
	 
	 $(function(){
	       $('a').click(function(){
           $('#test').fadeOut(); 
	  
	         });
	  
	 });
	 
	 </script>
	 <div class="test1" style="display:none">
	 
	 
	 <?php
			            if(isset($_POST['post']))
						{
						
						$name=$_POST['name'];
						$email=$_POST['email'];
						$comment=$_POST['comment'];
						//for query
						if($name&&$comment)
						{
						mysql_connect("localhost","root","") or die(mysql_error());
						mysql_select_db("comment_details") or die(mysql_error());
						$date=date("y-m-d H:i:s");
						//insert 
						$insert=mysql_query("insert into details values('','$name','$email','$comment','$date')") or die(mysql_error());;
						
						
						}
						else{
						echo "please fill columns";
						}
						
						
						
						}
			
			?>
			
			
			
			
			<center>
			<form action='post.php' method='POST'>
			Name:<input type='text' name='name'><br>
			Email:<input type='text' name='email'><br>
			comment:<textarea rows='9' col='7' name='comment'></textarea><br>
			 <input type='submit' name='post' value='o.k'>
			</form>
			
	 
	 
	 
	 </div>
	        
			<?php
			            if(isset($_POST['comment']))
						{
						
						$name=$_POST['name'];
						$email=$_POST['email'];
						$comment=$_POST['comment'];
						//for query
						if($name&&$email&&$comment)
						{
						
						
						 
						 mysql_connect("localhost","root","") or die(mysql_error());
						mysql_select_db("comment_details") or die(mysql_error());

					
					               $date=date("y-m-d H:i:s");
						//insert 
						$insert=mysql_query("INSERT INTO details VALUES('','$name','$email','$comment','$date')") or die(mysql_error());
						
						
						}
						
						
						else{
						echo "please fill columns";
						}
						
						
						
						}
			
			?>
			
			
			
			
			<center>
			<form action='comment.php' method='POST'>
			Name:<input type='text' name="name"><br>
			Email:<input type='text' name="email"><br>
			comment:<textarea rows='9' col='7' name="comment"></textarea><br>
			 <input type='submit' name='comment' value="postth">
			</form>
			
			
			
			
			
			
				<?php 
			//connection for msql and database
			 mysql_connect("localhost","root","") or die(mysql_error());
			 mysql_select_db("comment_details") or die(mysql_error());
			    

				//connection for query
              				 
                  $getdetails= mysql_query("select * from  details where DATE(myDate) = DATE(NOW())") or die(mysql_query());

				     while($row=mysql_fetch_assoc($getdetails))
                       {
                            $name=$row['name'];					   
					         $email=$row['email'];
					         $comment=$row['comment'];
					          $date=$row['date'];
							 echo  "  $comment <br>      $name posted on $date";
							 }
			
			
			?>
			
			
			
			
		
			
			
			
			
			
		 <div>



</body>
</html>