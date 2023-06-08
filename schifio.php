<?php 
    // versione alternativa con if annidati non funzionante per i booleani nelle select che non vanno
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
                if($parkingSelect===$hotel["parking"] && $cani===$hotel["cani"] && ($hotel["vote"]>=($requestedVote))){?>
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