<body>
<html>
<head>
<link rel="stylesheet" href="css/form.css">
</head>

<center><h2 style="font-size:20pt;color:#ff3300;text-transform:none;"><span style="color:#607D8B;padding:30px 20px;background:#fff;border-radius:300px;font-size:30pt;">free<span style="color:#de3300;">WAYS</span></span></h2></center>
<center><div style="margin-top:100px;">
  <form class="form" action="etudient.php" method="post">

  <div class="inputGroup">
    <input type="text" required name="name" />
    <span class="inputBar"></span>
    <label>Name </label>
  </div>
  <div class="inputGroup">
    <input type="email" required name="email"/>
    <span class="inputBar"></span>
    <label>Email</label>
  </div>

    <div class="inputGroup">
      <input type="text" required name="diploma" />
      <span class="inputBar"></span>
      <label>diploma</label>
    </div>
    <div class="inputGroup">
      <input type="text" required name="fb" />
      <span class="inputBar"></span>
      <label>facebook ID</label>
    </div>

  <div class="inputGroup">
    <input type="phone" required name="phone"   pattern="\d{8}"/>
    <span class="inputBar"></span>
    <label>Phone Number</label>
  </div>
  <div class="">
  <input type="submit" value="submit" class="submit">
</div>
</form>
</center>
</body>
</html>
