<?php
namespace Tests\Unit;
use Tests\TestCase;
use App\Cars;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class CountCarTest extends TestCase
{
    public function testCarCount(){
        $cars=Cars::all();
        $cars->count();
        $this->assertEquals(50,count($cars));
    }
}