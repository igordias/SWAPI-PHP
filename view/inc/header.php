<head>
    <title><?php echo $data["baseTitle"] . " - " . $data["pageTitle"]; ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo $data["baseURL"]; ?>/vendor/style/js/bootstrap.min.js"></script>
    <link href="<?php echo $data["baseURL"]; ?>/vendor/style/css/style.css" rel="stylesheet" media="screen">-
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <?php if($data["pageTitle"] == "Home"){ ?>
    <link href="<?php echo $data["baseURL"]; ?>/vendor/style/css/movie_card.css" rel="stylesheet" media="screen">
    <?php }else{ ?>
        
<script>
        function loadContent(url) { 
            $('#dynamiccontent').empty();
            $("#myModal").modal("show");
            $("#dynamiccontent").html('<center><img id="imgloading" src="<?php echo $data["baseURL"]; ?>/vendor/img/loading.gif" class="mx-auto d-block" /></center>');
            $('#dynamiccontent').load(url, function() {
                $('#imgloading').hide();
            });
        } 
</script>
<?php
    }
    ?>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $data["baseURL"]; ?>"><?php echo $data["baseTitle"]; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li<?php if($data["pageTitle"] == "Home"){ echo ' class="active"'; } ?>><a href="#">Home</a></li>
          </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
