<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://www.nasa.gov/rss/dyn/educationnews.rss");  
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
  <h1>EDUCATION NEWS</h1>

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
