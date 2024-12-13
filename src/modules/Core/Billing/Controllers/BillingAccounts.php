<?php

namespace CeremonyCrmMod\Core\Billing\Controllers;

class BillingAccounts extends \CeremonyCrmApp\Core\Controller {


  public function getBreadcrumbs(): array
  {
    return array_merge(parent::getBreadcrumbs(), [
      [ 'url' => 'customers', 'content' => $this->translate('Customers') ],
      [ 'url' => '', 'content' => $this->translate('Billing Accounts') ],
    ]);
  }

  public function prepareView(): void
  {
    parent::prepareView();
    $this->setView('@mod/Core/Billing/Views/BillingAccounts.twig');
  }

}