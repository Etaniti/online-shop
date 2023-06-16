<?php

namespace App\Http\Livewire\Attributes;

use App\Dto\AttributeDto;
use App\Models\Category;
use App\Services\AttributeService;
use Illuminate\View\View;
use Livewire\Component;

class CreateAttributes extends Component
{
    /**
     * @var bool
     */
    public bool $showCreateInputs = false;

    /**
     * @var bool
     */
    public bool $showUpdateInputs = false;

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
        return view('livewire.attributes.create-attributes');
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
        $attributeService->store($attributeDto);
        $this->dispatchBrowserEvent('refresh-page');
    }
}
