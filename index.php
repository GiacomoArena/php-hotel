<?php

$hotels = [

  [
      'name' => 'Hotel Belvedere',
      'description' => 'Hotel Belvedere Descrizione',
      'parking' => true,
      'vote' => 4,
      'distance_to_center' => 10.4
  ],
  [
      'name' => 'Hotel Futuro',
      'description' => 'Hotel Futuro Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 2
  ],
  [
      'name' => 'Hotel Rivamare',
      'description' => 'Hotel Rivamare Descrizione',
      'parking' => false,
      'vote' => 1,
      'distance_to_center' => 1
  ],
  [
      'name' => 'Hotel Bellavista',
      'description' => 'Hotel Bellavista Descrizione',
      'parking' => false,
      'vote' => 5,
      'distance_to_center' => 5.5
  ],
  [
      'name' => 'Hotel Milano',
      'description' => 'Hotel Milano Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 50
  ],

];

  foreach ($hotels as $hotel) {

    

      var_dump($hotel['name']);
      //var_dump($value);
    
    
  };

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <!-- //bootstrap -->
  <title>PHP Hotel</title>
</head>
<body>
  <h1>Hotel</h1>
  <ul>
    <?php foreach ($hotels as  $hotel): ?>
      
      <li> <?php  echo  $hotel['name'] ?> </li>
      
    <?php endforeach; ?>
  </ul>


  <div class="container">
    <table class="table">
      <thead class='d-flex'>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Parking</th>
          <th scope="col">Vote</th>
          <th scope="col">Distance to center</th>
        </tr>
      </thead>
      <tbody class='d-flex'>
        <tr class="row">
        <?php foreach ($hotels as  $hotel): ?>
          <th > <?php  echo  $hotel['name'] ?> </th>
        <?php endforeach; ?>
        </tr>
        
        <tr class="row">
        <?php foreach ($hotels as  $hotel): ?>
          <th  > <?php  echo  $hotel['description'] ?> </th>
        <?php endforeach; ?>
        </tr>
        
        <tr class="row">
        <?php foreach ($hotels as  $hotel): ?>
          <th  > <?php  echo  $hotel['parking'] ?> </th>
        <?php endforeach; ?>
        </tr>
        
        <tr class="row">
        <?php foreach ($hotels as  $hotel): ?>
          <th  > <?php  echo  $hotel['vote'] ?> </th>
        <?php endforeach; ?>
        </tr>
        
        <tr class="row">
        <?php foreach ($hotels as  $hotel): ?>
          <th  > <?php  echo  $hotel['distance_to_center'] ?> </th>
        <?php endforeach; ?>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>