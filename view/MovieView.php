<?php
function getCharImage($name, $baseURL){
    $name = str_replace('-','', $name);
    $name = preg_replace('/\s+/', '-', $name);
    $file = dirname(__DIR__, 1) . "/vendor/img/char/" . $name . ".png";
    $filelink = $baseURL . "/vendor/img/char/" . $name . ".png";

    if (file_exists($file)) {
        return $filelink;
    } else {
        return null;
    }
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-4 text-center">
            
            <img src="<?php echo $data["page"]["baseURL"] . "/vendor/img/poster/" . $data["film"]->id .".jpg"; ?>" width="350px">
            <h1><?php echo $data["film"]->title; ?></h1>

            <p>Director: <?php echo $data["film"]->director; ?></p>
            <p>Producer(s): <?php echo $data["film"]->producer; ?> </p>
            <p>Release date: <?php echo $data["film"]->release_date; ?></p>
        </div>

    <div class="col-md-8">
        <h2>Species</h2>
                <?php 
                    $i = 0;
                    foreach($data["film"]->species as $species){
                        if($i != 0){
                            echo ", ";
                        }
                        echo "<a onclick=\"loadContent('/species/" . $species->id . "')\">" .$species->name."</a>";
                        $i++;
                    }
                ?>
        <h2>Starships</h2>
            <?php 
                $i = 0;
                foreach($data["film"]->starships as $starship){
                    if($i != 0){
                        echo ", ";
                    }
                    echo "<a onclick=\"loadContent('/starship/" . $starship->id . "')\">" .$starship->name."</a>";
                    $i++;
                }
            ?>

        <h2>Vehicles</h2>
            <?php 
                $i = 0;
                foreach($data["film"]->vehicles as $vehicle){
                    if($i != 0){
                        echo ", ";
                    }
                    echo "<a onclick=\"loadContent('/vehicle/" . $vehicle->id . "')\">" .$vehicle->name."</a>";
                    $i++;
                }
            ?>
        <h2>Characters</h2>
            <div class="row">
            <div class="col-md-12">
            <?php 
                $charsWithNoImageList = "";
                foreach($data["film"]->characters as $character){
                    $charImage = getCharImage($character->name, $data["page"]["baseURL"]);
                    if($charImage != null){
            ?>   
            <a onclick="loadContent('<?php echo $data["page"]["baseURL"] . "/character//" . $character->id; ?>')">
                
                <div class="col-sm-3 panel front">
                        <div class="cardTitle">Character</div>
                        <div class="cardImg" style="background-image: url('<?php echo $charImage; ?>')"></div>
                        <div class="cardTitleBottom"><?php echo $character->name; ?></div>
                </div>
                
            </a>
            <?php
                    }else{
                        if($charsWithNoImageList != ""){
                            $charsWithNoImageList .= ", ";
                        }
                        $charsWithNoImageList .= "\n<a onclick=\"loadContent('/character/" . $character->id . "')\">" .$character->name."</a>";
                    }
                }
            ?>
            </div>
            </div>
            <h3>Other characters:</h3>
                <p><?php echo $charsWithNoImageList; ?></p>
            
            <h2>Planets</h2> 
            <?php 
                $i = 0;
                foreach($data["film"]->planets as $planet){
                    if($i != 0){
                        echo ", ";
                    }
                    echo "<a onclick=\"loadContent('/planet/" . $planet->id . "')\">" .$planet->name."</a>";
                    $i++;
                }
            ?>
    </div>
    
    <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div id="dynamiccontent"></div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="closeModal();">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function closeModal() { 
            $("#myModal").modal('toggle');
            $('#modal_content').empty();
        } 
</script>



            </div>


</body>
