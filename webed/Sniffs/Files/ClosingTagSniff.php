<?php
/**
 * webed_Sniffs_Files_ClosingTagsSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * webed_Sniffs_Files_LineEndingsSniff.
 *
 * Checks that the file does not end with a closing tag.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer (Zend original author)
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class webed_Sniffs_Files_ClosingTagSniff implements PHP_CodeSniffer_Sniff
{


    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(T_CLOSE_TAG);

    }//end register()


    /**
     * Processes this sniff, when one of its tokens is encountered.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file being scanned.
     * @param int                  $stackPtr  The position of the current token in
     *                                        the stack passed in $tokens.
     *
     * @return void
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        $next = $phpcsFile->findNext(T_WHITESPACE, ($stackPtr + 1), null, true);
        if ($next === false) {
            $error = 'A closing tag is not permitted at the end of a PHP file';
            $phpcsFile->addError($error, $stackPtr);
        }

    }//end process()


}//end class
