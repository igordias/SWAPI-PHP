<head>
    <title>Star Wars - Film: <?php echo $data["film"]->title ; ?></title>
</head>
<body>
<h1><?php echo $data["film"]->title; ?></h1>
<ul>
    <li>Director: <?php echo $data["film"]->director; ?></li>
    <li>Producer: <?php echo $data["film"]->producer; ?> </li>
    <li>Release date: <?php echo $data["film"]->release_date; ?></li>
    <li>Species:
        <ul>
            <?php 
                foreach($data["film"]->species as $species){
                    echo "<li><a href=\"/species/" . $species->id . "\"> " .$species->name."</a></li>";
                }
            ?>
        </ul>
    </li>
    <li>Starships: 
        <ul>
        <?php 
            foreach($data["film"]->starships as $starship){
                echo "<li><a href=\"/starship/" . $starship->id . "\"> " .$starship->name."</a></li>";
            }
        ?>
        </ul>
    </li>
    <li>Vehicles: 
        <ul>
        <?php 
            foreach($data["film"]->vehicles as $vehicle){
                echo "<li><a href=\"/vehicle/" . $vehicle->id . "\"> " .$vehicle->name."</a></li>";
            }
        ?>
        </ul>
    </li>
    <li>Characters: 
        <ul>
        <?php 
            foreach($data["film"]->characters as $character){
                echo "<li><a href=\"/character/" . $character->id . "\"> " .$character->name."</a></li>";
            }
        ?>
        </ul>
    </li>
    <li>Planets: 
        <ul>
        <?php 
            foreach($data["film"]->planets as $planet){
                echo "<li><a href=\"/planet/" . $planet->id . "\"> " .$planet->name."</a></li>";
            }
        ?>
        </ul>
    </li>
</ul>
</body>