
<style type="text/css">
body {
    background-color: #1CFFE0;
}

h1 {
    font-size: 50px;
    border-radius: 20px;
}

h2 {
    font-size: 25px;
    border-radius: 20px;
    align: center;
    padding: 15px;
}

.nm {
    width: 200px;
    height: 30px;
    font-size: 15px;
}
.bd{
    width: 150px;
    height: 35px;
    font-size:20px;
}

.em{
    width: 200px;
    height: 30px;
    font-size: 15px;
}

.slt{
    width: 300px;
    height: 35px;
    font-size:20px;
}

.clr{
    width: 200px;
    height: 20px;
    font-size: 25px;
}

.spr{
    width: 200px;
    height: 20px;
}

button{
    width: 200px;
    height: 40px;
    font-size: 25px;
    font-weight: bold;

}
.container{
    display: grid;
    height: 100%;
    color: #fff;
    justify-items: center;
    align-items: center;
}

.contain {
    display: grid;
    padding: 15px;
    width: 60%;
    height: 70%;
    border: 3px solid #fff;
    color: #000000;
    grid-template: auto auto auto auto;  
    border-radius: 30px;
}
</style>
<body>
<div class = "container">
<div class = "contain"> 
<h1 align = "center">Enter Data</h1>
<form method="POST" action="" align = "center">
<h2>Name: <input type="text" name="complete_name" class="nm" maxlength = "50" /><br /></h2>
<h2>Birthdate: <input type="date" name="birthdate" class = "bd" /><br /></h2>
<h2>Email Address: <input type="email" name="email" class = "em" maxlength = "70" /><br /></h2>
<h2>Program:
<select name="program" class="slt">
<option value="BSCS">B.S. Computer Science</option>
<option value="BSIT">B.S. Information Technology</option>
<option value="BSIS">B.S. Information Systems</option>
</select>
<br /></h2>
<h2>Favorite Color: <input type="color" name="favorite_color" class = "clr"/><br /></h2>
<h2>Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" class = "spr" /><br /></h2>
<button>Submit</button>
</form>
</div>
</div>
<?php

if (isset($_POST['complete_name'])){
    echo "<h1>Your Profile</h1>";
    echo "Full name: " . $_POST['complete_name'];
    echo "<hr />";
    // Debug
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

if (isset($_POST['birthdate'])){
     echo "<hr />";
    echo "<h1>Your Birthdate</h1>";
    echo "Birth date: " . $_POST['birthdate'];
    echo "<hr />";
}

if (isset($_POST['email'])){
    echo "<hr />";
    echo "<h1>Your Email</h1>";
    echo "Email: " . $_POST['email'];
    echo "<hr />";
}

if (isset($_POST['program'])){
    echo "<hr />";
    echo "<h1>Your Program</h1>";
    echo "program: " . $_POST['program'];
    echo "<hr />";
}

if (isset($_POST['favourite_color'])){
    echo "<hr />";
    echo "<h1>Your Favourite color</h1>";
    echo "Color: " . $_POST['favourite_color'];
    echo "<hr />";
}

if (isset($_POST['superpower_level'])){
    echo "<hr />";
    echo "<h1>Your Superpower Level</h1>";
    echo "Superpower Level: " . $_POST['superpower_level'];
    echo "<hr />";
}
?>
</body>
