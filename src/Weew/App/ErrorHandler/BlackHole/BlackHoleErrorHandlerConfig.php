<?php

namespace Weew\App\ErrorHandler\BlackHole;

use Weew\Config\IConfig;

class BlackHoleErrorHandlerConfig {
    const ENABLED = 'black_hole_error_handler.enabled';
    const DISABLED = 'black_hole_error_handler.disabled';

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
        $enabled = $this->config->get(self::ENABLED);
        $disabled = $this->config->get(self::DISABLED);

        if ($enabled !== null) {
            return $enabled;
        }

        if ($disabled !== null) {
            return ! $disabled;
        }

        return false;
    }
}
