<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  color: white;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
 
  h1{
 text-align: center;
 color: black;
 }
 .container{
  height: auto;
  width: auto;
  padding: 0;
  margin: 0;
 }
 .container li{
 color: white;
 }
</style>
</head>
<body>

<ul>
  <li><a class="active" href="index.php">TOP NEWS</a></li>
  <li><a href="bnews.php">TECHNOLOGY NEWS</a></li>
  <li><a class="enews" href="health.php">HEALTH NEWS</a></li>
  <li><a href="envi.php">ENVIRONMENT NEWS</a></li>
</ul>

</body>
</html>


<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://rss.nytimes.com/services/xml/rss/nyt/Science.xml");  
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
  <h1>SCIENCE NEWS FROM THE NEW YORK TIMES</h1>

    <?php
 foreach( $content as $data )
 { ?>
 


<?php
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
   $pubDate = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
   echo "
   <ul>
            <h2><a href = '$link'> $title </a></h2>
              <ul>
              <li>$description</li>
              <li>$pubDate</li>
                  </ul>
    </ul>
            ";
  ?>
<?php
 }
?>
