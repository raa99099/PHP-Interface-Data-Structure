<?php
class ArrayList implements ListInterface {
    private $items = [];

    public function add($item) {
        $this->items[] = $item;
    }

    public function remove($item) {
        $index = array_search($item, $this->items);
        if ($index !== false) {
            unset($this->items[$index]);
        }
    }

    public function get($index) {
        return $this->items[$index] ?? null;
    }

    public function set($index, $value) {
        $this->items[$index] = $value;
    }

    public function size() {
        return count($this->items);
    }

    public function isEmpty() {
        return empty($this->items);
    }

    public function getAll() {
        return $this->items;
    }
}
