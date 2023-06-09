<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
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

    <form action="hotel.php">
        <label for="">votazione minima</label>
        <select name="minimumVote" id="">
            <option value=0>qualsiasi</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
        </select>
        <label for="">parcheggio presente</label>
        <select name="parkingChoice" id="">
            <option value="0">qualsiasi</option>
            <option value=asd>si</option>
            <option value="">no</option> 
            <!-- da chiedere a luca per dare il value booleano -->
        </select>
        <button type="submit"> ricerca</button>
    </form>
    <?php $parkingSelect= $_GET["parkingChoice"];
        $requestedVote= $_GET["minimumVote"];
    ?>
    <h1><?php echo $parkingSelect  ?></h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">parcheggio</th>
      <th scope="col">voto</th>
      <th scope="col">distanza dal centro</th>
    </tr>
  </thead>
  <tbody>

    <?php
     $filteredHotels=[];
     foreach ($hotels as $hotel) {
        if ($hotel["vote"]>=($requestedVote)){
            if ($parkingSelect=="asd") {
                if($hotel["parking"]==true){
                    $filteredHotels[]=$hotel;
                }
            };
            if ($parkingSelect=="") {
                if($hotel["parking"]==false){
                    $filteredHotels[]=$hotel;
                }
            };
            if ($parkingSelect=="0") {
                
                    $filteredHotels[]=$hotel;
                
            };           
        }
    } 

    foreach ($filteredHotels as $hotelFiltered){?>
            <tr>
            <th scope="row"><?php echo $hotelFiltered["name"] ?></th>
            <td><?php echo $hotelFiltered["description"] ?></td>
            <td><?php ($hotelFiltered["parking"])? $park="si": $park="no"; echo $park ?></td>
            <td><?php echo $hotelFiltered["vote"] ?></td>
            <td><?php echo $hotelFiltered["distance_to_center"] ?></td>
            </tr>
            <?php }?>
            </tbody>
  </table>
    

    <!-- <?php
    // foreach ($hotels as $hotel){
    //     foreach($hotel as $category => $data){?>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
            
            echo $category . ": " . $data . "<br>";
        }
    }
    ?> -->




</body>
</html>