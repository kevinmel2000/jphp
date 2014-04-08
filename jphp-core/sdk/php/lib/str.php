<?php
namespace php\lib;

final class str {

    private function __construct() {}

    /**
     * @param string $string
     * @param string $search
     * @param int $fromIndex
     * @return int
     */
    public static function indexOf($string, $search, $fromIndex = 0) { return 0; }

    /**
     * @param $string
     * @param $search
     * @param null|int $fromIndex - null means $fromIndex will be equal $string.length
     * @return int
     */
    public static function lastIndexOf($string, $search, $fromIndex = null) { return 0; }

    /**
     * @param string $string
     * @param int $beginIndex
     * @param null|int $endIndex
     * @return string - return false if params are invalid
     */
    public static function sub($string, $beginIndex, $endIndex = null) { return ''; }

    /**
     * @param string $string1
     * @param string $string2
     * @return int
     */
    public static function compare($string1, $string2) { return 0; }

    /**
     * @param string $string1
     * @param string $string2
     * @return int
     */
    public static function compareIgnoreCase($string1, $string2) { return 0; }

    /**
     * @param string $string
     * @param string $pattern
     * @return bool
     */
    public static function matches($string, $pattern) { return false; }

    /**
     * @param $string
     * @param $prefix
     * @param int $offset
     * @return bool
     */
    public static function startsWith($string, $prefix, $offset = 0) { return false; }

    /**
     * @param string $string
     * @param string $suffix
     * @return bool
     */
    public static function endsWith($string, $suffix) { return false; }

    /**
     * To lower case
     * @param string $string
     * @return string
     */
    public static function lower($string) { return ''; }

    /**
     * To upper case
     * @param string $string
     * @return string
     */
    public static function upper($string) { return ''; }

    /**
     * Returns a hash code of $string
     * @param string $string
     * @return int
     */
    public static function hash($string) { return 0; }

    /**
     * @param string $string
     * @return int
     */
    public static function length($string) { return 0; }

    /**
     * @param string $string
     * @param string $target
     * @param string $replacement
     * @return string
     */
    public static function replace($string, $target, $replacement) { return ''; }

    /**
     * @param string $string
     * @param int $amount
     * @return string
     */
    public static function repeat($string, $amount) { return ''; }

    /**
     * @param string $string
     * @return string
     */
    public static function trim($string) { return ''; }

    /**
     * @param string $string
     * @return string
     */
    public static function reverse($string) { return ''; }

    /**
     * @param string $string
     * @return string
     */
    public static function shuffle($string) { return ''; }
}
