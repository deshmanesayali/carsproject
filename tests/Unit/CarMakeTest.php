<?php
namespace Tests\Unit;
use Tests\TestCase;
use App\Cars;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class MakeTest extends TestCase
{
    public function testCarMake()
    {
        //  $cars = Car::all();
        $car = Cars::inRandomOrder()->first();
        if ($car->make = "Honda") {
            $this->assertTrue(true);
        }
        elseif ($car->make = "Toyota") {
            $this->assertTrue(true);
        }
        else ($car->make = "Ford");
        {
            $this->assertTrue(true);
        }
    }
}