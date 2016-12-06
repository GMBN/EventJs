<?php
namespace EventJs;

class Module{
    
    public function getConfig() {
        return require __DIR__.'/config.php';
    }
    public function getEventGlobal() {
        return require __DIR__.'/event.global.php';
    }
}