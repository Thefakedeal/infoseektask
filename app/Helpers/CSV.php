<?php

namespace App\Helpers;

class CSV
{
    public static function read($filename = '', $delimeter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $data = array();
        $header = null;
        $handle = fopen($filename, 'r');
        if ($handle) {
            while (($row = fgetcsv($handle, 10000, $delimeter)) !== false) {
                if ($header == null) {
                    $header = $row;
                    continue;
                }
                $data[] = array_combine($header, $row);
            }
            fclose($handle);
            return $data;
        }
        return false;
    }

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