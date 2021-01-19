<?php

class Marca extends Model
{
    protected function getTable()
    {
        return 'marca';
    }

    protected function getPrimaryKey()
    {
        return 'id_marca';
    }
}