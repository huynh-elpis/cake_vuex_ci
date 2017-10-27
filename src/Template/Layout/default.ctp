<?php

use \Cake\Core\Configure;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sermina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="<?= $this->Aou->getVersion('css/style.css') ?>"/>
    <link rel="stylesheet" href="<?= $this->Aou->getVersion('css/jquery-ui.css') ?>"/>
    <script src="<?= $this->Aou->getVersion('js/jquery.js') ?>"></script>
</head>
<body>
<div class="container">
    <div class="main grey-bg">
        <?= $this->fetch('content') ?>
        <div class="background-popup"></div>
    </div>
</div>
<script src="<?= $this->Aou->getVersion('js/jquery-ui.js') ?>"></script>
<script src="<?= $this->Aou->getVersion('js/detectbrowser.js') ?>"></script>
<script src="<?= $this->Aou->getVersion('js/pop-up.js') ?>"></script>
<script src="<?= $this->Aou->getVersion('js/common.js') ?>"></script>
</body>
</html>
