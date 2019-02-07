<head>
    <title>Star Wars</title>
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
                    echo "<li>".$species->name."</li>";
                }
            ?>
        </ul>
    </li>
    <li>Starships: 
        <ul>
        <?php 
            foreach($data["film"]->starships as $starship){
                echo "<li>".$starship->name."</li>";
            }
        ?>
        </ul>
    </li>
    <li>Vehicles: 
        <ul>
        <?php 
            foreach($data["film"]->vehicles as $vehicle){
                echo "<li>".$vehicle->name."</li>";
            }
        ?>
        </ul>
    </li>
    <li>Characters: 
        <ul>
        <?php 
            foreach($data["film"]->characters as $character){
                echo "<li>".$character->name."</li>";
            }
        ?>
        </ul>
    </li>
    <li>Planets: 
        <ul>
        <?php 
            foreach($data["film"]->planets as $planet){
                echo "<li>".$planet->name."</li>";
            }
        ?>
        </ul>
    </li>
</ul>
</body>