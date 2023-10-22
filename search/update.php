
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Register</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="background.css" />
    <link rel="stylesheet" href="forms.css" />
  </head>
  <body>
    <div class="wrapper">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="banner">
      <div class="content">
        <form action="userupdate.php" method="post" id="form">
          <input type="hidden" name="id" >
          <h1>Register</h1>
          <hr />

          <div class="form-input fullname">
            <span>Full Name:</span>
            <div class="inputs">
              <input
                type="text"
                name="first_name"
                placeholder="First Name"
                id="input"
                class="input-name"
               
              />
              <input
                type="text"
                name="last_name"
                placeholder="Last Name"
                id="input"
               
              />
            </div>
          </div>

          <div class="form-input email">
            <span>Email Address:</span>
            <div class="inputs">
              <input
                class="input-email"
                type="email"
                name="email"
                placeholder="ex. iannn@gmail.com"
                id="input"
                class="add"
            
              />
            </div>
          </div>
          <div class="btn">
            <button type="submit" id="submit-btn">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <script>
      const form = document.getElementById("form");
      const inputField1 = document.getElementById("input");
      const submitButton = document.getElementById("submit-btn");

      form.addEventListener("submit", function (event) {
        if (!inputField1.value) {
          alert("Please fill in all the missing fields before submitting.");
          event.preventDefault();
        }
      });
    </script>
  </body>
</html>