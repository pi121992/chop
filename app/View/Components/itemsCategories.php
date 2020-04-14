<?php

namespace App\View\Components;

use Illuminate\View\Component;

class itemsCategories extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
   public $title,$imgsrc,$link,$location,$price;

    public function __construct($title="title",$imgsrc="",$link="",$location="",$price="")
    {
        $this->title=$title;
        $this->imgsrc=$imgsrc;
        $this->link=$link;
        $this->location=$location;
        $this->price=$price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.items-categories');
    }
}
