<?php include 'topInclude.php';?>
	
	<div class = "Filler" align = "center">
		<div valign = "center" align = "center" class = "PopupDialog" id = "registerDiv">
            <form action = "register.php" method = "GET">
               <table width = "100%" height = "100%" align = "center" border = 0>
                  <tr><td></td></tr>
                  <tr height = "40">
                     <td><center><input placeholder="Name" id = "txtName" type = "text" name = "name" style="width: 200px;"><img src="../IMG/excl.png"></center></td>
                     <td><center><input placeholder="Surname" id = "txtSurname" type = "text" name = "surname" style="width: 200px;"></td>
                  </tr>
                  <tr height = "40">
                     <td colspan = "2" align = "center"><center><input placeholder="Mail" id = "txtMail" type = "text" name = "mail" style="width: 428px;"></center></td>
                  </tr>
                  <tr height = "40">
                     <td colspan = "2" align = "center"><center><input placeholder="Confirm Mail" id = "txtCMail" type = "text" name = "confirmMail" style="width: 428px;"></center></td>
                  </tr>
                  <tr height = "40">
                     <td colspan = "2" align = "center"><center><input placeholder="Password" id = "txtPass" type = "password" name = "pass" style="width: 428px;"></center></td>
                  </tr>
                  <tr height = "40">
                     <td colspan = "2" align = "center"><center><input placeholder="Confirm Password" id = "txtCPass" type = "password" name = "confirmPass" style="width: 428px;"></center></td>
                  </tr>
                  <tr>
                     <td colspan = "2" align = "center"><center><a class = "RegisterButtons" id = "btnRegister">Sign Up!</a></center></td>
                  </tr>
               </table>
            </form>
         </div>
     </div>
	
<?php include 'footer.php';?>