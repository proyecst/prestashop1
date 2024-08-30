<?php
class PayPalPaymentModule extends PaymentModule
{
    public function __construct()
    {
        // Initialize module
        $this->name = 'paypalpayment';
        $this->tab = 'payments_gateways';
        $this->version = '1.0.0';
        $this->author = 'Tu Nombre';
    }

    public function install()
    {
        return parent::install();
    }

    public function hookPaymentOptions($params)
    {
        return [
            new PaymentOption()
                ->setCallToActionText($this->trans('Pay with PayPal', [], 'Modules.Paypalpayment.Shop'))
                ->setModuleName($this->name)
                ->setForm($this->generateForm())
        ];
    }

    private function generateForm()
    {
        // Generate payment form
    }
}
Módulo de Reseñas de Clientes
 