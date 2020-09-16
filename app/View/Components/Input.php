<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $title = "";
    public $name = "";
    public $value = "";
    public $id = "";
    public $type = "";


    /**
     * Create a new component instance.
     * @param $title string
     * @param $name string
     * @param $value string
     * @return void
     */
    public function __construct($title = "", $name = "", $value ="", $id = "", $type = "")
    {
        $this->title = $title;
        $this->name = $name;
        $this->value = $value;
        $this->id = $id;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
