<?php

namespace Tests\Feature\Livewire;

use App\Models\Post;
use App\Livewire\CreatePost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    /** @test */
    public function can_create_a_post()
    {
        // $post = Post::whereTitle('Testt')->first();
        // $this->assertNull($post);

        Livewire::test(CreatePost::class)
            ->set('title', 'Test')
            ->set('content', 'Some content')
            ->call('store');

        $post = Post::whereTitle('Test')->first();
        $this->assertNotNull($post);

    }

    /** @test */
    public function title_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('title', '')
            ->call('store')
            ->assertHasErrors('title');
    }

}
