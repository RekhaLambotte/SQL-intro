<?php

    // appel de la base base de donnée
    try {
        $db = new PDO("mysql:host=mysql;dbname=Classic Model (Becode);port=3306", "root", "root");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $error) {
        echo $error->getMessage();
        exit;
    }
    
    // Exercice 1
    try {
        $results = $db->prepare(
            "SELECT COUNT(*) 
            FROM customers");

        $results->execute();
    } catch (Exception $error) {
        echo $error->getMessage();
        exit;
    };
    
    $results1 = $results->fetch();
    echo '<strong><hr>' . 'Question n° 1: How many customers do we have?' . '</strong> <br><br> <ul> <li>'. $results1['COUNT(*)'] . '<br> </li> </ul>';


     // Exercice 2
     try {
        $results = $db->prepare(
            "SELECT customerNumber, contactLastName, contactFirstName
            FROM customers
            WHERE contactFirstName='Mary' and contactLastName='Young'  ");

        $results->execute();
    } catch (Exception $error) {
        echo $error->getMessage();
        exit;
    }
    
    $results2 = $results->fetch();
    echo '<strong><hr>' . 'Question n° 2: What is the customer number of Mary Young?' . '</strong><br><br><ul><li>'. $results2['customerNumber']. '<br> </li> </ul>';


    // Exercice 3
    try {
        $results = $db->prepare(
            "SELECT customerNumber
            FROM customers
            WHERE addressLine1='Magazinweg 7' and city='Frankfurt' and postalCode='60528'  ");

        $results->execute();
    } catch (Exception $error) {
        echo $error->getMessage();
        exit;
    }
    
    $results3 = $results->fetch();
    echo '<strong><hr>' . 'Question n° 3: What is the customer number of the person living at Magazinweg 7, Frankfurt 60528?' . '</strong><br><br><ul><li>'. $results3['customerNumber']. '<br> </li> </ul>';


    // Exercice 4
    try {
        $results = $db->prepare(
            "SELECT lastName, email
            FROM employees
            ORDER BY `employees`.`lastName` ASC  ");

        $results->execute();
    } catch (Exception $error) {
        echo $error->getMessage();
        exit;
    }
    
    $results = $results->fetch();



    // foreach ($results as $key => $product) {
    //     echo '<strong><hr>' . 'Question n° 4: If you sort the employees on their last name, what is the email of the first employee?' . '</strong><br><br><ul><li>'. $results['email']. '<br> </li> </ul>';
    // }
    

/*
5) If you sort the employees on their last name, what is the email of the last employee?
6) What is first the product code of all the products from the line 'Trucks and Buses', sorted first by productscale, then by productname.
7) What is the email of the first employee, sorted on their last name that starts with a 't'?
8) Which customer (give customer number) payed by check on 2004-01-19 ?
9) How many customers do we have living in the state Nevada or New York?
10) How many customers do we have living in the state Nevada or New York or outside the united states?
11) How many customers do we have with the following conditions (only 1 query needed): - Living in the state Nevada or New York OR - Living outside the USA or the customers and with a credit limit above 1000 dollar?
12) How many customers don't have an assigned sales representative?
13) How many orders have a comment?
14) How many orders do we have where the comment mentions the word "caution"?
15) What is the average credit limit of our customers from the USA? (rounded)
16) What is the most common last name from our customers?
17) What are valid statuses of the orders?
18) In which countries don't we have any customers?
19) How many orders where never shipped?
20) How many customers does Steve Patterson have with a credit limit above 100 000 EUR?
21) How many orders have been shipped to our customers?
22) On average, how many products do we have in each product line?
23) How many products are low in stock? (below 100 pieces)
24) How many products have more the 100 pieces in stock, but are below 500 pieces.
25) How many orders did we ship between and including June 2004 & September 2004
26) How many customers share the same last name as an employee of ours?
27) Give the product code for the most expensive product for the consumer?
28) What product (product code) offers us the largest profit margin (difference between buyPrice & MSRP).
29) How much profit (rounded) can the product with the largest profit margin (difference between buyPrice & MSRP) bring us.
30) Given the product number of the products (separated with spaces) that have never been sold?
31) How many products give us a profit margin below 30 dollar?
32) What is the product code of our most popular product (in number purchased)?
33) How many of our popular product did we effectively ship?
34) Which check number paid for order 10210. Tip: Pay close attention to the date fields on both tables to solve this.
35) Which order was paid by check CP804873?
36) How many payments do we have above 5000 EUR and with a check number with a 'D' somewhere in the check number, ending the check number with the digit 9?
37) How many products do we have in product scale 1:18 or 1:24 that are either trains and have a sell price above 100 EUR, or classic cars and a price between 50 and 80, or trucks and buses with a price below 100 EUR?
38) In which country do we have the most customers that we do not have an office in?
39) What city has our biggest office in terms of employees?
40) How many employees does our largest office have, including leadership?
41) How many employees do we have on average per country (rounded)?
42) What is the total value of all shipped & resolved sales ever combined?
43) What is the total value of all shipped & resolved sales in the year 2005 combined? (based on shipping date)
44) What was our most profitable year ever (based on shipping date), considering all shipped & resolved orders?
45) How much revenue did we make on in our most profitable year ever (based on shipping date), considering all shipped & resolved orders?
46) What is the name of our biggest customer in the USA of terms of revenue?
47) How much has our largest customer inside the USA ordered with us (total value)?
48) How many customers do we have that never ordered anything?
49) What is the last name of our best employee in terms of revenue?
50) What is the office name of the least profitable office in the year 2004?


*/


?>



