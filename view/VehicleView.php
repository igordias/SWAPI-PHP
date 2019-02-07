<head>
    <title>Star Wars</title>
</head>
<body>
<h1><?php echo $data["vehicle"]->name ; ?></h1>
<ul>
    <li>Model: <?php echo $data["vehicle"]->model; ?></li>
    <li>Class: <?php echo $data["vehicle"]->vehicle_class; ?> </li>
    <li>Manufacturer: <?php echo $data["vehicle"]->manufacturer; ?></li>
    <li>Length: <?php echo $data["vehicle"]->length; ?></li>
    <li>Cost in credits: <?php echo $data["vehicle"]->cost_in_credits; ?></li>
    <li>Crew: <?php echo $data["vehicle"]->crew; ?></li>
    <li>Passengers: <?php echo $data["vehicle"]->passengers; ?></li>
    <li>Maximum atmosphering speed: <?php echo $data["vehicle"]->max_atmosphering_speed; ?></li>
    <li>Cargo capacity: <?php echo $data["vehicle"]->cargo_capacity; ?></li>
    <li>Consumables: <?php echo $data["vehicle"]->consumables; ?></li>
    <li>Films:
        <ul>
            <?php 
                foreach($data["vehicle"]->films as $film){
                    echo "<li>".$film->title."</li>";
                }
            ?>
        </ul>
    </li>
    <li>Pilots: 
        <ul>
        <?php 
            foreach($data["vehicle"]->pilots as $pilot){
                echo "<li>".$pilot->name."</li>";
            }
        ?>
        </ul>
    </li>
</ul>
</body>