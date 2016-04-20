<?php

namespace Weew\App\ErrorHandler\BlackHole;

use Weew\ErrorHandler\IErrorHandler;

class BlackHoleErrorHandler {
    /**
     * @var IErrorHandler
     */
    private $errorHandler;

    /**
     * BlackHoleErrorHandler constructor.
     *
     * @param IErrorHandler $errorHandler
     */
    public function __construct(IErrorHandler $errorHandler) {
        $this->errorHandler = $errorHandler;
    }

    /**
     * Enable suppressing of errors.
     */
    public function enable() {
        // suppress all errors
        $this->errorHandler->addErrorHandler(function() {return true;});
        $this->errorHandler->addExceptionHandler(function() {return true;});
    }
}
