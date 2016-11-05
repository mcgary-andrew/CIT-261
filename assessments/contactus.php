<!DOCTYPE html>
<head>
    <title>The McGary Family | Contact Us</title>
    <meta charset="UTF-8">
</head>
<body>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
    <main>
        <form method="post" action="index.php" id="contactform" style="
              background-color: black;
              ">

  <fieldset>

   <label for="firstname">First Name:</label>

   <input type="text" name="firstname" id="firstname" size="10">

   <label for="lastname">Last Name:</label>

   <input type="text" name="lastname" id="lastname" size="15">

   <label for="email">Email Address:</label>

   <input type="email" name="email" id="email" size="30">

   <label for="subject">Subject:</label>

   <input type="text" name="subject" id="subject" size="60">

   <label for="message">Message</label>

   <textarea name="message" id="message" rows="10" cols="60">

</textarea>

   <label for="action">&nbsp;</label>

   <input type="submit" name="action" id="action" value="Send">

  </fieldset>

</form>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
        