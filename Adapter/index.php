<?php
require_once 'Book.php';
require_once 'Kindle.php';
require_once 'BookAdapter.php';

// Let's open a paper book
$book = new Book();
$book->open();
$book->turnPage();

// Let's open an ebook
$ebook = new Kindle();
$ebook->start();
// NO! But I want it to behave like a paper book!
// Ok, let's wrap it in the Adapter

$ebookAdapter = new BookAdapter($ebook);
$ebookAdapter->open();
$ebookAdapter->turnPage();