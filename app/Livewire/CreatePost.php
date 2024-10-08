<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CreatePost extends Component
{
    #[Rule('required', message: 'Yo, add a title')]
    #[Rule('min:5', message: 'Yo, too short')]
    public $title = '';

    #[Rule('required', message: 'Yo, add content.')]
    public $content = '';
    public function render()
    {
        return view('livewire.create-post');
    }

    public function store()
    {
        // $this->validate([
        //     'title' => ['required', 'string', 'max:255'],
        //     'content' => ['required', 'string']
        // ]);

        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        $this->redirectRoute('posts.index', navigate: true);
    }
}
