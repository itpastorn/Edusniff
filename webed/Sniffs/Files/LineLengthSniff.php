<?php
/**
 * webed_Sniffs_Files_LineLengthSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('Generic_Sniffs_Files_LineLengthSniff', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class Generic_Sniffs_Files_LineLengthSniff not found');
}

/**
 * webed_Sniffs_Files_LineLengthSniff.
 *
 * Checks all lines in the file, and throws warnings if they are over 100
 * characters in length and errors if they are over 130. (Relaxed from Zend)
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net> (Zend original author)
 * @author    Marc McIntyre <mmcintyre@squiz.net> (Zend original author)
 * @author    Lars Gunther <gunther@keryx.se>
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: 1.1.0
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class webed_Sniffs_Files_LineLengthSniff extends Generic_Sniffs_Files_LineLengthSniff
{

    /**
     * The limit that the length of a line should not exceed.
     *
     * @var int
     */
    public $lineLimit = 100;

    /**
     * The limit that the length of a line must not exceed.
     *
     * Set to zero (0) to disable.
     *
     * @var int
     */
    public $absoluteLineLimit = 130;

}//end class

