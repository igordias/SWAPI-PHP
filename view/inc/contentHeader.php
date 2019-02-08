
    <script>
            function getContent(url) { 
                $("#currentContent").html('<center><img id="imgloading" src="<?php echo $data["baseURL"]; ?>/vendor/img/loading.gif" class="mx-auto d-block" /></center>');
                $('#currentContent').load(url, function() {
                    $('#modal_loading_content').hide();
                });
            } 
    </script>