<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>The Milz and Gryllz Show</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
	
	 <script type="text/javascript" src="https://rss2json.com/gfapi.js"></script>

    <script type="text/javascript">

    google.load("feeds", "1");

    function initialize() {
      var feed = new google.feeds.Feed("https://feed.podbean.com/themilzandgryllzshow/feed.xml");
      feed.load(function(result) {
        if (!result.error) {
          var container = document.getElementById("feed");
          for (var i = 0; i < result.feed.entries.length; i++) {
            var entry = result.feed.entries[i];
            var div = document.createElement("div");
            div.appendChild(document.createTextNode(entry.title));
            container.appendChild(div);
          }
        }
      });
    }
    google.setOnLoadCallback(initialize);

    </script>

</head>

<body>
	

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="#" target="_self">
          <strong>The Milz and Gryllz Show</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Right -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="merch.html"
                target="_self">Merch</a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Jumbotron-->
      <section class="card  wow fadeIn" id="intro">

        <!-- Content -->
        <div class="card-body text-grey text-center p-5 m-5">
         <!-- <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-white btn-lg">Fuck ye
            <i class="fas fa-couch ml-2"></i>
          </a>-->
        </div>
        <!-- Content -->
		  
      </section>
      <!--Section: Jumbotron-->

      <!--Section: Cards-->
      <section class="pt-5">

        <!-- Heading & Description -->
        <div class="wow fadeIn">
          <!--Section heading-->
          <h2 class="display-2 text-center mb-5 mt-3">The Milz and Gryllz Show &#127348;</h2>
          <!--Section description-->
          <p class="text-center mb-5">just a couple of average blokes on different sides of the planet having a chat</p>
        </div>
        <!-- Heading & Description -->
		  
		  <form name="form1" method="post">
			<textarea name="value1"></textarea>
			<input type="submit" value="submit" name="submit" />
			</form>
		  
		  <?php
