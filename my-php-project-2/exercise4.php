<?php
// Question 5
class Inventory {
    private array $stock;

    public function __construct(array $stock) {
        $this->stock = $stock;
    }

    public function getStock(string $item): int {
        // BUG 1: Unregistered items cause an 'undefined array key' warning instead of returning 0
        return $this->stock[$item] ?? 0;
    }
}

class OrderManager {
    private Inventory $inventory;
    private array $orders = []; // Stores ["item_name" => total_qty_ordered]

    public function __construct(Inventory $inventory) {
        $this->inventory = $inventory;
    }

    public function placeOrder(string $item, int $qty): void {
        // BUG 2: Overwrites order count instead of adding to existing total
        $this->orders[$item] = ($this->orders[$item] ?? 0) + $qty;
    }

    public function isFulfillable(): bool {
        foreach ($this->orders as $item => $qty) {
            // BUG 3: Does not properly check if inventory has enough stock for each item
            if ($qty > $this->inventory->getStock($item)) {
                return false;
            }
        }
        return true;
    }
}
$inventory = new Inventory(["apple" => 10, "banana" => 5]);
$manager = new OrderManager($inventory);

$manager->placeOrder("apple", 4);
$manager->placeOrder("apple", 3); // total = 7 apples (In stock: 10) -> Fulfillable

echo $manager->isFulfillable() ? "Yes" : "No"; // Outputs: Yes

$manager->placeOrder("banana", 10); // total = 10 bananas (In stock: 5) -> Not Fulfillable

echo $manager->isFulfillable() ? "Yes" : "No"; // Outputs: No

// Question 4
// class InvalidPasswordException extends Exception {}
// function validateLogin(string $username, string $password): bool {
//     if ($username === "") {
//         throw new InvalidArgumentException("Username required");
//     }
//     if (strlen($password) < 8) {
//         throw new InvalidPasswordException("Password too short");
//     }
//     return true;
// }

// Question 3
// class Basket {
//     private array $items = [];
//     public function addItem(string $item, int $qty = 1): void{
//         if ($qty > 0) {
//             $this->items[$item] = ($this->items[$item] ?? 0) + $qty;
//         }
//     }
//     public function removeItem(string $item, int $qty = 1): void {
//         if ($qty <= 0 || !isset($this->items[$item])) {
//             return;
//         }
//         $this->items[$item] -= $qty;
//         if ($this->items[$item] <= 0) {
//             unset($this->items[$item]);
//         }
//     }
//     public function getItemCount(string $item): int {
//         return $this->items[$item] ?? 0;
//     }
//     public function getTotalItems(): int {
//         return array_sum($this->items);
//     }
// }
// $basket = new Basket();
// $basket->addItem("apple", 3);
// $basket->addItem("apple", 2);
// $basket->removeItem("apple", 1);
// $basket->addItem("banana", 2);

// echo $basket->getItemCount("apple") . "\n";
// echo $basket->getTotalItems() . "\n";

// Question 2
// function formatTitle(string $title): string {
//     $trimmed = trim(strtolower($title));
//     if ($trimmed === "") {
//         return "";
//     }
//     $words = preg_split("/\s+/", $trimmed);
//     $capitalizedWrods = array_map("ucfirst", $words);
//     return implode(" ", $capitalizedWrods);
// }
// echo formatTitle("   hELLo   wORld  ");

// Question 1
// function topScorer(array $scores): string {
//     if (empty($scores)){
//         return "";
//     }
//     $name = "";
//     $highest_score = null;
//     foreach($scores as $player => $score) {
//         if ($highest_score === null || $score > $highest_score) {
//             $highest_score = $score;
//             $name = $player;
//         }
//     }
//     return $name;
// }
// $data = ["Alice" => 120, "Bob" => 250, "Charlie" => 250];
// echo topScorer($data);