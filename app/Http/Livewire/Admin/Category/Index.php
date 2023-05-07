<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('livewire.admin.category.index', compact('categories'));
    }
}
