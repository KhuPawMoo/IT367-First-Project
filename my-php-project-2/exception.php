<?php

class InsufficientFundsException extends Exception {
}
class InvalidAmountException extends Exception {
}

function withdraw($balance, $amount) {
    if ($amount <= 0) {
        throw new InvalidAmountException("Amount must be greater than ZERO");
    }
    if ($amount > $balance) {
        throw new InsufficientFundsException("Insufficient balance.");
    }
    return $balance - $amount;
}

try {
    echo withdraw(500, 0);
}
catch (InsufficientFundsException $e) {
    echo "Withdrawal Error: " . $e->getMessage();
}
catch (InvalidAmountException $e) {
    echo "Invalid Amount: " . $e->getMessage();
}
    // function divide($a, $b) {
    //     if ($b == 0) {
    //         throw new Exception("You cannot divide by zero.");
    //     }
    //     return $a / $b;
    // }

    // try {
    //     echo "Start processing...\n";
    //     echo divide(5, 0);
    // } catch (Exception $e) {
    //     echo "Error: " . $e->getMessage();
    // }
    // finally {
    //     echo "Processing finished.";
    // }