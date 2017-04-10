<div class="content-loop">
    <?php
        $url = "news_mock.json";
        //$url ="http://urlexample.com"
        $data = file_get_contents($url);
        $data = json_decode($data);
        if($data == null){
            ?>
            <div class="title-item roboto text-center">
                No hay resultados
            </div>
            <?php
        }else{
            foreach ($data as $nodo) {
                ?>
                <div class="item-loop">
                    <div class="header-item">
                        <div class="circle-image" style="background-image:url('<?php echo $nodo->image; ?>');"></div>
                        <div class="title-item roboto text-center">
                            <?php echo $nodo->title; ?>
                        </div>
                    </div>
                    <div class="item-internal-content">
                        <div class="internal-image" style="background-image:url('<?php echo $nodo->image; ?>');"></div>
                        <div class="internal-info roboto text-justify">
                            <?php echo $nodo->content; ?>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    ?>
</div>