if(isset($_POST['submit']))
{
	$to= "chef_fb@hotmail.com";
	$subject= "Subject for your email";
	$msg= $_POST["value1"]; //textarea value will be send as message here.
	$header= "Header for mail" //For example: From: abc@xyz.com
	mail($to,$subject,$msg,$header);
}
?>
		  
		  
		  
		  
		<div class="col-xs-12" style="height:100px;"></div>
		
		<h2 class="display-4 text-center mb-1">The Hosts</h2><hr class="mb-4">
		  
		<div class="card-deck mb-5">
  			<div class="card">
    			<img class="card-img-top" src="img/IMG_1900.jpg" alt="Card image cap">
    			<div class="card-body">
      				<h5 class="card-title">Milz</h5>
     				 <p class="card-text">James Millar aka Milz is the go-to electrician around Brisbane, legendary soccer player for the U19 Australian National Team and aspiring Podcast Host. Some call him a retarded Hamish Blake.</p>
					
					<!-- Button trigger modal-->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalConfirmDelete">Milz for President</button>
						
						<!--Modal: modalConfirmDelete-->
						<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						  aria-hidden="true">
						  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
						    <!--Content-->
						    <div class="modal-content text-center my-1">
						      <!--Header-->
						      <div class="modal-header d-flex justify-content-center">
						        <p class="heading">Are you sure? You seriously want Milz to be President?!</p>
						      </div>
						
						      <!--Body-->
						      <div class="modal-body">
						
						        <i class="fas fa-times fa-4x animated rotateIn"></i>
						
						      </div>
						
						      <!--Footer-->
						      <div class="modal-footer flex-center">
								  
								  <!-- Button trigger modal-->
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalYT">Fuck ye</button>
							
							<!--Modal: modalYT-->
							<div class="modal fade" id="modalYT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
							  aria-hidden="true">
							  <div class="modal-dialog modal-lg" role="document">
							
							    <!--Content-->
							    <div class="modal-content">
							
							      <!--Body-->
							      <div class="modal-body mb-0 p-0">
							
							        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
										<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/UMLtkp4AFkc?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							        </div>
									  
							
							      </div>
							
							      <!--Footer-->
							      <div class="modal-footer justify-content-center flex-column flex-md-row">
							        <span class="mr-4">Spread the word!</span><!--
							        <div>
							          <a type="button" class="btn-floating btn-sm btn-fb">
							            <i class="fab fa-facebook-f"></i>
							          </a>
							          <!--Twitter--
							          <a type="button" class="btn-floating btn-sm btn-tw">
							            <i class="fab fa-twitter"></i>
							          </a>
							          <!--Google +--
							          <a type="button" class="btn-floating btn-sm btn-gplus">
							            <i class="fab fa-google-plus-g"></i>
							          </a>
							          <!--Linkedin--
							          <a type="button" class="btn-floating btn-sm btn-ins">
							            <i class="fab fa-linkedin-in"></i>
							          </a>
							        </div>-->
							        <button type="button" class="btn btn-primary btn-rounded btn-md ml-4"
							          data-dismiss="modal">Close</button>
							
							
							      </div>
							
							    </div>
							    <!--/.Content-->
							
							  </div>
							</div>
							<!--Modal: modalYT-->
							
															  
															  
															  
															  
															  
															  
								  
								  
						        <button type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Ye Na</button>
						      </div>
						    </div>
						    <!--/.Content-->
						  </div>
						</div>
					<!--Modal: modalConfirmDelete-->

    			</div>
  			</div>
  			
			  <div class="card">
    			<img class="card-img-top" src="img/IMG_1940.JPG" alt="Card image cap">
    			<div class="card-body">
      				<h5 class="card-title">Gryllz</h5>
      				<p class="card-text">Joseph Rago aka Gryllz is a former soldier in the Aussie army, currently resident of Norway and looking for the One. He's also been known as a smart-ass little shit. Some call him a skinny big Lez.</p>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPoll-1">Free Gryllz</button>

					<!-- Modal: modalPoll -->
					<div class="modal fade right" id="modalPoll-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  						aria-hidden="true" data-backdrop="false">
  						<div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
    						<div class="modal-content">
      						<!--Header-->
      						<div class="modal-header">
      						  <p class="heading lead">Feedback request
      						  </p>
						
      						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      						    <span aria-hidden="true" class="white-text">×</span>
      						  </button>
      						</div>

					      <!--Body-->
					      <div class="modal-body">
					        <div class="text-center">
					          <i class="far fa-file-alt fa-4x mb-3 animated rotateIn"></i>
					          <p>
					            <strong>Your opinion matters</strong>
					          </p>
					          <p>How attracitve would you rate Gryllz?
					          </p>
					        </div>
					
					        <hr>
					
					        <!-- Radio -->
					        <p class="text-center">
					          <strong>Your rating</strong>
					        </p>
					        <div class="form-check mb-4">
					          <input class="form-check-input" name="group1" type="radio" id="radio-179" value="option1" checked>
					          <label class="form-check-label" for="radio-179">Very handsome</label>
					        </div>
					
					        <div class="form-check mb-4">
					          <input class="form-check-input" name="group1" type="radio" id="radio-279" value="option2">
					          <label class="form-check-label" for="radio-279">Kinda hot</label>
					        </div>
					
					        <div class="form-check mb-4">
					          <input class="form-check-input" name="group1" type="radio" id="radio-379" value="option3">
					          <label class="form-check-label" for="radio-379">Mediocre</label>
					        </div>
					        <div class="form-check mb-4">
					          <input class="form-check-input" name="group1" type="radio" id="radio-479" value="option4">
					          <label class="form-check-label" for="radio-479">Meh</label>
					        </div>
					        <div class="form-check mb-4">
					          <input class="form-check-input" name="group1" type="radio" id="radio-579" value="option5">
					          <label class="form-check-label" for="radio-579">Ew</label>
					        </div>
					        <!-- Radio -->
					
					        <p class="text-center">
					          <strong>How could he improve?</strong>
					        </p>
					        <!--Basic textarea-->
					        <div class="md-form">
					          <textarea type="text" id="form79textarea" class="md-textarea form-control" rows="3"></textarea>
					          <label for="form79textarea">Your message</label>
					        </div>
					
					      </div>
								
					
					      <!--Footer-->
					      <div class="modal-footer justify-content-center">
					        <button type="button" class="btn btn-primary waves-effect waves-light">Send
					          <i class="fa fa-paper-plane ml-1"></i>
					        </button>
					        <button type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cancel</button>
					      </div>
					    </div>
					  </div>
					</div>
					<!-- Modal: modalPoll -->
					
		
					
					<form name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form>
					
					
				
					
					<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "chef_fb@hotmail.com";
    $email_subject = "Gryllzshow Reply";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>
					
					
					
					
					
					
					
					
				  </div>
  			  </div>
		</div>		 
		  
		<div class="col-xs-12" style="height:100px;"></div>
		
		<h2 class="display-4 text-center mb-1">The Show</h2><hr class="mb-4">
		  
		<div id="content"></div>

		<script type="text/javascript">
    		var content = document.getElementById('content');

    		var xhr = new XMLHttpRequest();

			xhr.onreadystatechange = function(){
        if (xhr.readyState==4 && xhr.status==200)
        	{
            var data = JSON.parse(xhr.responseText);
            var itemsContainer = document.createElement('DIV');

            if(data.status == 'ok'){


                for( var i=0,t = data.items.length ; i < t ; ++i ){
                    var item = data.items[i];
                    var itemContainer = document.createElement('DIV');

                    var itemTitleElement = document.createElement('H4');
                    var itemLinkElement = document.createElement('A');
                    var itemDescriptionElement = document.createElement('P');
					var itemPubDate = document.createElement('P');
					var datum = item.pubDate;
					var datumText = datum.toString().slice(0, 10);
					
				
                    itemLinkElement.setAttribute('href' , item.link);
                    itemLinkElement.innerText = item.title;
                    itemTitleElement.appendChild(itemLinkElement);
					itemPubDate.innerText = datumText;
					
					
					
					
					
					itemContainer.classList.add("card", "p-4", "m-5","wow", "fadeIn");
					itemPubDate.classList.add("text-muted");


                    // note : make sure the content is XSS safe before using innerHTML
                    itemDescriptionElement.innerHTML = item.description;

                    itemContainer.appendChild(itemTitleElement);
                    itemContainer.appendChild(itemDescriptionElement);
					itemContainer.append("Release Date:");
					itemContainer.appendChild(itemPubDate);

                    itemsContainer.appendChild(itemContainer);

                }

                content.appendChild(itemsContainer);


            			}
        			}
    			};
    			xhr.open(
        		'GET',
        		'https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Ffeed.podbean.com%2Fthemilzandgryllzshow%2Ffeed.xml',
        		true
    			);
    		xhr.send();

		  </script>  
      </section>
      <!--Section: Cards-->
		
	  <!--Section: Notes-->
		<section>
			<div class="card-columns">
				<div class="card p-3 mb-3">
    				<blockquote class="blockquote mb-0 card-body">
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
						<br><p>It's fucking funny.</p>
      					<footer class="blockquote-footer">
        					<small class="text-muted">Florian from <cite title="Source Title">Switzerland</cite></small>
      					</footer>
    				</blockquote>
  				</div>
				
				<div class="card p-3 mb-3">
    				<blockquote class="blockquote mb-0 card-body">
      					<i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
						<br><p>I don't get it.</p>
      					<footer class="blockquote-footer">
        					<small class="text-muted">Svea from <cite title="Source Title">Germany</cite></small>
      					</footer>
    				</blockquote>
  				</div>
				
				<div class="card p-3 mb-3">
    				<blockquote class="blockquote mb-0 card-body">
      					<i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
						<br><p>Wtf.</p>
      					<footer class="blockquote-footer">
        					<small class="text-muted">Menue from <cite title="Source Title">Holland</cite></small>
      					</footer>
    				</blockquote>
  				</div>
			</div>
		</section>
	  <!--Section: Notes-->
		
		
	  <!--Section: Links-->
			<div class="col-xs-12" style="height:100px;"></div>
			<h2 class="display-4 text-center mb-1">Follow Us</h2><hr class="mb-4">
		
			<div class="text-center">
				<p >Whichever platform suits you best, we are fucking there. So go on, have a listen.</p>

				<span style="font-size: 100px;" class="mx-5">
  					<a href="https://www.facebook.com/The-Milz-and-Gryllz-show-2555429691154669" target="_blank" class="socials">
        				<i class="fab fa-facebook-f mr-3"></i>
      				</a>
				</span>
		
				<span style="font-size: 100px; color: #777;" class="mx-5">
  					<a href="https://open.spotify.com/show/62np0pia24rvXin7vYS6gX" target="_blank" class="socials">
        				<i class="fab fa-spotify mr-3"></i>
      				</a>
				</span>
		
				<span style="font-size: 100px; color: #777;" class="mx-5">
  					<a href="https://themilzandgryllzshow.podbean.com/" target="_blank" class="socials">
        				<i class="fab fa-soundcloud mr-3"></i>
      				</a>
				</span>
		
				<span style="font-size: 100px; color: #777;" class="mx-5">
  					<a href="https://podcasts.apple.com/ch/podcast/the-themilzandgryllzshows-podcast/id1468964381?l=en" target="_blank" class="socials">
        				<i class="fab fa-itunes mr-3"></i>
      				</a>
				</span>
			</div>
	  <!--Section: Links-->

	  <!--Section: Contact-->
	  <!--Section: Contact-->

	
		<div class="col-1" style="height: 100px;"></div>
    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small darken-2 mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://www.youtube.com/watch?v=fvtQYsckLxk" target="_blank"
        role="button">Fuck Off
        <i class="fas fa-download ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Questions
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/The-Milz-and-Gryllz-show-2555429691154669" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>
		
	  <a href="https://open.spotify.com/show/62np0pia24rvXin7vYS6gX" target="_blank">
	  	<li class="fab fa-spotify mr-3"></li>
	  </a>
	  <a href="https://themilzandgryllzshow.podbean.com/" target="_blank">
	  	<li class="fab fa-soundcloud mr-3"></li>
	  </a>
	  
	  <a href="https://podcasts.apple.com/ch/podcast/the-themilzandgryllzshows-podcast/id1468964381?l=en" target="_blank">
	  	<li class="fab fa-itunes-note"></li>
	  </a>

    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © <strong>2019</strong> The Milz and Gryllz Show <br> - <br> Website by Florian Bachofner
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
