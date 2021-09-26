<?php

namespace Tests\Proxy\DP;

use App\Proxy\DP\BankAccountProxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    /**
     * @test
     */
    public function proxy_will_only_execute_expensive_get_balance_once()
    {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(30);

        // this time balance is being calculated
        $this->assertSame(30, $bankAccount->getBalance());

        // inheritance allows for BankAccountProxy to behave to an outsider exactly like ServerBankAccount
        $bankAccount->deposit(50);

        // this time the previously calculated balance is returned again without re-calculating it
        $this->assertSame(30, $bankAccount->getBalance());
    }
}