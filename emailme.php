<?php include 'header.php'; ?>

    <h1><strong>Please fill in the form below to email directly to us!
    </strong></h1>
    <form action="mailto:tamle@learnvietnamesetoday.com" method="post" enctype="text/plain">
      <strong>Your Name:<br/>
      <br/>
      <input type="text" name="name" required><br/>
      <br/>
      Your Email Address/How you want me to contact you back:<br/>
      <br/>
      <input type="text" name="email" required><br/>
      <br/>
      Your message:<br/>
      <br/>
      <div id="comment">
      <input type="text" name="comment" required><br/></strong>
      </div>
      <br/>
      <input type="submit" value="Send">
      <input type="reset" value="Clear All">
    </form>

<?php include 'footer.php'; ?>
