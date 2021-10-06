<?php
  session_start();
  include "koneksi.php";
 ?>
 
 <html>
 <body>
 <header>
 </header>
 <h2> Login </h2>
 
 <center>
    <table border="1">
      <form method="POST" action="ceklogin.php">
        <tr><td colspan="2" align="center">***FORM LOGIN***</td></tr>
        <tr><td>User Name<td><input type="text" name="username"></td></tr>
        <tr><td>Password<td><input type="password" name="password"></td></tr>
        <tr><td colspan="2" align="right">
          <input type="submit" value="LOGIN" >
        </td></tr>
        
      </form>
    </table>
  </center>
 
 </body>
 </html>