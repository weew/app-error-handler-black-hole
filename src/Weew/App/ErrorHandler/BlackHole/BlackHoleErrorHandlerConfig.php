<?php

namespace Weew\App\ErrorHandler\BlackHole;

use Weew\Config\IConfig;

class BlackHoleErrorHandlerConfig {
    const ENABLED = 'black_hole_error_handler.enabled';

    /**
     * @var IConfig
     */
    protected $config;

    /**
     * MonologErrorHandlerConfig constructor.
     *
     * @param IConfig $config
     */
    public function __construct(IConfig $config) {
        $this->config = $config;
    }

    /**
     * @return bool
     */
    public function getEnabled() {
        return $this->config->get(self::ENABLED, false);
    }
}
