<?php

namespace Rochev\CodeSniffer;

/**
 * Class Factory.
 */
class Factory
{
    /**
     * @return string
     */
    public static function getFullPathToRuleset(): string
    {
        return \dirname(__FILE__, 2) . '/ruleset.xml';
    }//end getFullPathToRuleset()
}//end class
