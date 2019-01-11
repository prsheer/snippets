<?php
/**
 * Created by PhpStorm.
 * User: pim
 * Date: 23.11.18.
 * Time: 14.33
 */

class UniqueValues
{
    private $uniqueValues = [];

    public function setUniqueValues($uniqueValues)
    {
        $this->uniqueValues = $uniqueValues;
    }

    private function getUniqueValues()
    {
        for ($i = 0; $i < count($this->uniqueValues); $i++) {
            var_dump($this->uniqueValues[$i]);
        }
    }

    public function countUniqueValues()
    {
        return count($this->getUniqueValues());
    }


}
