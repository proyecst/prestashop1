<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class FeaturedProducts extends Module
{
    public function __construct()
    {
        $this->name = 'featuredproducts';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Tu Nombre';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Featured Products');
        $this->description = $this->l('Displays a list of featured products.');
    }

    public function install()
    {
        return parent::install() && $this->registerHook('displayHome');
    }

    public function hookDisplayHome($params)
    {
        $this->context->smarty->assign('featured_products', $this->getFeaturedProducts());

        return $this->display(__FILE__, 'views/templates/hook/featured_products.tpl');
    }

    private function getFeaturedProducts()
    {
        return Product::getFeaturedProducts($this->context->language->id);
    }
}
