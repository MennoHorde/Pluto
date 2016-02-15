<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo isset($title) ? 'Pluto - ' . $title : 'Pluto'; ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo site_url('/assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('/assets/css/dataTables.bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('/assets/css/bootstrap-datepicker3.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('/assets/css/layouts/master_view.css'); ?>">
    <?php if(isset($css_styles)) : foreach($css_styles as $css_style) : ?>
        <link rel="stylesheet" href="<?php echo site_url('/assets/css/' . $css_style); ?>">
    <?php endforeach; endif; ?>

</head>
<body>

    <div class="container-fluid">
        <?php if(!empty($nav_view)) : ?>
            <div class="row">
                <?php echo $this->load->view($nav_view); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo $this->load->view($sub_view); ?>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="<?php echo site_url('/assets/js/vendor/jquery-1.11.2.min.js'); ?>"></script>
    <script src="<?php echo site_url('/assets/js/vendor/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo site_url('/assets/js/vendor/bootstrap-datepicker.min.js'); ?>"></script>
    <script src="<?php echo site_url('/assets/js/vendor/bootstrap-datepicker.nl.min.js'); ?>"></script>
    <script src="<?php echo site_url('/assets/js/vendor/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo site_url('/assets/js/vendor/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?php echo site_url('/assets/js/main.js'); ?>"></script>
    <?php if(isset($js_scripts)) : foreach($js_scripts as $js_script) : ?>
        <script src="<?php echo site_url('/assets/js/' . $js_script); ?>"></script>
    <?php endforeach; endif; ?>

</body>
</html>
