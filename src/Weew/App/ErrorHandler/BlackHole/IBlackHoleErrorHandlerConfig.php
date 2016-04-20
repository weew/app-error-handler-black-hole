<?php

namespace Weew\App\ErrorHandler\BlackHole;

interface IBlackHoleErrorHandlerConfig {
    /**
     * @return bool
     */
    function getEnabled();
}
