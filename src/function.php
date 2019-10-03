<?php
    function cleanInput(array $input) :array
    {
        foreach ($_POST as $key => $value){
            $data[$key] = trim($value);
        }

        return $data;
    }