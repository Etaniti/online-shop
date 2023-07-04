<?php

namespace App\Http\Livewire\Attributes;

use App\Models\Attribute;
use App\Models\Category;
use App\Services\AttributeService;
use Illuminate\View\View;
use Livewire\Component;

class DeleteAttributes extends Component
{
    /**
     * @var int
     */
    public int $attribute;

    public Category $category;

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
        return view('livewire.attributes.delete-attributes', compact('attribute'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param AttributeService $service
     * @return void
     */
    public function delete(AttributeService $service): void
    {
        $service->delete($this->attribute);
        $this->redirect(route('admin.categories.show', ['category' => $this->category]));
    }
}
