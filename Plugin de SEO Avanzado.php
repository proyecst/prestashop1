<?php
class AdvancedSEO extends Module
{
    public function __construct()
    {
        $this->name = 'advancedseo';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Tu Nombre';
    }

    public function install()
    {
        return parent::install();
    }

    public function getContent()
    {
        // Settings form
    }
}