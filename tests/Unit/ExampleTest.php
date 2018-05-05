<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase; 

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        //given i have tow records in the database  that are posts 


        //and each one was posted one month apart 

        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([

            'created_at' => \Carbon\Carbon::now()->subMonth()

        ]);


        //when i fetch archives

        $posts = Post::archives();


        //then the response should be in the proper format

        // $this->assertCount(2, $posts);

        $this->assertEquals([
            [
                "year" => $first->created_at->format('Y'),
                "month" => $first->created_at->format('F'),
                "published" => 1
            ],
            [
                "year" => $second->created_at->format('Y'),
                "month" => $second->created_at->format('F'),
                "published" => 1
            ]
        ], $posts);
    }
}
