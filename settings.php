<?php
/**
 * Settings for the Smart Tools local plugin.
 *
 * @package    local_smart_tools
 * @copyright  2026 Antigravity
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    // Create a section in the Site Administration menu.
    $settings = new admin_settingpage('local_smart_tools', get_string('settings_header', 'local_smart_tools'));

    // Move it under the "Local Plugins" category.
    $ADMIN->add('localplugins', $settings);

    // Add a simple config setting.
    $settings->add(new admin_setting_configtext(
        'local_smart_tools/api_key',
        get_string('api_key', 'local_smart_tools'),
        get_string('api_key_desc', 'local_smart_tools'),
        '',
        PARAM_RAW
    ));
}
