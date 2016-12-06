<?php

namespace EventJs\Controller;

class Event {

    function manager() {
        global $e;
        
        if (isset($_POST['event'])) {
            $param = false;
            if (isset($_POST['param'])) {
                $param = $_POST['param'];
            }
            $e->trigger('public.'.$_POST['event'], $param); //aciona o evento solicitado
        }
    }

}
