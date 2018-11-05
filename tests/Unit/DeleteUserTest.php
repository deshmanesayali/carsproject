<?php
namespace Tests\Unit;
use App\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class DeleteUserTest extends TestCase
{
    public function testDeleteUser(){
       $user= User::all()->last();
        $this->assertTrue($user->delete());
        /*$user = User::all()->last();
        $id = $user->id;
        DB::table('users')->where('id', '>', $id )->delete();
        $user = User::all();
        $this->assertDatabaseMissing('users',$id);*/

    }
}