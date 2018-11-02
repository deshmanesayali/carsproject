<?php
namespace Tests\Unit;
use Tests\TestCase;
use App\Cars;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class ModelTypeTest extends TestCase
{
    public function testCarModelDatatype()
    {
        $car = Cars::all();
        $car = Cars::find(10);
        $this->assertInternalType('string', $car->model);
    }
}