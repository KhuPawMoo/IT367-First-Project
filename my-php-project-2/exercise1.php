<?php
// Question 8
function cartSummary(array $cart): array{
    $updatedItems = [];
    $grandTotal = 0;
    foreach($cart as $item){
        $itemTotal = $item["price"]*$item["quantity"];
        $item['total'] = $itemTotal;
        $grandTotal += $itemTotal;
        $updatedItems[] = $item;
    }
    return [
        "items" => $updatedItems,
        "grand_total" => $grandTotal
    ];
}
$cart = [
    ["name" => "Laptop", "price" => 1000, "quantity" => 1],
    ["name" => "Mouse", "price" => 25, "quantity" => 2]
];
print_r(cartSummary($cart));

// Question 7
// function flattenArray(array $array): array{
//     $result = [];
//     foreach($array as $item){
//         if(is_array($item)){
//             $result = array_merge($result, flattenArray($item));
//         }else{
//             $result[] = $item;
//         }
//     }
//     return $result;
// }
// print_r(flattenArray([1,[2,[3,4],5],6]));

// Question 6
// function parseQueryString(string $query): array{
//     $query = ltrim($query,'?');
//     if(empty($query)){
//         return [];
//     }
//     $result = [];
//     $pairs = explode('&',$query);
//     foreach($pairs as $pair){
//         $parts = explode('=',$pair,2);
//         $key = $parts[0];
//         $value = $parts[1] ?? null;

//         $result[$key] = $value;
//     }
//     return $result;
// }
// print_r(parseQueryString("?page=2&sort=desc&active"));

// Question 4B
// function rotateMatrix(array $matrix): array{
//     if(empty($matrix)){
//         return [];
//     }
//     $transposed = [];
//     foreach($matrix as $rowIndex => $row){
//         foreach($row as $colIndex => $value){
//             $transposed[$colIndex][$rowIndex] = $value;
//         }
//     }
//     $rotated = [];
//     foreach($transposed as $row){
//         $rotated[]=array_reverse($row);
//     }
//     return $rotated;
// }
// print_r(rotateMatrix([[1,2],[3,4]]));

// Question 4A
// function transposeMatrix(array $matrix): array {
//     if(empty($matrix)){
//         return [];
//     }
//     $transposed = [];
//     foreach($matrix as $rowIndex => $row){
//         foreach($row as $colIndex => $value){
//             $transposed[$colIndex][$rowIndex] = $value;
//         }
//     }
//     return $transposed;
// }
// print_r(transposeMatrix([[1,2,3],[4,5,6]]));

// Question 2B
// function indexBy(array $items, string $key): array {
//     $result = [];
//     foreach($items as $item){
//         if(!isset($item[$key])){
//             continue;
//         }
//         $indexKey = $item[$key];
//         $result[$indexKey] = $item;
//     }
//     return $result;
// }
// $users = [
//     ["id" => 101, "name" => "Alice"],
//     ["id" => 102, "name" => "Bob"],
//     ["id" => 103, "name" => "Charlie"]
// ];
// print_r(indexBy($users, "id"));

// Question 2A
// function groupBy(array $items, string $key): array {
//     $result = [];
//     foreach($items as $item){
//         $group = $item[$key] ?? 'unknown';
//         $result[$group][] = $item;
//     }
//     return $result;
// }
// $data = [
//     ["name" => "Alice", "role" => "admin"],
//     ["name" => "Bob", "role" => "user"],
//     ["name" => "Charlie", "role" => "admin"],
//     ["name" => "Dave"]
// ];
// print_r(groupBy($data, "role"));

// Question 1B
// function countHashtags(string $text): array {
//     $text = strtolower($text);
//     preg_match_all("/#\w+/", $text, $matches);
//     return array_count_values($matches[0]);
// }
// print_r(countHashtags("Coding in #PHP is fun! #php #Code2026 #PHP"));

// Question 1A
// function wordFrequency(string $text): array {
//     $text = strtolower($text);
//     preg_split("/\b\w+\b/", $text, $matches);
//     return array_count_values($matches);
// }
// print_r (wordFrequency("Hello, world! Hello PHP world."));