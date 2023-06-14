<?php

namespace App\Http\Livewire\Attributes;

use App\Dto\AttributeDto;
use App\Models\Category;
use App\Services\AttributeService;
use Illuminate\View\View;
use Livewire\Component;

class CreateMultipleAttributes extends Component
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
     * @var array|array[]
     */
    protected array $rules = [
        'name' => ['required', 'string', 'unique:attributes', 'max:255'],
    ];

    /**
     * Render the Livewire component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('livewire.attributes.create-multiple-attributes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AttributeService $attributeService
     * @return void
     */
    public function store(AttributeService $attributeService): void
    {
        $data = $this->validate();
        $attributeDto = new AttributeDto($data['name'], $this->category['id']);
        $attributeService = $attributeService->store($attributeDto);
        $this->dispatchBrowserEvent('refresh-page');
    }
}
