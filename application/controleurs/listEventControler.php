<?php

class listEventController{

    public function listEvent(){
            require_once("/application/models/listEventModel.php");
            $listEvent = new listEventModel();
            $reqListEvent = $listEvent->getListEvent(-1);
            require_once("/application/views/IMIE/listEvent.php");
    }
}

?>