<?php

use Evenement\EventEmitterInterface;
use Peridot\Plugin\Watcher\WatcherPlugin;
use Peridot\Plugin\Prophecy\ProphecyPlugin;

return function(EventEmitterInterface $emitter) {
    $watcher = new WatcherPlugin($emitter);
    $watcher->track(__DIR__ . '/src');

    new ProphecyPlugin($emitter);
};