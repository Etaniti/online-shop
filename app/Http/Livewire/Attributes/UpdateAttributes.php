<?php

namespace App\Http\Livewire\Attributes;

use App\Dto\AttributeDto;
use App\Models\Attribute;
use App\Models\Category;
use App\Services\AttributeService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Livewire\Component;

class UpdateAttributes extends Component
{
    /**
     * @var bool
     */
    public bool $showInputs = false;

    /**
     * @var bool
     */
    public bool $showDeleteForm = false;

    /**
     * @var Category
     */
    public Category $category;

    /**
     * @var int
     */
    public int $attribute;

    /**
     * @var string
     */
    public string $name;

    /**
     * Mount the Livewire component.
     *
     * @param int $attribute
     * @return void
     */
    public function mount(int $attribute): void
    {
        $this->attribute = $attribute;
    }

    /**
     * Render the Livewire component.
     *
     * @return View
     */
    public function render(): View
    {
        $attribute = Attribute::findOrFail($this->attribute);
        return view('livewire.attributes.update-attributes', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AttributeService $service
     * @return void
     * @throws ValidationException
     */
    public function update(AttributeService $service): void
    {
        if (!empty($this->name)) {
            $data = Validator::make(['name' => $this->name], [
                'name' => [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique('attributes', 'name')->where(function ($query) {
                        return $query->where('category_id', $this->category['id']);
                    }),
                ]
            ])->validate();
            $dto = new AttributeDto($data['name'], $this->category['id']);
            $service->update($dto, $this->attribute);
            $this->dispatchBrowserEvent('refresh-page');
        }
    }
}
