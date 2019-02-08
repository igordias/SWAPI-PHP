

<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <h1>Star Wars Episodes</h1>
        </div>

        <div class="col-md-12">
            <?php
            $i = 1;
            foreach($data["films"] as $film){
            ?>
                <div class="movie-card">
                    <div class="movie-header poster" style="background: url('<?php echo $data["page"]["baseURL"] . "/vendor/img/poster/" . $i . ".jpg"; ?>') 100% center;">
                        <div class="header-icon-container">
                            <a href="#">
                                <i class="material-icons header-icon"></i>
                            </a>
                        </div>
                    </div>
                    <div class="movie-content">
                        <div class="movie-content-header">
                            <a href="<?php echo $data["page"]["baseURL"]; ?>/film/<?php echo $film->id; ?>">
                                <h3 class="movie-title"><?php echo $film->title; ?></h3>
                            </a>
                        </div>
                        <div class="movie-info">
                            <div class="info-section">
                                <label>Release date</label>
                                <span><?php echo $film->release_date; ?></span>
                            </div>
                            <div class="info-section">
                                <label>Episode #</label>
                                <span><?php echo $film->episode_id; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

            <?php 
                $i++;
            }
            ?>
        </div>
    </div>
</div>

</body>