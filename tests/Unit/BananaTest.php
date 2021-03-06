<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Owner;

class BananaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testBananaOutput()
    {
        $this->assertSame(Owner::haveWeBananas(0), "No we have no bananas");

        $this->assertSame(Owner::haveWeBananas(2), "Yes we have 2 bananas");
        
        $this->assertSame(Owner::haveWeBananas(1), "Yes we have 1 banana");

        $this->assertSame(Owner::haveWeBananas(-12), "Yes we have -12 bananas");
    }
}
