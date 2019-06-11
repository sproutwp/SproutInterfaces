<?php
/**
 * @package Sprout
 * @subpackage SproutInterfaces
 * @since 1.0.0
 */
namespace SproutInterfaces;

interface ModuleInterface
{
    /**
     * Contains logic that decides whether or not a module will be loaded.
     *
     * @return boolean True if the module should load, false if it shouldn't.
     */
    public function shouldItLoad();

    /**
     * Retrieves the name of the action of when the module should be run.
     *
     * @return string
     */
    public function getStartingAction();

    /**
     * Contains the main module's logic. Initializator function.
     *
     * @return void
     */
    public function loadModule();

    /**
     * Retrieves the module's name.
     *
     * @internal Declare and initiatie a private property on each Sprout Module class with the name of 'module_identifier' with the desired string value (what your module's name will be).
     * @return string
     */
    public function getModuleName();
}