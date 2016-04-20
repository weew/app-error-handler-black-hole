<?php

namespace Weew\App\ErrorHandler\BlackHole;

use Weew\Container\IContainer;
use Weew\ErrorHandler\IErrorHandler;

class BlackHoleErrorHandlerProvider {
    /**
     * BlackHoleErrorHandlerProvider constructor.
     *
     * @param IContainer $container
     */
    public function __construct(IContainer $container) {
        $container->set(IBlackHoleErrorHandlerConfig::class, BlackHoleErrorHandlerConfig::class);
    }

    /**
     * @param IBlackHoleErrorHandlerConfig $config
     * @param IErrorHandler $errorHandler
     * @param IContainer $container
     */
    public function initialize(
        IBlackHoleErrorHandlerConfig $config,
        IErrorHandler $errorHandler,
        IContainer $container
    ) {
        if ($config->getEnabled()) {
            $errorHandler = new BlackHoleErrorHandler($errorHandler);
            $errorHandler->enable();

            $container->set(
                BlackHoleErrorHandler::class, $errorHandler
            );
        }
    }
}
