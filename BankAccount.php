<?php

class BankAccount
{
    private $accountNumber;
   protected $balance;

    public function __construct($accountNumber, $balance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($sum) {
        if ($sum > 0) {
            $this->balance = $sum;
        } else
               throw new BalanceException("Недостатньо коштів");
    }

    public function withdraw($sum) {
        if ($sum > 0 and $this->balance = $sum) {
            $this->balance = $sum;
            }else {
            throw new Exception();
        }
        }
}


$user1 = new BankAccount("947436389", 1000);
$user2 = new BankAccount("974596579", 2000);



try {
    $user1->deposit(700);
    $user2->withdraw(800);
} catch (BalanceException $a) {
    echo "Помилка: " . $a->getMessage() . PHP_EOL;
} catch (Exception $a) {
    echo "Помилка: " . $a->getMessage() . PHP_EOL;
}

echo "Після оплати:" . PHP_EOL;
echo "Банківський рахунок: " . $user1 ->getAccountNumber() . PHP_EOL;
echo  "Баланс: " . $user1 ->getBalance() . PHP_EOL;
echo "Банківський рахунок: " . $user2 ->getAccountNumber() . PHP_EOL;
echo "Баланс: " . $user2 ->getBalance() . PHP_EOL;
