<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

// Remove menu items.
add_action('admin_menu', function () {
    $items = get_theme_support('plate-menu');

    foreach (reset($items) as $item) {
        remove_menu_page($item);
    }
});
