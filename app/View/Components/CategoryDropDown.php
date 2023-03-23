<?php

namespace App\View\Components;

use App\Models\category;
use Illuminate\View\Component;

class CategoryDropDown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    

    /**
     * Get the view / contents that represent the component.
     *
     */
    public function render()
    {
        return view('components.category-drop-down',[
        'categories' => category::all(),
        'currentCategory' => category::firstWhere('slug', request('category'))     
        ]);
    }
}
