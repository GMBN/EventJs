<?php
global $e;

$e->on('view.eventJs', function() {
    global $e;
    $e->trigger('view.jquery');
    $e->trigger('view.addJs', ['/event-manager/assets/js/event-php.js']);
});

$e->on('view.jquery', function() {
    global $e;
    $e->trigger('view.addJs', ['/event-manager/assets/js/jquery-3.1.1.min.js']);
});
