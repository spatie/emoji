<?php

namespace Spatie\Emoji\Generator\Console;

use Symfony\Component\Console\Application as ConsoleApplication;

class Application extends ConsoleApplication
{
    public function __construct()
    {
        parent::__construct('Spatie\Emoji package generator', '1.0.0');

        $command = new GenerateCommand();
        $this->addCommand($command);
        $this->setDefaultCommand($command->getName());
    }

    public function getLongVersion() : string
    {
        return parent::getLongVersion().' by <comment>Spatie</comment>';
    }
}
