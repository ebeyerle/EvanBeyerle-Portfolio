<?php
session_start();
require_once'helpers/security.php';
$errors=isset($_SESSION['errors'])?$_SESSION['errors']:[];
$fields=isset($_SESSION['fields'])?$_SESSION['fields']:[];
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="style.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>Evan Beyerle</title>
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/LetterE.svg/768px-LetterE.svg.png">
	
	
	

</head>
<body>

	<div class="header">
  <a href="" class="logo">E~B</a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a class="link" href="#about">About</a></li>
		<li><a href="#boxes">Portfolio</a></li>
		<li><a href="#contact">Contact</a></li>
  </ul>
	</div>

	<section id="home">
		<div class="container">
			<div id="circle">
				<div class="name">
					<h2 class="circle-name">Evan Beyerle</h2>
				</div>
			</div>
		</div>
	</section>

	<section id="about">
		<div class="container">
			<h1>About Me</h1>
			<img class='img-border' src='clemson-pic.jpg', alt='A picture of Evan Beyerle.', title='A picture of Evan Beyerle.'>
			<p class="centering">I'm a graduate from Clemson University. While attending Clemson 
			I attended several different computer science courses. It was in these courses where
			I learned how to create programs in C++, Java, and Python. I learned about how to 
			implement different algorithms and data structures for class projects. After I graduated
			from Clemson I continued my learning with creating web applications.</p>

			<hr>

			<h4>Programming Langauges</h4>
			<p>C++, Java, Python, Javascript, PHP, SQL</p>
			
			<h4>Frameworks & Tools</h4>
			<p>Bootstrap, Node.js, React</p>
			
			<hr>
				
		</div>
	</section>
	
	<section id="boxes">
		<div class="container">
		
			<h1 style="color: white;">Portfolio</h1>
		
			<div class="box">
				<img src="pokedex-react.jpg">
				<h3>Pokedex React App</h3>
				<p>A React app that uses an API to fetch the data of Pokemon. Clicking on the card of the Pokemon bring up a info page.</p>
				<a href="https://eb-react-pokedex.herokuapp.com/#/"><button>Demo</button></a><a href="https://github.com/ebeyerle/ReactPokedex"><button>Code</button></a>
			</div>
			<div class="box">
				<img src="wikipedia-page.png">
				<h3>Wikipedia Viewer</h3>
				<p>A web app that will show up to 10 wikipedia article links of whatever is typed into the search field.</p>
				<a href="https://eb-portfolio-wikipedia.herokuapp.com/"><button>Demo</button></a><a href="https://github.com/ebeyerle/wikipedia-search-app"><button>Code</button></a>
			</div>
			<div class="box">
				<img src="notepage.png">
				<h3>Notepage Web App</h3>
				<p>Generates notes on the template depending on the selection the user picks on the selection box on the bottom of the page.</p>
				<a href="https://codepen.io/ebeyerle/full/eKGrdX"><button>Demo</button></a><a href="https://codepen.io/ebeyerle/pen/eKGrdX"><button>Code</button></a>
			</div>
					
		</div>
			
	</section>
	
	<section id="contact">
		<div class="container">
			<h1>Contact</h1>
			<form class="contact-info" action="contact.php" method="POST">
				<label class="newsletter-label">Name:</label>
				<input type="text" name="name" placeholder="Enter Name" class="text-input w-input" required />
				<label class="newsletter-label">E-mail:</label>
				<input type="text" placeholder="Enter Email Address" class="text-input w-input" required />
				<label class="newsletter-label">Message:</label>
				<textarea name="message" placeholder="Text goes here..." cols="21" rows="4" class="message-text-field area w-input" required></textarea>
				<input class="form-button" type="submit" value="Send" />
			</form>
			
		</div>
	</section>
	
	<footer>
		<div class="information2">
			<p>Telephone: (864)952-9755</p>
			<p>Email: ebeyer2007@hotmail.com</p>
			<div class="git social-icons text-center"><a  href="#"><i class="fa fa-fw fa-linkedin fa-2x"></i></a></div>
			<div class="git social-icons text-center"><a  href="https://github.com/ebeyerle"><i class="fa fa-fw fa-github fa-2x"></i></a></div>
		</div>
	</footer>
	
	<script>
	
		var x = document.getElementById("drop-hidden");
	
		function showDropdown(){
			console.log("In function");
			
			if (x.className === "other") {
				x.className = "drop-hidden";
		    }
		    else {
			  x.className = "other";
		    }
		}
	
		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "other") {
			x.className += "drop-hidden";
		  } else {
			x.className = "o";
		  }
		}
		
		function myFunction() {
		  var x = document.getElementById("myLinks");
		  if (x.style.display === "block") {
			x.style.display = "none";
		  } else {
			x.style.display = "block";
		  }
		}
	</script>
	
</body>
</html>

<?php
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>


<!--
				<input class="text-button" type="submit" value="Send" />
				<div class="form-group">
					<label class="form-control-label text-light" for="nameInput">Name</label>
					<input type="text" class="form-control  form-control-lg" id="nameInput" placeholder="Name">
				</div>
				<div class="form-group">
					<label class="form-control-label text-light" for="emailInput">Email address</label>
					<input type="email" class="form-control form-control-lg" id="emailInput" aria-describedby="Email" placeholder="Enter email">              
				</div>
				<div class="form-group">
					<label class="form-control-label text-light" for="messageTextArea">Message</label>
					<textarea class="form-control form-control-lg" id="messageTextArea" rows="3"></textarea>
				</div>
				<button type="submit" class="btn text-light">Submit</button>
				<input class="text-button" type="submit" value="Send" />
-->