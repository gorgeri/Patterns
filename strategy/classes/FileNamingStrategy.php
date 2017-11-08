<?php

abstract class FileNamingStrategy
{
    const BASE_URL = "http://localhost/download/";
    abstract function createLinkName($fileName);
}