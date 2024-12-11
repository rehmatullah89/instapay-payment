<?php
require ('sale_.php');
?>
<!DOCTYPE html>
<html>
<body>
<form action="" method="post">
Order Description =><span style="color:red;">*</span> => <input type="text" name="OrderDescription" value="Some Item" required/> </br> 
Amount =><span style="color:red;">*</span> => <input type="text" name="Amount" value="50.0" required/> </br> 
Tax => <input type="text" name="Tax" value="9" readonly/> </br> 
Shipping Charges => <input type="text" name="Shipping" value="10" readOnly/> </br> 
Cc Number => <input type="text" name="CcNumber" value="12121212012"/> </br> 
Cc Exp => <input type="text" name="CcExp" value="1122"/> </br> 
Cvv => <input type="text" name="Cvv" value="012"/> </br> 
Company<span style="color:red;">*</span> => <input type="text" name="Company" value="expo company" required/> </br> 
First Name<span style="color:red;">*</span> => <input type="text" name="FirstName" value="Rehmat" required/> </br> 
Last Name => <input type="text" name="LastName" value="Ullah"/> </br>
Address1 => <input type="text" name="Address1" value="h1 s1 lhr"/> </br>
City => <input type="text" name="City" value="lahore"/> </br>
State => <input type="text" name="State" value="Punjab"/> </br>
Zip => <input type="text" name="Zip" value="54000"/> </br>
Phone => <input type="text" name="Phone" value="12345678"/> </br>
Email => <input type="email" name="Email" value="abc@gmail.com"/> </br>
<input type="submit" value="Set order" name="action_button"/> 
</form>
</body>
</html>