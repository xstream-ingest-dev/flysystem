<?php
namespace League\Flysystem\Plugin;

class DoNothing extends AbstractPlugin
{
    public function getMethod()
    {
        return 'doNothing';
    }

    public function handle()
    {
        return;
    }
}
