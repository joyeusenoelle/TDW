<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <title><?php bloginfo('name'); if (isset($this->g_opt['mamo_pagetitle'])){ echo " &raquo; " . $this->g_opt['mamo_pagetitle']; } ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
</head>

<body>
        <div id="content">
                <?php echo $this->mamo_template_tag_message(); ?>
        </div>
</body>
</html>
