<?php

class MegaCommsManager extends CommsManager
{

    public function getHeaderText(){
        return "MageCall верхний колонтитул<br />";
    }

    public function getFooterText(){
        return "MageCall нижний колонтитул<br />";
    }

    public function getApptEncoder(){
        return new MegaApptEncoder();
    }

}