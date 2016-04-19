<?php

namespace lebedyncrs\errorpicker;

use yii\base\Component;
use lebedyncrs\errorpicker\interfaces\IErrorValidationContainer;

class ErrorValidationPicker extends Component implements IErrorValidationContainer {

    private $_errors = [];

    /**
     * @inheritdoc
     */
    public function getErrors() {
        return $this->_errors;
    }

    /**
     * @inheritdoc
     */
    public function addErrors(array $errors, $category = null, $index = null) {
        if ($category && $index) {
            $this->_errors[$category][$index] = $errors;
        } elseif ($category && $index === false) {
            $this->_errors[$category] = $errors;
        } elseif ($category) {
            $this->_errors[$category][] = $errors;
        } else {
            $this->_errors = array_merge($this->_errors, $errors);
        }
    }

    /**
     * @inheritdoc
     */
    public function hasErrors($category = null) {
        if ($category) {
            return array_key_exists($category, $this->_errors) ? !!count($this->_errors) : false;
        } else {
            return !!count($this->_errors);
        }
    }

    public function clearErrors() {
        $this->_errors = [];
    }

}
