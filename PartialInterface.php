<?php
/**
 * @package Sprout
 * @subpackage SproutInterfaces
 * @since 1.0.0
 */
namespace SproutInterfaces;

/**
 * Interface used by objects that spit out raw HTML that is used in a place determined
 * by an action.
 */
interface PartialInterface
{
    /**
     * Returns the raw html.
     *
     * @return stringhtml
     */
    public function getHTMLForOutput();

    /**
     * Returns the action that will be used to output the html-string from getHTMLForOutput.
     *
     * @return string
     */
    public function getActionForOutput();
}