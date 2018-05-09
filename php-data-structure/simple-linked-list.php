<?php

class ListNode {
    public $data = null;
    public $next = null;

    public function __construct(string $data = null) {
        $this->data = $data;
    }
}

class LinkedList {

    private $_firstNode = null;
    private $_totalNodes = 0;

    /**
     * @return null
     */
    public function insert(string $data = null) {

        $newNode = new ListNode($data);

        if ($this->_firstNode === null) {
            $this->_firstNode = &$newNode;
        } else {
            $currentNode = $this->_firstNode;
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }

        var_dump($this->_firstNode);

    }
}

$BookTitles = new LinkedList();
$BookTitles->insert("Introducing to Algorithm");