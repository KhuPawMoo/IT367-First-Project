<?php
// Question 5
// class Product {
//     private array $prices;

//     public function __construct(array $prices) {
//         $this->prices = $prices;
//     }

//     public function getPrice(string $item): float {
//         // BUG 1: Unknown items must cost 0.0, but currently crash or throw errors
//         return (float)($this->prices[$item] ?? 0.0);
//     }
// }

// class Cart {
//     private Product $productCatalog;
//     private array $items = []; // Stores ["item_name" => quantity]

//     public function __construct(Product $productCatalog) {
//         $this->productCatalog = $productCatalog;
//     }

//     public function addItem(string $item, int $qty): void {
//         // BUG 2: Adding an existing item overwrites the quantity instead of adding to it
//         $this->items[$item] = ($this->items[$item] ?? 0) + $qty;
//     }

//     public function getTotalCost(): float {
//         $total = 0.0;
//         foreach ($this->items as $item => $qty) {
//             // BUG 3: Total calculation is missing item price multiplication
//             $total += $this->productCatalog->getPrice($item) * $qty;
//         }
//         return $total;
//     }
// }
// $catalog = new Product(["apple" => 1.50, "banana" => 0.75]);
// $cart = new Cart($catalog);

// $cart->addItem("apple", 2);
// $cart->addItem("apple", 1);
// $cart->addItem("dragonfruit", 5);

// echo $cart->getTotalCost();

// Question 4
// class InsufficientFundsException extends Exception {

// }
// function processPayment(float $balance, float $amount): float {
//     if ($amount <= 0) {
//         throw new InvalidArgumentException("Amount must be positive");
//     }
//     if ($amount > $balance) {
//         throw new InsufficientFundsException("Insufficient funds");
//     }
//     return $balance - $amount;
// }
// try {
//     echo processPayment(100.0, 30.0) . "\n";
//     processPayment(100.0, 150.0);
// } catch (Exception $e) {
//     echo $e->getMessage() . "\n";
// }

// Question 3
// class BankAccount {
//     private float $balance;
//     public function __construct(float $initialBalance = 0.0) {
//         $this->balance = $initialBalance;
//     }
//     public function deposit(float $amount): void {
//         if ($amount > 0) {
//             $this->balance += $amount;
//         }
//     }
//     public function withdraw(float $amount): void {
//         if ($amount > 0 && $amount <= $this->balance) {
//             $this->balance -= $amount;
//         }
//     } 
//     public function getBalance(): float {
//         return $this->balance;
//     }
// }
// $account = new BankAccount(100.0);
// $account->deposit(50.0);
// $account->withdraw(150.0);
// $account->withdraw(10.0);
// echo $account->getBalance();

// Question 2
// function cleanUsername(string $name): string {
//     $trimmed = trim(strtolower($name));
//     if ($trimmed === "") {
//         return "";
//     }
//     $words = preg_split("/\s+/",$trimmed);
//     return implode("_",$words);
// }
// echo cleanUsername(" John Doe ") . "\n";
// echo cleanUsername("Alice Smith") . "\n";
// echo cleanUsername("") . "\n";

// Question 1
// function coldestDay(array $temperatures): string {
//     if(empty($temperatures)){
//         return "";
//     }
//     $coldestDay = "";
//     $lowestTemp = null;
//     foreach($temperatures as $day => $temp) {
//         if($lowestTemp === null || $temp < $lowestTemp) {
//             $lowestTemp = $temp;
//             $coldestDay = $day;
//         }
//     }
//     return $coldestDay;
// }
// $data = ["Mon" => 12, "Tue" => 8, "Wed" => 15];
// echo coldestDay($data);