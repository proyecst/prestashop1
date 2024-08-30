<?php
class CustomerReviews extends Module
{
    public function __construct()
    {
        $this->name = 'customerreviews';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Tu Nombre';
    }

    public function install()
    {
        return parent::install();
    }

    public function hookDisplayProductAdditionalInfo($params)
    {
        // Display customer reviews
    }
}
Plugin de SEO Avanzado