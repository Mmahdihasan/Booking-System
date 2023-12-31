<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Booking Website</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<section class="my-5">
        <div class="py-5" >
          <h2 class="text-center" >Fill Form</h2>
        </div>
        <div class="w-50 m-auto" >
          <form action="info.php" method="post">

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






	</body>
</html>