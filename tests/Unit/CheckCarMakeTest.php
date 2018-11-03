<?php
namespace Tests\Unit;
use Tests\TestCase;
use App\Cars;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class MakeTest extends TestCase
{
    public function testCarModel()
    {
        //  $cars = Car::all();
        $car = Cars::inRandomOrder()->first();
        if ($car->make = "honda") {
            $this->assertTrue(true);
        }
        elseif ($car->make = "toyota") {
            $this->assertTrue(true);
        }
        else ($car->make = "ford");
        {
            $this->assertTrue(true);
        }
    }
}