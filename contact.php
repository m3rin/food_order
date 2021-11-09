    <?php include('partials-front/menu.php'); ?>
    <html>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;

}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.text-center{
    text-align: center;
}
h3 {
  color: #eb4d4b;
}
.container {
  border-radius: 5px;

  padding: 20px;
}
</style>
</head>
<body>



<div class="container">
  <form action="">
  	<h3 class="text-center ">CONTACT US FOR ANY QUERIES</h3>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name">

    <label for="lname">Contact Number</label>
    <input type="text" id="lname" name="contact" placeholder="Your contact number">


    <label for="subject">Your Message or Comment</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
   <?php include('partials-front/footer.php'); ?>