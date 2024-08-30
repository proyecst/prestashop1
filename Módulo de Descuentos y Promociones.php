 
Copiar
<?php
class DiscountPromotions extends Module
{
    public function __construct()
    {
        $this->name = 'discountpromotions';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Tu Nombre';
    }

    public function install()
    {
        return parent::install();
    }

    public function hookDisplayShoppingCart($params)
    {
        // Display discount promotions in shopping cart
    }
}