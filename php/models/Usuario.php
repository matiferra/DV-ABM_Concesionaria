<?php 

class Usuario extends Model
{

    protected function getTable()
    {
        return 'admins';
    }

    protected function getPrimaryKey()
    {
        return 'usuario';
    }

}