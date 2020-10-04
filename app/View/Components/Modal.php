<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{

    /**
     * The product/category id.
     *
     * @var string
     */
    public $id;

    /**
     * The product/category type.
     *
     * @var string
     */
    public $type;

    /**
     * The producty name.
     *
     * @var string
     */
    public $product;

    /**
     * The category name.
     *
     * @var string
     */
    public $category;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $type, $product = null, $category = null)
    {
        $this->id = $id;
        $this->type = $type;
        $this->product = $product;
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
