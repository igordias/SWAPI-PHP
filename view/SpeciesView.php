<head>
    <title>Star Wars</title>
</head>
<body>
<h1><?php echo $data["species"]->name ; ?></h1>
<ul>
    <li>Classification: <?php echo $data["species"]->classification; ?></li>
    <li>Designation: <?php echo $data["species"]->designation; ?> </li>
    <li>Average height: <?php echo $data["species"]->average_height; ?></li>
    <li>Average lifespan: <?php echo $data["species"]->average_lifespan; ?></li>
    <li>Eye colors: <?php echo $data["species"]->eye_colors; ?></li>
    <li>Hair colors: <?php echo $data["species"]->hair_colors; ?></li>
    <li>Skin colors: <?php echo $data["species"]->skin_colors; ?></li>
    <li>Language: <?php echo $data["species"]->language; ?></li>
    <li>Homeworld: <?php echo $data["species"]->homeworld->name; ?></li>
    <li>People: 
        <ul>
        <?php 
            foreach($data["species"]->people as $person){
                echo "<li>".$person->name."</li>";
            }
        ?>
        </ul>
    </li>

    <li>Films:
        <ul>
            <?php 
                foreach($data["species"]->films as $film){
                    echo "<li>".$film->title."</li>";
                }
            ?>
        </ul>
    </li>
</ul>
</body>