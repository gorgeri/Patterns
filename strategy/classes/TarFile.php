<?php

class TarFile extends FileNamingStrategy
{

    function createLinkName($filename){
        return self::BASE_URL.$filename.'.tar.gz';
    }

}