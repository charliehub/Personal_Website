<!DOCTYPE html>
<html>

  <head>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet" href="main2.css">
    
  </head>

  
  <body>
    <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="practice2.php">Home</a></li>
          <li><a href="aboutme.php">About Me</a></li>
        </ul>
        <ul class="pull-right">
          <li><a href="project.php">Projects</a></li>
          <li><a href="contact.php">Contact Me</a></li>
          <li><a href="reg.php">Register</a></li>
        </ul>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1>Char's World.</h1>
        <p>Welcome to my world. A world full of games and other exciting things. If You're not a gamer, there will be stuff for you guys as well, so don't be put off by that.</p>
        <a href="#">Learn More</a>
      </div>
    </div> 

    <div class="neighborhood-guides">
        <div class="container">
               <table class="table table-bordered table-responsive">
			     <caption>This is how you can contact Me</caption>
				 <tr>
				 <td>Name</td>
				 <td>Charles Langley Jr.</td>
				 </tr>
				 <tr>
				 <td>Place of Residence</td>
				 <td>Philadelphia, Pennsylvania</td>
				 </tr>
			   </table>
                 </div>
        </div>
    </div>
    <div class="learn-more">
	  <div class="container">
		<form role="form">
		   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">First Name</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="firstname" 
            placeholder="Enter First Name">
      </div>
   </div>
   <div class="form-group">
      <label for="lastname" class="col-sm-2 control-label">Last Name</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="lastname" 
            placeholder="Enter Last Name">
      </div>
   </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <div class="checkbox">
            <label>
               <input type="checkbox"> Remember me
            </label>
         </div>
      </div>
   </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-default">Sign in</button>
      </div>
   </div>
			
	  </div>
	</div>
  </body>
</html>
      