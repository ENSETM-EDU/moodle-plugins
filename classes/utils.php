<?php
/**
 * Utility class for Smart Tools plugin.
 *
 * @package    local_smart_tools
 * @copyright  2026 Antigravity
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_smart_tools;

/**
 * Main utility class.
 */
class utils
{

    /**
     * Get a greeting message.
     *
     * @return string
     */
    public static function get_greeting(): string
    {
        return get_string('hello', 'local_smart_tools');
    }

    /**
     * Check if the API key is set.
     *
     * @return bool
     */
    public static function is_configured(): bool
    {
        $key = get_config('local_smart_tools', 'api_key');
        return !empty($key);
    }
}
