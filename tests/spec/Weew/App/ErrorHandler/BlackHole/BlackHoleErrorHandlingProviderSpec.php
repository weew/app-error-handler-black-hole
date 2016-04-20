<?php

namespace tests\spec\Weew\App\ErrorHandler\BlackHole;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Weew\App\ErrorHandler\BlackHole\BlackHoleErrorHandler;
use Weew\App\ErrorHandler\BlackHole\BlackHoleErrorHandlerConfig;
use Weew\App\ErrorHandler\BlackHole\BlackHoleErrorHandlingProvider;
use Weew\App\ErrorHandler\BlackHole\IBlackHoleErrorHandlerConfig;
use Weew\Container\IContainer;
use Weew\ErrorHandler\IErrorHandler;

/**
 * @mixin BlackHoleErrorHandlingProvider
 */
class BlackHoleErrorHandlingProviderSpec extends ObjectBehavior {
    function let(IContainer $container) {
        $container->set(IBlackHoleErrorHandlerConfig::class, BlackHoleErrorHandlerConfig::class)->shouldBeCalled();;

        $this->beConstructedWith($container);
    }

    function it_is_initializable() {
        $this->shouldHaveType(BlackHoleErrorHandlingProvider::class);
    }

    function it_does_not_enable_error_handling_if_not_enabled(
        IBlackHoleErrorHandlerConfig $config,
        IErrorHandler $errorHandler,
        IContainer $container
    ) {
        $config->getEnabled()->willReturn(false);
        $this->initialize($config, $errorHandler, $container);
    }

    function it_enables_error_handling(
        IBlackHoleErrorHandlerConfig $config,
        IErrorHandler $errorHandler,
        IContainer $container
    ) {
        $config->getEnabled()->willReturn(true);
        $container->set(BlackHoleErrorHandler::class, Argument::type(BlackHoleErrorHandler::class))->shouldBeCalled();
        $this->initialize($config, $errorHandler, $container);
    }
}
