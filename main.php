<?php
require_once 'autoload.php';

$q = new Queue();
$q->enqueue("Satu");
$q->enqueue("Dua");
$q->enqueue("Tiga");

echo "Isi antrian:\n";
print_r($q->getAll());

$q->dequeue();
echo "Setelah satu keluar:\n";
print_r($q->getAll());
