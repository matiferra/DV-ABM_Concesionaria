<?php

class Auto extends Model
{
    protected function getTable()
    {
        return 'modelo';
    }

    protected function getPrimaryKey()
    {
        return 'id_modelo';
    }

    protected function getForenKey(){
        return 'id_marca';
    }
}