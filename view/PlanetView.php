<head>
    <title>Star Wars - Planet: <?php echo $data["planet"]->name ; ?></title>
</head>
<body>
<h1><?php echo $data["planet"]->name ; ?></h1>
<ul>
    <li>Diameter: <?php echo $data["planet"]->diameter; ?></li>
    <li>Rotation period: <?php echo $data["planet"]->rotation_period; ?> </li>
    <li>Orbital period: <?php echo $data["planet"]->orbital_period; ?></li>
    <li>Gravity: <?php echo $data["planet"]->gravity; ?></li>
    <li>Population: <?php echo $data["planet"]->population; ?></li>
    <li>Climate: <?php echo $data["planet"]->climate; ?></li>
    <li>Terrain: <?php echo $data["planet"]->terrain; ?></li>
    <li>Surface water: <?php echo $data["planet"]->surface_water; ?>% of the surface</li>
    <li>Residents: 
        <ul>
        <?php 
            foreach($data["planet"]->residents as $resident){
                echo "<li><a href=\"/character/" . $resident->id . "\"> " .$resident->name."</a></li>";
            }
        ?>
        </ul>
    </li>
    <li>Films:
        <ul>
            <?php 
                foreach($data["planet"]->films as $film){
                    echo "<li><a href=\"/film/" . $film->id . "\"> " .$film->title."</a></li>";
                }
            ?>
        </ul>
    </li>
</ul>
</body>