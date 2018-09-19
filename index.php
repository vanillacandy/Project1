<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hello World</title>
  <meta charset='utf-8' >


  <link href='css/main.css' rel='stylesheet'>

</head>

<body>
  <h1>About me</h1>
  <h1>Catherine Lin</h1>
  <img src='images/dog.jpg'>
  <p>

I work as a software developer in South Carolina, Boeing. I work in various projects in different programming languages, and before this I studied in Mathematics in college. 
Outside of work, my passion is in music, I have played the classical piano for ten more years, and I have played Beethoven, Bach, Liszt, and Debussy...etc. I am still hoping to learn guitar one day and start a band.
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
