<?php
require_once __DIR__ . '/vendor/autoload.php';
use GeekBrains\les\Blog\Post;
use GeekBrains\les\Person\Name;
use GeekBrains\les\Person\Person;

$post = new Post(
new Person(
new Name('Иван', 'Никитин'),
new DateTimeImmutable()
),
'Всем привет!'
);
print $post;