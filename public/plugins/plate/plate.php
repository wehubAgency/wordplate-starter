<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/*
 * Plugin Name: Plate
 * Description: A theme support plugin for WordPlate.
 * Author: WordPlate
 * Author URI: https://wordplate.github.io
 * Version: 3.0.2
 * Plugin URI: https://github.com/wordplate/plate#readme
 */

declare(strict_types=1);

add_action('after_setup_theme', function () {
    require_if_theme_supports('plate-dashboard', __DIR__.'/src/dashboard.php');
    require_if_theme_supports('plate-editor', __DIR__.'/src/editor.php');
    require_if_theme_supports('plate-footer', __DIR__.'/src/footer.php');
    require_if_theme_supports('plate-login', __DIR__.'/src/login.php');
    require_if_theme_supports('plate-menu', __DIR__.'/src/menu.php');
    require_if_theme_supports('plate-permalink', __DIR__.'/src/permalink.php');
    require_if_theme_supports('plate-tabs', __DIR__.'/src/tabs.php');
    require_if_theme_supports('plate-toolbar', __DIR__.'/src/toolbar.php');
}, 100);
