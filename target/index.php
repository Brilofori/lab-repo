<?php
echo '<h1>Lab Target -Salutations from ubuntu server (192.168.56.101)</h1>';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
   $name = $_POST['name'] ?? '';
   echo "<p>Hello, $name</p>";
}
?>
<form method ='post'><input name='name' /><button type='submit'><Send</button></form>

