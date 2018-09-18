<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hello World</title>
  <meta charset='utf-8' >


  <link href='css/main.css' rel='stylesheet'>

</head>

<body>
  <h1>About me</h1>
  <img src='images/dog.jpg'>
  <p>

  A software developer with skills of C#, Java, HTML, CSS.

  </p>

  <?php
$a=array("Imagination is more important than knowledge.-Einstein",
"Life is like riding a bicycle. To keep your balance you must keep moving.-Einstein",
"Look deep into nature, and then you will understand everything better.-Einstein",
"No problem can be solved from the same level of consciousness that created it.-Einstein",
"I have no special talents. I am only passionately curious.-Einstein");
$random_keys=(rand(0,4));
echo $a[$random_keys]."<br>";

?>
</body>
</html>
