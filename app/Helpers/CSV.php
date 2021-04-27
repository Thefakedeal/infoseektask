<?php

namespace App\Helpers;

class CSV
{
    public static function insert($filename='', $row, $delimeter = ',')
    {   
        if ($row == null)
            return false;
        
        $handle = fopen($filename, 'a');
        if ($handle) {
            fputcsv($handle, $row, $delimeter);
            fclose($handle);
            return true;
        }
        return false;
    }
}