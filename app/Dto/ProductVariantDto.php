<?php

namespace App\Dto;

class ProductVariantDto
{
    /**
     * @var int
     */
    private int $product_id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var array
     */
    private array $photos;

    /**
     * @var string
     */
    private string $sku;

    /**
     * @var int
     */
    private int $article;

    /**
     * @var float
     */
    private float $price;


    /**
     * Create a new DTO instance.
     *
     * @param int $product_id
     * @param string $name
     * @param string $description
     * @param array $photos
     * @param string $sku
     * @param int $article
     * @param float $price
     */
    public function __construct(int $product_id, string $name, string $description, array $photos, string $sku, int $article, float $price)
    {
        $this->product_id = $product_id;
        $this->name = $name;
        $this->description = $description;
        $this->photos = $photos;
        $this->sku = $sku;
        $this->article = $article;
        $this->price = $price;
    }

    /**
     * Get the value of the property.
     *
     * @return int
     */
    public function getProductId(): int
    {
        return $this->product_id;
    }

    /**
     * Set the value of the property.
     *
     * @param int $product_id
     */
    public function setProductId(int $product_id): void
    {
        $this->product_id = $product_id;
    }

    /**
     * Get the value of the property.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of the property.
     *
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get the value of the property.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of the property.
     *
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Get the value of the property.
     *
     * @return array
     */
    public function getPhotos(): array
    {
        return $this->photos;
    }

    /**
     * Set the value of the property.
     *
     * @param array $photos
     */
    public function setPhotos(array $photos): void
    {
        $this->photos = $photos;
    }

    /**
     * Get the value of the property.
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * Set the value of the property.
     *
     * @param string $sku
     */
    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * Get the value of the property.
     *
     * @return int
     */
    public function getArticle(): int
    {
        return $this->article;
    }

    /**
     * Set the value of the property.
     *
     * @param int $article
     */
    public function setArticle(int $article): void
    {
        $this->article = $article;
    }

    /**
     * Get the value of the property.
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the value of the property.
     *
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * Get the array of property attributes.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'product_id' => $this->product_id,
            'name' => $this->name,
            'description' => $this->description,
            'sku' => $this->sku,
            'article' => $this->article,
            'price' => $this->price,
        ];
    }
}
