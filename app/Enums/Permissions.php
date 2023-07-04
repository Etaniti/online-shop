<?php

namespace App\Enums;

class Permissions
{
    /**
     * Permissions for actions on abstract products.
     */
    public const CAN_CREATE_ABSTRACT_PRODUCTS = 'create-abstract-products';
    public const CAN_UPDATE_ABSTRACT_PRODUCTS = 'update-abstract-products';
    public const CAN_DELETE_ABSTRACT_PRODUCTS = 'create-abstract-products';

    /**
     * Permissions for actions on attributes.
     */
    public const CAN_CREATE_ATTRIBUTES = 'create-attributes';
    public const CAN_UPDATE_ATTRIBUTES = 'update-attributes';
    public const CAN_DELETE_ATTRIBUTES = 'create-attributes';

    /**
     * Permissions for actions on products.
     */
    public const CAN_CREATE_PRODUCTS = 'create-products';
    public const CAN_UPDATE_PRODUCTS = 'update-products';
    public const CAN_DELETE_PRODUCTS = 'create-products';

    /**
     * Permissions for actions on product variants.
     */
    public const CAN_CREATE_PRODUCT_VARIANTS = 'create-product-variants';
    public const CAN_UPDATE_PRODUCT_VARIANTS = 'update-product-variants';
    public const CAN_DELETE_PRODUCT_VARIANTS = 'create-product-variants';

    /**
     * Permissions for actions on product variant features.
     */
    public const CAN_CREATE_PRODUCT_VARIANT_FEATURES = 'create-product-variants';
    public const CAN_UPDATE_PRODUCT_VARIANT_FEATURES = 'update-product-variants';
    public const CAN_DELETE_PRODUCT_VARIANT_FEATURES = 'create-product-variants';

    /**
     * Permissions for actions on product items.
     */
    public const CAN_CREATE_PRODUCT_ITEMS = 'create-product-items';
    public const CAN_UPDATE_PRODUCT_ITEMS = 'update-product-items';
    public const CAN_DELETE_PRODUCT_ITEMS = 'create-product-itemss';
}
