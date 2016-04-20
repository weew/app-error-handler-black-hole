<?php

namespace tests\spec\Weew\App\ErrorHandler\BlackHole;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Weew\App\ErrorHandler\BlackHole\BlackHoleErrorHandlerConfig;
use Weew\Config\Config;

/**
 * @mixin BlackHoleErrorHandlerConfig
 */
class BlackHoleErrorHandlerConfigSpec extends ObjectBehavior {
    function let() {
        $config = new Config();
        $config->set(BlackHoleErrorHandlerConfig::ENABLED, true);
        $this->beConstructedWith($config);
    }

    function it_is_initializable() {
        $this->shouldHaveType(BlackHoleErrorHandlerConfig::class);
    }

    function it_returns_enabled() {
        $this->getEnabled()->shouldBe(true);
    }
}
