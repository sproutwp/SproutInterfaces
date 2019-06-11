<?php
/**
 * @package Sprout
 * @subpackage SproutInterfaces
 * @since 1.0.0
 */
namespace SproutInterfaces;

interface ViewBlockInterface
{
    /**
     * This is just a documented function that can be used to extend functionality of ViewBlockInterface objects.
     * @internal If this function is defined within your object, the main controller from "MainView" will append the string as template to the body of each page so that it's ready to use by the javascript script.
     *
     * Returns a string with a mustache template that will be used, supposedly, by the object's next optional function 'getBlockViewScriptsFilePath'. Basically
     * this is to set up any mustache templates that script might use when creating whatever views you need from it.
     *
     * @param string $mustache_template The string containing the mustache template(s).
     *
     * public function getMustacheTemplate( $mustache_template );
     *
     * @return string
     */

    /**
     * This is just a documented function that can be used to extend functionality of ViewBlockInterface objects.
     * @internal If this function is defined within your object, the main controller from "MainView" will add the CSS file to the styles.
     *
     * Returns a string that is the link to the CSS file we're loading for (only) the ViewBlock portion of our module.
     *
     * public function getBlockViewStylesPackage();
     *
     * @return array The CSS information package.
     */

    /**
     * This is just a documented function that can be used to extend functionality of ViewBlockInterface objects.
     * @internal If this function is defined within your object, the main controller from "MainView" will add the JS file to the scripts.
     *
     * Returns a string that is the link to the JS file we're loading for (only) the ViewBlock portion of our module.
     *
     *
     * public function getBlockViewScriptsPackage();
     *
     * @return array The CSS information package.
     */

    /**
     * Retrieves the information package for a block. The system will use this information to build its mini-views,
     * append data, create identifiers and so on. The following need to be provided (as keys to the array):
     *
     * block_id The id of the block, generally used for CSS identifiers.
     * block_javascript_callback The javascript callback to be called when an user wants to access the functionality of the block. This means that you must write your JS file to have a main "run" function with the same name.
     * block_icon_path The icon path.
     * block_title The block title.
     *
     * @internal Unfortunately, we cannot make use of return types, since we're working with PHP 5.4+, as such, you must respect this or stuff will not work correctly.
     *
     * @return array
     */
    public function getViewBlockInformationPackage();
}