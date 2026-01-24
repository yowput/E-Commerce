<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class ProductDisplay extends Component
{
    public $activeCategoryId;

    public function mount()
    {
        // Default awal: Laptop atau kategori pertama
        $category = Category::where('slug', 'laptop')->first() ?? Category::first();
        $this->activeCategoryId = $category ? $category->id : null;
    }

    public function setCategory($id)
    {
        $this->activeCategoryId = $id;
    }

    public function render()
    {
        $categories = Category::where('name', '!=', 'Elektronik')->get();
        $products = Product::where('category_id', $this->activeCategoryId)->get();

        return view('livewire.product-display', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
