<?php 
    // versione alternativa con if annidati non funzionante per i booleani nelle select che non vanno
    // per risolvere devo lavorarmi il dato che mi arriva e trasformarlo in booleano a mano con php usando un if tipo 
    // if $$parkingSelect==="si" allora $parkingqualcosa = true 
    foreach ($hotels as $hotel){
            if($parkingSelect==="tutto" && ($hotel["vote"]>=($requestedVote))){?>
                <tr>
                <th scope="row"><?php echo $hotel["name"] ?></th>
                <td><?php echo $hotel["description"] ?></td>
                <td><?php ($hotel["parking"])? $park="si": $park="no"; echo $park ?></td>
                <td><?php echo $hotel["vote"] ?></td>
                <td><?php echo $hotel["distance_to_center"] ?></td>
                </tr>
                <?php }
                if($parkingSelect===$hotel["parking"]  && ($hotel["vote"]>=($requestedVote))){?>
                <tr>
                <th scope="row"><?php echo $hotel["name"] ?></th>
                <td><?php echo $hotel["description"] ?></td>
                <td><?php ($hotel["parking"])? $park="si": $park="no"; echo $park ?></td>
                <td><?php echo $hotel["vote"] ?></td>
                <td><?php echo $hotel["distance_to_center"] ?></td>
                </tr>
                <?php }} ?>
                
    <!-- versione alternativa che funziona ma ha il triplo iff dato che i booleani non vanno -->
                <?php 
                foreach ($hotels as $hotel){
                if($parkingSelect==="tutto" && ($hotel["vote"]>=($requestedVote))){?>
                <tr>
                <th scope="row"><?php echo $hotel["name"] ?></th>
                <td><?php echo $hotel["description"] ?></td>
                <td><?php ($hotel["parking"])? $park="si": $park="no"; echo $park ?></td>
                <td><?php echo $hotel["vote"] ?></td>
                <td><?php echo $hotel["distance_to_center"] ?></td>
                </tr>
                <?php }
                if($parkingSelect==="si" && $hotel["parking"]==true && ($hotel["vote"]>=($requestedVote))){?>
                    <tr>
                    <th scope="row"><?php echo $hotel["name"] ?></th>
                    <td><?php echo $hotel["description"] ?></td>
                    <td><?php ($hotel["parking"])? $park="si": $park="no"; echo $park ?></td>
                    <td><?php echo $hotel["vote"] ?></td>
                    <td><?php echo $hotel["distance_to_center"] ?></td>
                    </tr>
                    <?php }
                if($parkingSelect==="no" && $hotel["parking"]==false && ($hotel["vote"]>=($requestedVote))){?>
                    <tr>
                    <th scope="row"><?php echo $hotel["name"] ?></th>
                    <td><?php echo $hotel["description"] ?></td>
                    <td><?php ($hotel["parking"])? $park="si": $park="no"; echo $park ?></td>
                    <td><?php echo $hotel["vote"] ?></td>
                    <td><?php echo $hotel["distance_to_center"] ?></td>
                    </tr>
                    <?php }} ?>

                    <!-- versione funzionante e snella -->
                    <?php 
  if ($parkingSelect=="si") {
    $parkingSelectB=true;
  };
  if ($parkingSelect=="no") {
    $parkingSelectB=false;
  };
   echo "<h1>$parkingSelectB</h1>" ;
    // per risolvere devo lavorarmi il dato che mi arriva e trasformarlo in booleano a mano con php usando un if tipo 
    // if $$parkingSelect==="si" allora $parkingqualcosa = true 
    foreach ($hotels as $hotel){
            if($parkingSelect==="0" && ($hotel["vote"]>=($requestedVote)) || $parkingSelectB===$hotel["parking"] && ($hotel["vote"]>=($requestedVote))){?>
                <tr>
                <th scope="row"><?php echo $hotel["name"] ?></th>
                <td><?php echo $hotel["description"] ?></td>
                <td><?php ($hotel["parking"])? $park="si": $park="no"; echo $park ?></td>
                <td><?php echo $hotel["vote"] ?></td>
                <td><?php echo $hotel["distance_to_center"] ?></td>
                </tr>
                <?php }} ?>

                <!-- versione funzionante meno snella -->
                <?php 
  if ($parkingSelect=="si") {
    $parkingSelectB=true;
  };
  if ($parkingSelect=="no") {
    $parkingSelectB=false;
  };
   echo "<h1>$parkingSelectB</h1>" ;
    // per risolvere devo lavorarmi il dato che mi arriva e trasformarlo in booleano a mano con php usando un if tipo 
    // if $$parkingSelect==="si" allora $parkingqualcosa = true 
    foreach ($hotels as $hotel){
            if($parkingSelect==="0" || $parkingSelectB===$hotel["parking"] && ($hotel["vote"]>=($requestedVote))){?>
                <tr>
                <th scope="row"><?php echo $hotel["name"] ?></th>
                <td><?php echo $hotel["description"] ?></td>
                <td><?php ($hotel["parking"])? $park="si": $park="no"; echo $park ?></td>
                <td><?php echo $hotel["vote"] ?></td>
                <td><?php echo $hotel["distance_to_center"] ?></td>
                </tr>
                <?php }
                if($parkingSelectB===$hotel["parking"]  && ($hotel["vote"]>=($requestedVote))){?>
                <tr>
                <th scope="row"><?php echo $hotel["name"] ?></th>
                <td><?php echo $hotel["description"] ?></td>
                <td><?php ($hotel["parking"])? $park="si": $park="no"; echo $park ?></td>
                <td><?php echo $hotel["vote"] ?></td>
                <td><?php echo $hotel["distance_to_center"] ?></td>
                </tr>
                <?php }} ?>