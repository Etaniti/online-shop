<?php

namespace App\Http\Livewire\Products;

use App\Dto\ProductDto;
use App\Models\Category;
use App\Services\ProductService;
use Illuminate\View\View;
use Livewire\Component;

class CreateProducts extends Component
{
    /**
     * @var bool
     */
    public bool $showInputs = false;

    /**
     * @var Category
     */
    public Category $category;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $producer;

    /**
     * @var array|array[]
     */
    protected array $rules = [
        'name' => ['required', 'string', 'unique:products', 'max:255'],
        'producer' => ['required', 'string', 'max:255'],
    ];

    /**
     * Render the Livewire component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('livewire.products.create-products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductService $productService
     * @return void
     */
    public function store(ProductService $productService): void
    {
        $data = $this->validate();
        $productDto = new ProductDto($this->category['id'], $data['name'], $data['producer']);
        $productService->store($productDto);
        $this->dispatchBrowserEvent('refresh-page');
    }
}
