<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Booking Website</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="ruetlogo.png">
				<ul>
					<li><a class="active" href="Mahdi.html">Home</a></li>
					<li><a href="https://www.ruet.ac.bd/">About</a></li>
					
					<li><a href="contactform.php">Contact</a></li>
					
				</ul>
			</nav>
			<div class="center">
			<h1>Welcome To RUET</h1>
			<h2>Booking Website</h2>
			<div class="buttons">
			<button>Book Now</button>
			<button class="btn2">Visit</button>

		</div>
</div>

<div class="pst">
		<div class="cards">
  <div class="card">
    <img class="card__image" src="audi.jpeg" alt="">
    <div class="card__content">
      <p>
      The university has well equipped and furnished Auditorium near the academic area. There are more than 450 seats for the participants.Workshop, seminar, presentation, conference, farewell program, orientation program, exhibition, special program, cultural program and other programs of the university are conducted in the auditorium.
      </p>
    </div>
    <div class="card__info">
      
      <div>
        <a href="./" class="card__link">View Article</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="cafe.jpeg" alt="">
    <div class="card__content">
      <p>
   
        The university has a cafeteria for the students, teachers and staffs near to the academic buildings. The cafeteria is well furnished for the participants. The cafeteria is divided in two portions of which one portion is for teachers and staffs and other portion is for students. The breakfast, tea, lunch and other foods are available in the cafeteria.
      </p>
    </div>
    <div class="card__info">
      
      <div>
        <a href="./" class="card__link">View Article</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="ghouse.jpeg" alt="">
    <div class="card__content">
      <p>
        The guest room is very new and every facilities of three star hotel room are available here. It is well structured and well interior designed. It is situated in the middle of Ruet campus and it is free from noises of outside.
     
        Awesome guest house in RUET. This guest house is not open for all common people. Special permission is required to stay here.
      </p>
    </div>
    <div class="card__info">
     
      <div>
        <a href="./" class="card__link">View Article</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="play.jpeg" alt="">
    <div class="card__content">
      <p>
        RUET Play Ground is the mostly used venue in Rajshahi University of Engineering & Technology, Rajshahi. Many Events like Sports competition, Convention, Astronomic Observation camp run in this ground. We the RUETians are proud to get this ground.
      </p>
    </div>
    <div class="card__info">
     
      <div>
        <a href="./" class="card__link">View Article</a>
      </div>
    </div>
  </div>
  
</div>
		
<section class="my-5">
        <div class="py-5" >
          <h2 class="text-center" >Fill Form</h2>
        </div>
        <div class="w-50 m-auto" >
          <form action="form.php" method="post">

           <div class="form-group">
             <label class="clr btn btn-success" >Username</label>
             <input type="text" name="user" autocomplete="off" class="form-control">
           </div>

           <div class="form-group">
             <label class="clr btn btn-success">Email Id</label>
             <input type="text" name="email" autocomplete="off" class="form-control">
           </div>

           <div class="form-group">
             <label class="clr btn btn-success">Mobile no</label>
             <input type="text" name="mobile" autocomplete="off" class="form-control">
           </div>

           <div class="form-group">
             <label class="clr btn btn-success">Data</label>
             <textarea class="form-control"
             name="data"></textarea>
           </div>
          <button type="submit" class="btn btn-success">Submit</button>
         </form>
        </div>
      </section>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>