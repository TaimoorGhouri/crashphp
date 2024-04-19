<?php
if (isset($_POST['submit'])){
$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);
echo $name;
echo $age;

}

?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="POSt">
<div>
<label for="name">name:</label>
<input type="text" name="name">
</div>
<div>
    <label for="age">age:</label>
    <input type="text" name="age">
</div>
<input type="submit" value="submit" name="submit">
</form>