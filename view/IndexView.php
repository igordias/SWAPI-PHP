<head>
    <title>Star Wars</title>
</head>
<body>
<h1>Lista de Filmes</h1>
<ul>
<?php
    $i = 1;
    foreach($data["films"] as $film){
        echo "<li><a href=\"/film/" . $i++ . "\"> " . $film->title . "</a></li>";
    }
?>
</ul>
</body>