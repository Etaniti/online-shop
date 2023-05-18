<?php

namespace App\Dto;

class ProductVariantDto
{
    private int $product_id;
    private string $name;
    private string $description;
    private string $sku;
    private int $article;
    private int $barcode;
    private float $price;

    /**
     * Create a new DTO instance.
     *
     * @param int $product_id
     * @param string $name
     * @param string $description
     * @param string $sku
     * @param int $article
     * @param int $barcode
     * @param float $price
     */
    public function __construct(int $product_id, string $name, string $description, string $sku, int $article, int $barcode, float $price)
    {
        $this->product_id = $product_id;
        $this->name = $name;
        $this->description = $description;
        $this->sku = $sku;
        $this->article = $article;
        $this->barcode = $barcode;
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
     * @return int
     */
    public function getBarcode(): int
    {
        return $this->barcode;
    }

    /**
     * Set the value of the property.
     *
     * @param int $barcode
     */
    public function setBarcode(int $barcode): void
    {
        $this->barcode = $barcode;
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
}
