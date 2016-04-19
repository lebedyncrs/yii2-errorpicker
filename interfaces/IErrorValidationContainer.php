<?php

namespace lebedyncrs\errorpicker\interfaces;

/**
 * @author Sergij Lebedyn<sergij.lebedyn@gmail.com>
 */
interface IErrorValidationContainer {

    /**
     * return all errors
     * @return array
     */
    public function getErrors();

    /**
     * Add multiple or single errors.
     * @param array $errors
     * @param string $category name of wrapper to errors
     */
    public function addErrors(array $errors, $category = null, $index = null);

    /**
     * Check if errors exist
     * @param string $category if this parameter in not empty then error checking will be executed in category 
     * @return boolean if errors exist
     */
    public function hasErrors($category = null);
}
