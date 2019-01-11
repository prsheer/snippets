<?php

class Anagram
{
    private $first;

    private $second;

    /**
     * @param mixed $first
     */
    public function setFirst($first)
    {
        $this->first = $first;
    }

    /**
     * @param mixed $second
     */
    public function setSecond($second)
    {
        $this->second = $second;
    }

    private function areWordsAnagrams()
    {
        $first = $this->first;

        $second = $this->second;

        if (empty($first))
        {
            return 'not';
        }

        if (strlen($first) !== strlen($second))
        {
            return 'not';
        }

        $wordChecker = [];

        for ($i = 0; $i < strlen($first); $i++)
        {
            $letters = $first[$i];

            $wordChecker[$letters] ? $wordChecker[$letters] += 1 : $wordChecker[$letters] = 1;
        }

        for ($i = 0; $i < strlen($second); $i++)
        {
            $letters = $second[$i];

            if (!$wordChecker[$letters])
            {
                return 'not';
            } else
            {
                $wordChecker[$letters] -= 1;
            }
        }

        return 'are';
    }

    public function areOrNot()
    {
        return $this->areWordsAnagrams();
    }

}
