<?php
namespace Tests\Unit;
use Tests\TestCase;
use \App\Cars;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class InsertCarTest extends TestCase
{
    public function testInsertCar()
    {
        $car = factory(\App\Cars::class)->make();
        $this->assertDatabaseHas('cars', ["make" => "Toyota"]);
    }
}