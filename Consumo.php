<?php

class Consumo
{
    public static function arrayConsumo()
    {
        $a = [];

        $a['nomes'] = explode(', ', $_POST['nome']);
        
        $a['ckSolido'] = array_map(function($value){
            $x = rand(1,30);
            $temp[] = $value;
            $temp[] = $x;

             return $temp;

        }, $_POST['ckSolido']);


        $a['ckLiquido'] = array_map(function($value){
            $x = rand(1,30);
            $temp2[] = $value;
            $temp2[] = $x;

             return $temp2;

        }, $_POST['ckLiquido']);

        return $a;
    }
}
?>