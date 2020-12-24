<!DOCKTYPE html>
<html>
  <head>
    <title>Second table</title>
  </head>

  <body style="background: #eee;">
      <div id = "frm" style="border: solid gray 1px; width: 20%; background: white;">
        <?php
          include_once 'Index.php';
          $username = $_POST["user"];
          $result = mysqli_query($conn,"SELECT * FROM User where username = '$username'");
        ?>
        <?php
          if (mysqli_num_rows($result) > 0) {
        ?>
          <table height="50%" width="50%">
            <tr>
              <td>ID: </td>
              <td><?php echo $row["id"]; ?></td>
            </tr>

            <tr>
                <td>Name: </td>
                <td><?php echo $row["name"]; ?></td>
            </tr>

            <tr>
                <td>Username: </td>
                <td><?php echo $row["username"]; ?></td>
            </tr>

            <tr>
                <td>Email: </td>
                <td><?php echo $row["email"]; ?></td>
            </tr>
          </table>
  </body>
</html>
