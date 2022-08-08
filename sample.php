<?php 
/* $firstName="John";
$homepage="https://www.example.com/";
$favouritesport="Hockey";
$age="24";
$queryString="firstName=".urlencode($firstName)."&amp;homepage=".urlencode($homepage)."&amp;favouritesport=".urlencode($favouritesport); 
/* $queryString="firstName=firstName"."&amp;homepage=$homepage"."&amp;favouritesport=$favouritesport"; */
/* echo "<h1> Welcome </h1>";
echo "<p> <a href='moreinfo.php?".$queryString."'>Find out  more info</a></p>"; */ 




$fields=array(
"firstName"=>"John",
"homepage"=>"https://www.example.com/",
"favouritesport"=>"Hockey"
);
echo htmlspecialchars(
http_build_query($fields));
echo "<br>";
echo "<p> <a href='moreinfo.php?".htmlspecialchars(http_build_query($fields))."'>Find out  more info</a></p>";

?>

