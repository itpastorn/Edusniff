<?php
/**
 *  Webed Server Side Scripting 1 Coding Standard, modified from the Zend standard
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net> (Zend original author)
 * @author    Marc McIntyre <mmcintyre@squiz.net> (Zend original author)
 * @author    Lars Gunther <webmaster@keryx.se>
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   0.1
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PHP_CodeSniffer_Standards_CodingStandard', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_CodingStandard not found');
}

/**
 * webed Coding Standard.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 */
class PHP_CodeSniffer_Standards_webed_webedCodingStandard extends PHP_CodeSniffer_Standards_CodingStandard
{


    /**
     * Return a list of external sniffs to include with this standard.
     *
     * The webed standard uses some PEAR sniffs.
     *
     * @return array
     */
    public function getIncludedSniffs()
    {
        return array(
                'Generic/Sniffs/PHP/DisallowShortOpenTagSniff.php',
                'Generic/Sniffs/WhiteSpace/DisallowTabIndentSniff.php',
                'Generic/Sniffs/Formatting/MultipleStatementAlignmentSniff.php',
                'Generic/Sniffs/Functions/OpeningFunctionBraceBsdAllmanSniff.php',
                'Generic/Sniffs/NamingConventions/UpperCaseConstantNameSniff.php',
                'PEAR/Sniffs/Classes/ClassDeclarationSniff.php',
                'PEAR/Sniffs/ControlStructures/ControlSignatureSniff.php',
                'PEAR/Sniffs/Files/LineEndingsSniff.php',
                'PEAR/Sniffs/Files/IncludingFileSniff.php',
                'PEAR/Sniffs/Functions/FunctionCallArgumentSpacingSniff.php',
                'PEAR/Sniffs/Functions/FunctionCallSignatureSniff.php',
                'PEAR/Sniffs/Functions/ValidDefaultValueSniff.php',
                'PEAR/Sniffs/WhiteSpace/ScopeClosingBraceSniff.php',
                'PEAR/Sniffs/WhiteSpace/ScopeIndentSniff.php',
               );

    }//end getIncludedSniffs()


}//end class
