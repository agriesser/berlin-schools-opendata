<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $title_for_layout; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('app.css');
    
    echo $this->Html->script('modernizr.js');
    echo $this->Html->css('http://cdn.datatables.net/1.10.0/css/jquery.dataTables.css');
    echo $this->fetch('script');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    ?>
</head>
<body>
    <div class="contain-to-grid">
        <nav class="top-bar" data-topbar>
            <ul class="title-area">
                <li class="name">
                    <h1>
                        <a href="/"><?php echo $this->Html->image('school.jpg'); ?> Berliner Schulen</a>
                    </h1>
                </li>
            </ul>
        </nav>
    </div>
    
    <div class="row">
        <?php echo $this->Session->flash(); ?>
    </div>
    
    <div class="row">
        <?php echo $this->fetch('content'); ?>
    </div>
    
    <div class="row">
        <div class="large-12 columns">
            <hr />
            <div class="row">
                <div class="large-6 columns">
                    <p>&copy; 2013-2014 Initiative 2.0</p>
                </div>
                <div class="large-6 columns">
                    <ul class="inline-list right">
                        <li><?php echo $this->Html->link('Impressum', '/impressum'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php echo $this->Html->script('all.js'); ?>
    <script type="text/javascript" src="<?php echo $this->fetch('externalJs'); ?>"></script>
    <script defer="defer" type="text/javascript">
    <?php echo $this->fetch('initjs'); ?>
    </script>
</body>
</html>
