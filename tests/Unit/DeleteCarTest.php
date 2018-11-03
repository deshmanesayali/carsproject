<?php
namespace Tests\Unit;
use Tests\TestCase;
use App\Cars;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class DeleteCarTest extends TestCase
{
    public function testDeleteCar(){
        $car = Cars::find(51);
        DB::table('cars')->where('id', '>', 50)->delete();
        $cars = Cars::all();
        $this->assertDatabaseMissing('cars', ['id' => '51']);
    }
}