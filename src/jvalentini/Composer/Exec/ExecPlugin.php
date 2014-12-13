<?php

namespace jvalentini\Composer\Exec;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class ExecPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $io->write('hi!');
    }
}

?>
