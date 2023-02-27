<?php
$cookie_name = $_POST['name'];
$cookie_value = $_POST['email'];
setcookie($cookie_name, $cookie_value, time() + 60, "/");

if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];

  if(time()+60){
    setcookie($cookie_name, $cookie_value, time() - 60, "/");
}
}

echo "<script>
if(window.history.replaceState){
    window.history.replaceState(null,null,windows.location.href);
}
</script>";

?>