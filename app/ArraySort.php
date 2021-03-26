<?php
declare(strict_types=1);

namespace App;

class ArraySort
{
    /**
     * var array 
     */
    protected $array;

    /**
     * @param array $array
     */
    public function __construct(array $array) {
        $this->array = $array;
    }

    /**
     * @return array
     */
    public function naturalOrderSorting(): array
    {   
        $arr = [];
        foreach($this->array as $item)
        {
            $arr[] = strtolower($item);
        }
        natsort($arr);

        $sorted = [];
        foreach($arr as $key => $item)
        {
            $sorted[$key] = $this->array[$key]; 
        }

        return $sorted;
    }

    /**
     * @return array
     */
    public function getArray(): array
    {
        return $this->array;
    }

    /**
     * @param array $array
     */
    public function setArray(array $array)
    {
        $this->array = $array;
    }
}