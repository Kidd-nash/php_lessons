<html>
    <head>
        <title><?php echo isset($title) ? $title : 'layout page' ?></title>
    </head>
    <body>
        <?php include_once( isset($sidebar) ? $sidebar : './sidebar.php' ) ?>

        <?php include_once('./sidebar.php') ?>
        <div>
            <?php if ( isset($content) ): ?>
                <?php echo $content ?>
            <?php else: ?>
                <p>this is the default layout page</p>
            <?php endif; ?>
        </div>
    </body>
</html>