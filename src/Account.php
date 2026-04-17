<?php

namespace App;

/**
 * The Bank Account Blueprint
 */
class Account
{
    public $owner;
    public $balance = 0;

    /**
     * Action: Add money to the balance
     */
    public function deposit(float $amount): void
    {
        $this->balance += $amount;
        echo "[LOG] Deposited $" . $amount . " into " . $this->owner . "'s account.\n";
    }
}
