< !DOCTYPE html >
< html >
< head >
  < title > Voyages.tours - Explore the world with us</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#featured">Featured Destinations</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section id="featured">
      <h2>Featured Destinations</h2>
      <p>Take a look at our most popular destinations:</ p >
      < ul >
        < li >< a href = "#paris" > Paris, France </ a ></ li >
        < li >< a href = "#tokyo" > Tokyo, Japan </ a ></ li >
        < li >< a href = "#newyork" > New York, USA </ a ></ li >
      </ ul >
    </ section >
    < section id = "about" >
      < h2 > About Us </ h2 >
      < p > Voyages.tours is a travel company dedicated to bringing you the best travel experiences. We offer a wide range of destinations and activities to choose from, so you can explore the world with us.</p>
    </section>
    <section id="contact">
      <h2>Contact Us</h2>
      <form action="send-email.php" method="post">
        <label for="name">Name:</ label >
        < input type = "text" id = "name" name = "name" required >< br >
        < label for= "email" > Email:</ label >
        < input type = "email" id = "email" name = "email" required >< br >
        < label for= "message" > Message:</ label >
        < textarea id = "message" name = "message" required ></ textarea >< br >
        < input type = "submit" value = "Send Message" >
      </ form >
    </ section >
  </ main >
  < footer >
    < p > Copyright & copy; <? php echo date("Y"); ?> Voyages.tours </ p >
  </ footer >
</ body >
</ html >