<?php
// Question 12
interface LoggerInterface {
    public function log(string $message): void;
}

abstract class BaseLogger implements LoggerInterface {
    protected string $prefix = "LOG";
}

class FileLogger extends BaseLogger {
    private string $filePath;

    public function __construct(string $filePath) {
        $this->filePath = $filePath;
    }

    public function log(string $message): void {
        file_put_contents($this->filePath, "[{$this->prefix}] {$message}\n");
    }
}

$logger = new FileLogger("app.log");
$logger->log("Server started");

// Question 11
// interface NotifierInterface {
//     public function send(string $message): bool;
// }
// class EmailNotifier implements NotifierInterface{
//     private string $email;
//     public function __construct(string $email) {
//         $this->email = $email;
//     }
//     public function send(string $message): bool {
//         echo "Email sent to {$this->email}: {$message}\n";
//         return true;
//     }
// }
// class SMSNotifier implements NotifierInterface {
//     private string $phoneNumber;
//     public function __construct(string $phoneNumber) {
//         $this->phoneNumber = $phoneNumber;
//     }
//     public function send(string $message): bool {
//         echo "SMS sent to {$this->phoneNumber}: {$message}\n";
//         return true;
//     }
// }
// function sendBulkNotification(array $notifiers, string $message): int {
//     $sentCount = 0;
//     foreach($notifiers as $notifier){
//         if($notifier->send($message)){
//             $sentCount++;
//         }
//     }
//     return $sentCount;
// }

// Question 10
// abstract class PaymentProcessor{
//     protected float $amount;
//     function __construct(float $amount){
//         $this->amount = $amount;
//     }
//     abstract public function process(): string;
//     public function getReceipt(): string {
//         return "Paid: $" . number_format($this->amount, 2);
//     }
// }
// class CreditCardPayment extends PaymentProcessor {
//     private string $cardNumber;
//     public function __construct(float $amount, string $cardNumber){
//         parent::__construct($amount);
//         $this->cardNumber = $cardNumber;
//     }
//     public function process(): string {
//         return "Processing credit card payment of $" . $this->amount;
//     }
// }
// class PayPalPayment extends PaymentProcessor {
//     private string $email;
//     function __construct(float $amount, string $email) {
//         parent::__construct($amount);
//         $this->email = $email;
//     }
//     public function process(): string {
//         return "Processing PayPal payment for " . $this->email;
//     }
// }

// Question 9
// class BankAccount {
//     private string $accountNumber;
//     private float $balance;
//     public function __construct(string $accountNumber, float $balance = 0.0) {
//         $this->accountNumber = $accountNumber;
//         $this->balance = $balance;
//     }
//     public function deposit(float $amount): void {
//         if($amount<=0){
//             throw new InvalidArgumentException("Amount must be greater than ZERO!");
//         }
//         $this->balance += $amount;
//     }
//     public function withdraw(float $amount): void {
//         if($amount<=0){
//             throw new InvalidArgumentException("Amount must be greater than ZERO!");
//         }
//         if($amount>$balance){
//             throw new InvalidArgumentException("Insufficient funds!");
//         }
//         $this->balance -= $amount;
//     }
//     public function getBalance(): float {
//         return $this->$balance;
//     }
//     public function getAccountNumber(): string {
//         return $this->accountNumber;
//     }
// }