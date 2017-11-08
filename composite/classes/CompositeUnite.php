<?php

abstract class CompositeUnite extends Unit
{
    abstract function addUnit(Unit $unit);
    abstract function removeUnit(Unit $unit);
}