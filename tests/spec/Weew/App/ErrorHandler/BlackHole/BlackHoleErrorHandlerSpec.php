<?php

namespace tests\spec\Weew\App\ErrorHandler\BlackHole;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Weew\App\ErrorHandler\BlackHole\BlackHoleErrorHandler;
use Weew\ErrorHandler\IErrorHandler;

/**
 * @mixin BlackHoleErrorHandler
 */
class BlackHoleErrorHandlerSpec extends ObjectBehavior {
    function let(IErrorHandler $errorHandler) {
        $this->beConstructedWith($errorHandler);
    }

    function it_is_initializable() {
        $this->shouldHaveType(BlackHoleErrorHandler::class);
    }

    function it_enables_error_handling(IErrorHandler $errorHandler) {
        $errorHandler->addErrorHandler(Argument::type('callable'))->shouldBeCalled();
        $errorHandler->addExceptionHandler(Argument::type('callable'))->shouldBeCalled();
        $this->enable();
    }
}
