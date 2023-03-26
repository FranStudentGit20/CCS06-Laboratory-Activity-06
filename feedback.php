
<style type="text/css">
body {
    background-color: #1CFFE0;
}

h1 {
    font-size: 70px;
    border-radius: 20px;
}

h2 {
    font-size: 35px;
    border-radius: 20px;
    align: center;
    padding: 2px;
}

.nm {
    width: 300px;
    height: 40px;
    font-size: 20px;
}

.em{
    width: 300px;
    height: 40px;
    font-size: 20px;
}

.slt{
    width: 250px;
    height: 40px;
    font-size: 20px;
}

.sl{
    width: 300px;
    height: 30px;
}

.fm{
    width: 500px;
    height: 50px;
    font-family: Arial;
    font-size: 20px;
    margin: 1px;
    padding: 1px;
    text-align: justify;
}

.button{
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
    height: 100%;
    border: 3px solid #fff;
    color: #000000;
    grid-template: auto auto auto auto;  
    border-radius: 30px;
}
</style>
<body>
<div class = "container">
<div class = "contain">
<h1 align = "center">Your Feedback</h1>
<form method="post" action="thankyou.php" align = "center">
<h2>Full Name: <input type="text" name="complete_name" class="nm" maxlength = "50" /><br /></h2>
<h2>Email Address: <input type="email" name="email" class = "em" maxlength = "70" /><br /></h2>
<h2>Type:
<select name="type" class="slt">
<option value="inquiry">Inquiry</option>
<option value="feedback">Feedback</option>
<option value="other">Other</option>
</select>
<br /></h2>
<h2>Satisfaction Level: <input type="range" name="satisfaction_level" class = "sl" value = "5" min = "1" max = "10"/><br /></h2>
<h2>Feedback Message: <input type="text" name="feedback_message" maxlength = "70000"class = "fm" /><br /></h2>
<input type ="submit" name="submit" value="submit" class="button">
</form>
</div>
</div>
</body>
