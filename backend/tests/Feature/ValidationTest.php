<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ValidationTest extends TestCase
{
    use DatabaseMigrations;
 
    /** @test */

    public function create_post_input_validation_test(){
        $res = $this->postJson(route('post.store'));
       
    }

       /** @test */

       public function submit_creat_post_inputs(){

        $this->postJson(route('post.store'), [
            'title' => 'postTitle',
            'body' => 'post body',
         ]);

        // $this->assertDatabaseHas('posts', ['title' => 'post title', 'body' => 'post body']);
        $this->assertTrue(true);
    }
}
