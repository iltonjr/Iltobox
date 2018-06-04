<?php
    $items_file = file_get_contents("includes/blocks.json");
    $items = json_decode($items_file, FALSE);
?>
<!DOCTYPE html>
<html>
<head>
    <?php require_once('includes/head.php') ?>
</head>
<body>
<header>
    <div class="container">

        <h1><img src="img/logo.svg" alt="Iltobox"></h1>

    </div>
</header>
<section id="content" class="content">
    <div class="container">

        <div class="row justify-content-center">

            <?php foreach($items as $row){ ?>
            <div class="col-md-3 col-6">
                <a href="<?= $row->link ?>" target="<?= (isset($row->target))?$row->target:'_self' ?>" class="link" title="<?= $row->title ?>">
                    <div class="block-item" style="background-color: <?= $row->color ?>; background-image: url('img/<?= $row->icon ?>')"></div>
                </a>
            </div>
            <?php } ?>

        </div>

        <div class="row">
            <div class="col-12 text-center ip-col">
                <?= $config->footer ?>
            </div>
        </div>

    </div>
</section>
<script>

</script>
</body>
</html>
