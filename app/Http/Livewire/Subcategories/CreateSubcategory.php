<?php

namespace App\Http\Livewire\Subcategories;

use App\Dto\CategoryDto;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\View\View;
use Livewire\Component;

class CreateSubcategory extends Component
{
    /**
     * @var bool
     */
    public bool $showInputs;

    /**
     * @var Category
     */
    public Category $category;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var int
     */
    public int $parent_id;

    /**
     * @var array|array[]
     */
    protected array $rules = [
        'name' => ['required', 'string', 'max:255'],
    ];

    /**
     * Render the Livewire component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('livewire.subcategories.create-subcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryService $service
     * @return void
     */
    public function store(CategoryService $service)
    {
        $parent_id = $this->category->id;
        $data = $this->validate();
        $dto = new CategoryDto($data['name'], $parent_id);
        $service->store($dto);
        $this->dispatchBrowserEvent('refresh-page');
    }
}
