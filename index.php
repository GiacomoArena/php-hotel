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
  <link rel="stylesheet" href="css/style.css">
  <title>PHP Hotel</title>
</head>

<body>
  <h1>Hotel</h1>
  <!-- <ul>
    <?php foreach ($hotels as  $hotel): ?>
      <?php foreach ($hotel as  $value): ?>
        <li > <?php  echo  $value ?> </li>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </ul> -->
  
  <div class="container">
    <table class="table ">
      <tbody class='d-flex'>

        <tr class="row">
          <th >Name</th>
          <?php foreach ($hotels as  $hotel): ?>
            <td > <?php  echo  $hotel['name'] ?> </td>
          <?php endforeach; ?>
        </tr>

        <tr class="row">
          <th >Description</th>
          <?php foreach ($hotels as  $hotel): ?>
            <td  > <?php  echo  $hotel['description'] ?> </td>
          <?php endforeach; ?>
        </tr>

        <tr class="row">
          <th >Vote</th>
          <?php foreach ($hotels as  $hotel): ?>
            <td  > <?php  echo  $hotel['vote'] ?> </td>
          <?php endforeach; ?>
        </tr>

        <tr class="row">
          <th >Distance to center</th>
          <?php foreach ($hotels as  $hotel): ?>
            <td  > <?php  echo  $hotel['distance_to_center'] ?> </td>
          <?php endforeach; ?>
        </tr>

        <tr class="row">
          <th >Parking</th>
          <?php foreach ($hotels as  $hotel): ?>
            <td  > <?php  if ($hotel['parking'] === false) {
              $hotel['parking'] = 'no';
              echo $hotel['parking'];
            }else{
              $hotel['parking'] = 'si';
              echo $hotel['parking'];
            };
              ?>  </td>
          <?php endforeach; ?>
        </tr>
  
      </tbody>
    </table>
  </div>
</body>
</html>