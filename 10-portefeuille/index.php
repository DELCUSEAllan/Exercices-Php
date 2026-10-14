<?php
declare(strict_types=1);
class Wallet {
    public function __construct(private string $owner, private int $balance = 0) {}
    // TODO : credit, debit, balance.
}
