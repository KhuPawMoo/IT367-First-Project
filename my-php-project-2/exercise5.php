<?php
//Exercise 1
// function initials(string $name): string {
//     $trimmed = trim($name);
//     if ($trimmed === "") {
//         return "";
//     }
//     $words = preg_split("/\s+/", $trimmed);
//     $initials = array_map(fn($word) => strtoupper($word[0]), $words);
//     return implode(".", $initials);
// }

//Exercise 2
// function busiestDay(array $counts): string {
//     $mostMeals = null;
//     $busiestDay = "";
//     foreach($counts as $day => $count) {
//         if ($mostMeals === null || $count > $mostMeals) {
//             $mostMeals = $count;
//             $busiestDay = $day;
//         }
//     }
//     return $busiestDay;
// }

//Exercise 3
// class Counter {
//     private int $initialStart;
//     private int $currentValue;
//     public function __construct(int $start = 0) {
//         $this->initialStart = $start;
//         $this->currentValue = $start;
//     }
//     public function add(int $step = 1): void {
//         if ($step <= 0) {
//             return;
//         }
//         $this->currentValue += $step;
//     }   // ignores a step of 0 or less
//     public function reset(): void {
//         $this->currentValue = $this->initialStart;
//     }             // back to the starting value
//     public function value(): int {
//         return $this->currentValue;
//     }
// }

//Exercise 4
// class OutOfStockException extends Exception {}
// function buy(int $stock, int $qty): int {
//     if ($qty <= 0) {
//         throw new InvalidArgumentException("Quantity must be positive");
//     }
//     if ($qty > $stock) {
//         throw new OutOfStockException("Out of stock");
//     }
//     return $stock - $qty;
// }

//Exercise 5
// class Menu {
//     private array $prices;

//     public function __construct(array $prices) {
//         $this->prices = $prices;
//     }

//     public function priceOf(string $dish): float {
//         // BUG: an unknown dish must cost 0 instead of throwing an error/warning
//         return (float) $this->prices[$dish] ?? 0.0;
//     }
// }

//Exercise 6
function compress(string $text): string {
    if ($text === "") {
        return "";
    }
    $letters = str_split($text);
    $compressed = array_count_values($letters);
}