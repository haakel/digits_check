<?php


// حذف آپشن 'my_plugin_enable_addons' هنگام غیرفعال شدن افزونه Digits
function remove_my_plugin_enable_addons_option($plugin) {
    // بررسی اینکه آیا افزونه غیرفعال شده افزونه Digits است
    if ($plugin == 'digits/digits.php') { // مسیر افزونه Digits در وردپرس
        // حذف آپشن 'my_plugin_enable_addons'
        delete_option('my_plugin_enable_addons');
    }
}

// هوک برای بررسی غیرفعال شدن افزونه
add_action('deactivated_plugin', 'remove_my_plugin_enable_addons_option');