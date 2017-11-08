<?php

class BloggsCommsManager extends CommsManager
{

    function getHeaderText(){
        return "BloggsCall верхний колонтитул<br />";
    }

    function getApptEncoder(){
        return new BloggsApptEncoder();
    }


    function getFooterText(){
        return "Bloggs Call нижний колонтитул<br />";
    }
    
}