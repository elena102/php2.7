<?php
namespace GeekBrains\les\Blog;
use GeekBrains\les\Person\Person;
class Post
{
public function __construct(
private Person $author,
private string $text
) {
}
public function __toString()
{
return $this->author . ' пишет: ' . $this->text;
}
}
