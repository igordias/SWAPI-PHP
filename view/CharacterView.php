<head>
    <title>Star Wars</title>
</head>
<body>
<h1><?php echo $data["character"]->name ; ?></h1>
<ul>
    <li>Birth year: <?php echo $data["character"]->birth_year; ?></li>
    <li>Eye color: <?php echo $data["character"]->eye_color; ?> </li>
    <li>Gender: <?php echo $data["character"]->gender; ?></li>
    <li>Hair color: <?php echo $data["character"]->hair_color; ?></li>
    <li>Height: <?php echo $data["character"]->height; ?></li>
    <li>Mass: <?php echo $data["character"]->mass; ?></li>
    <li>Skin color: <?php echo $data["character"]->skin_color; ?></li>
    <li>Home world: <?php echo $data["character"]->homeworld->name; ?></li>
    <li>Films:
        <ul>
            <?php 
                foreach($data["character"]->films as $film){
                    echo "<li>".$film->title."</li>";
                }
            ?>
        </ul>
    </li>
    <li>Species: 
        <ul>
        <?php 
            foreach($data["character"]->species as $species){
                echo "<li>".$species->name."</li>";
            }
        ?>
        </ul>
    </li>
    <li>Starships: 
        <ul>
        <?php 
            foreach($data["character"]->starships as $starship){
                echo "<li>".$starship->name."</li>";
            }
        ?>
        </ul>
    </li>
    <li>Vehicles: 
        <ul>
        <?php 
            foreach($data["character"]->vehicles as $vehicle){
                echo "<li>".$vehicle->name."</li>";
            }
        ?>
        </ul>
    </li>
</ul>
</body>