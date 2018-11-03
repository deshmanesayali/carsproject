<?php
namespace Tests\Unit;
use Tests\TestCase;
use App\Cars;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class YearTypeTest extends TestCase
{
    public function testCarYear()
    {
        $car = Cars::find(10);
        $this->assertInternalType('numeric',$car->year);
    }
}