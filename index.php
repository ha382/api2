<html>
  <body>
    <ul>
      <?php 
        $data = file_get_contents("https://api.thecatapi.com/v1/breeds?limit=10?api_key=d02a85d8-e3dc-4126-a9df-d88199b795f2"); 
        $dataj = json_decode($data);
      ?>
      <?php foreach ($dataj as $i => $value) : ?>
        <?php 
          $urlstring = "https://api.thecatapi.com/v1/images/search?breed_id=" . $dataj[$i]->id;
          $cats = json_decode(file_get_contents($urlstring));
        ?>
        
      <?php endforeach ?>
    </ul>
  </body>
</html>