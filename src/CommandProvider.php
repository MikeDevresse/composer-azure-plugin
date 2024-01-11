<?php

namespace MikeDevresse\Composer;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;
use MikeDevresse\Composer\Command\PublishCommand;

class CommandProvider implements CommandProviderCapability
{
    public function getCommands()
    {
        return [new PublishCommand()];
    }
}