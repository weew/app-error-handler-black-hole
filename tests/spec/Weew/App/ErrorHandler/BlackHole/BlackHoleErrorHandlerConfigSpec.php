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

    function it_is_disabled_by_default() {
        $this->beConstructedWith(new Config());
        $this->getEnabled()->shouldBe(false);
    }

    function it_is_not_enabled_if_disabled_is_set_to_true() {
        $config = new Config();
        $config->set(BlackHoleErrorHandlerConfig::DISABLED, true);
        $this->beConstructedWith($config);
        $this->getEnabled()->shouldBe(false);
    }

    function it_is_enabled_if_disabled_is_set_to_false() {
        $config = new Config();
        $config->set(BlackHoleErrorHandlerConfig::DISABLED, false);
        $this->beConstructedWith($config);
        $this->getEnabled()->shouldBe(true);
    }
}
