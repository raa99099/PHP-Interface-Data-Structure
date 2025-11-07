<?php
class Stack implements CollectionInterface {
    private $stack = [];

    public function add($item) {
        array_push($this->stack, $item);
    }

    public function remove($item) {
        $index = array_search($item, $this->stack);
        if ($index !== false) {
            unset($this->stack[$index]);
        }
    }

    public function pop() {
        return array_pop($this->stack);
    }

    public function peek() {
        return end($this->stack);
    }

    public function size() {
        return count($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }

    public function getAll() {
        return $this->stack;
    }
}
