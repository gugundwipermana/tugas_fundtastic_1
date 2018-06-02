<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Post;

class CrudTest extends TestCase
{
	
	use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        // $this->assertTrue(true);
    	// CREATE --------------------------------------
        $post = Post::create([
        	"user_id" 	=> 1,
        	"title"		=> "Title Test",
        	"body"		=> "Body Test"
        ]);

        $this->assertDatabaseHas('posts', [
        	"user_id" 	=> 1,
        	"title"		=> "Title Test",
        	"body"		=> "Body Test"
        ]);

        // UPDATE --------------------------------------
        $update = Post::find($post->id)->update([
        	"title"		=> "Title Test Edit",
        	"body"		=> "Body Test Edit"
        ]);

        $this->assertDatabaseHas('posts', [
        	"user_id" 	=> 1,
        	"title"		=> "Title Test Edit",
        	"body"		=> "Body Test Edit"
        ]);

        // DELETE --------------------------------------
        Post::destroy($post->id);

        $this->assertDatabaseMissing('posts', [
        	"user_id" 	=> 1,
        	"title"		=> "Title Test Edit",
        	"body"		=> "Body Test Edit"
        ]);
    }
}
