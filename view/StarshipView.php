<div id="currentContent">
    <h1><?php echo $data["starship"]->name ; ?></h1>
    <ul>
        <li>Model: <?php echo $data["starship"]->model; ?></li>
        <li>Class: <?php echo $data["starship"]->starship_class; ?> </li>
        <li>Manufacturer: <?php echo $data["starship"]->manufacturer; ?></li>
        <li>Cost in credits: <?php echo $data["starship"]->cost_in_credits; ?></li>
        <li>Length: <?php echo $data["starship"]->length; ?></li>
        <li>Crew: <?php echo $data["starship"]->crew; ?></li>
        <li>Passengers: <?php echo $data["starship"]->passengers; ?></li>
        <li>Maximum atmosphering speed: <?php echo $data["starship"]->max_atmosphering_speed; ?></li>
        <li>Hyperdrive rating: <?php echo $data["starship"]->hyperdrive_rating; ?></li>
        <li>MGLT: <?php echo $data["starship"]->MGLT ; ?></li>
        <li>Cargo capacity: <?php echo $data["starship"]->cargo_capacity; ?></li>
        <li>Consumables: <?php echo $data["starship"]->consumables; ?></li>
        <li>Films:
            <ul>
                <?php 
                    foreach($data["starship"]->films as $film){
                        echo "<li><a href=\"/film/" . $film->id . "\"> " .$film->title."</a></li>";
                    }
                ?>
            </ul>
        </li>
        <li>Pilots: 
            <ul>
            <?php 
                foreach($data["starship"]->pilots as $pilot){
                    echo "<li><a onclick=\"getContent('/character/" . $pilot->id . "');\"> " .$pilot->name."</a></li>";
                }
            ?>
            </ul>
        </li>
    </ul>
</div>