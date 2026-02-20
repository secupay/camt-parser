<?php

declare(strict_types=1);

namespace Genkgo\Camt\DTO;

use Money\Money;

class AmountDetails
{
    private ?Money $transactionAmount = null;

    private ?Money $instructedAmount = null;

    public function getTransactionAmount(): ?Money
    {
        return $this->transactionAmount;
    }

    public function setTransactionAmount(?Money $transactionAmount): void
    {
        $this->transactionAmount = $transactionAmount;
    }

    public function getInstructedAmount(): ?Money
    {
        return $this->instructedAmount;
    }

    public function setInstructedAmount(?Money $instructedAmount): void
    {
        $this->instructedAmount = $instructedAmount;
    }
}