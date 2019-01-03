<?php

$pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'troiswa');

$pdo->exec('SET NAMES UTF8');

$query = $pdo->prepare


(
   'SELECT customerName,contactLastName,contactFirstName,addressline1,city
   FROM customers
   Inner Join orders On orders.customerNumber = customers.customerNumber
    WHERE orderNumber = ?'    
);


$query-> execute([ $_GET['orderNumber'] ]);

$customer = $query->fetch(PDO::FETCH_ASSOC);

include'get.phtml';




$query = $pdo->prepare


(   'SELECT productName,priceEach,quantityOrdered,
        priceEach * quantityOrdered AS totalPrice
     FROM orderdetails
     INNER JOIN products ON products.productCode = orderdetails.productCode
     WHERE orderNumber = ?
     ORDER BY orderLineNumber');

$query-> execute([ $_GET['orderNumber'] ]);

$ordre = $query->fetchAll(PDO::FETCH_ASSOC);


?>