<!DOCTYPE html>
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style_r.css">
</head>
<body>

<form action="display.php" style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1>Registration Form</h1>
    <p>Please fill in this form to create an account.</p>
    <form class="form-inline"></form>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="First Name" name="fname" required>
    <input type="text" placeholder="Last Name" name="lname" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="browser"><b>Education Level</b></label>
    <input list="browsers" placeholder="select your option" name="browser" id="browser">
      <datalist id="browsers">
        <option value="DIPLOMA">
        <option value="DEGREE">
      </datalist><br>

     <label for="Coursename"><b>Course Name</b></label>
    <input type="text" placeholder="e.g Computer Science" name="Coursename" required>

    <label for="School_college"><b>School/College Name</b></label>
    <input list="school_college" placeholder="select your option" name="School_college" id="School_college">
      <datalist id="school_college">
        <option value="Universiti Tenaga Nasional"></option>
        <option value="University of Malaya"></option>
        <option value="Universiti Sains Malaysia"></option>
        <option value="Universiti Teknologi MARA"></option>
        <option value="Universiti Teknikal Malaysia Melaka"></option>
        <option value="Universiti Sultan Zainal Abidin"></option>
        <option value="Universiti Sains Islam Malaysia"></option>
        <option value="Universiti Putra Malaysia"></option>
        <option value="Universiti Pertahanan Nasional Malaysia"></option>
        <option value="Universiti Pendidikan Sultan Idris"></option>
      </datalist><br>

    <label for="Selfintro"><b>Introduce Yourself</b></label>
    <input type="text" placeholder="Please introduce yourself" name="Selfintro" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>


    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>