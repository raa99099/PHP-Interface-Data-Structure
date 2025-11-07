<?php
require_once 'autoload.php';

$list = new ArrayList();
$list->add("PHP");
$list->add("Java");
$list->add("C++");
echo "Isi ArrayList: ";
print_r($list->getAll());

$queue = new Queue();
$queue->enqueue("Task 1");
$queue->enqueue("Task 2");
echo "\nQueue: ";
print_r($queue->getAll());
$queue->dequeue();
echo "Setelah dequeue: ";
print_r($queue->getAll());

$map = new HashMap();
$map->put("nama", "Reva");
$map->put("kelas", "TI-2A");
echo "\nHashMap: ";
print_r($map->getAll());

$stack = new Stack();
$stack->add("Item 1");
$stack->add("Item 2");
echo "\nStack: ";
print_r($stack->getAll());
$stack->pop();
echo "Setelah pop: ";
print_r($stack->getAll());
