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
     * @param AttributeService $service
     * @return void
     */
    public function store(AttributeService $service): void
    {
        $data = $this->validate();
        $dto = new AttributeDto($data['name'], $this->category['id']);
        $service->store($dto);
        $this->dispatchBrowserEvent('refresh-page');
    }
}
