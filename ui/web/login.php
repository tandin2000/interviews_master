<!DOCKTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>

  <body style="background: #eee;">
      <div id = "frm" style="border: solid gray 1px; width: 20%; background: white;">
          <form action ="process.php" method ="post">
            <p>
                <lable>UserName :</labe>
                <input type="text" id="user" name="user" />
            </p>

            <p>
                <lable>password :</labe>
                <input type="password" id="pass" name="pass" />
            </p>

            <p>
              <input type="submit" id="btn" value="login" />
            </p>
          </form>
  </body>
</html>
