<?php

class BracketValidation
{
    private $openersToClosers = [
        '(' => ')',
        '[' => ']',
        '{' => '}',
    ];

    private $openers = ['(', '[', '{'];

    private $closers = [')', ']', '}'];

    public $openersStack = [];

    public function isValid($code)
    {
        for ($i = 0; $i < strlen($code); $i++) {
            $char = $code[$i];

            if (in_array($char, $this->openers)) {
                array_push($this->openersStack, $char);
            }

            if (in_array($char, $this->closers)) {

                // If we see a closer but there's nothing in the openers
                // stack, short-circuit, returning false
                if (!count($this->openersStack)) {
                    return false;
                }

                $lastUnclosedOpener = array_pop($this->openersStack);

                // if this closer doesn't correspond to the most recently
                // seen unclosed opener, short-circuit, returning false
                if ($this->openersToClosers[$lastUnclosedOpener] != $char) {
                    return false;
                }
            }
        }

        return count($this->openersStack) == 0;
    }
}

$code = 'for($i = 0; $i < 10; $i++) {($i = $i + 10; }';


var_dump((new BracketValidation)->isValid($code));
