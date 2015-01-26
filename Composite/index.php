<?php

require_once 'Product.php';
require_once 'ProductCollection.php';

// Let's create some Products and add them to the Product Collection
$onion = new Product('Onion');
$banana = new Product('Banana');
$rice = new Product('Rice');

// Add them to the collection - we first have created
$collection = new ProductCollection('Root Collection');
$collection->add($onion);
$collection->add($banana);
$collection->add($rice);

// Ok, let's render them all
$collection->render();

// What about adding a subcollection
$subcollection = new ProductCollection('Subcollection');
$spaguetti = new Product('Spaguetti');
$oil = new Product('Oil');
$subcollection->add($spaguetti);
$subcollection->add($oil);

// Let's add it to the root collection
$collection->add($subcollection);

// And render it again
$collection->render();

