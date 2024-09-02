<?php

namespace CeremonyCrmApp\Modules\Core\Billing\Models;

use CeremonyCrmApp\Modules\Core\Services\Models\Service;

class BillingAccountService extends \CeremonyCrmApp\Core\Model
{
  public string $fullTableSqlName = 'billing_accounts_services';
  public string $table = 'billing_accounts_services';
  public string $eloquentClass = Eloquent\BillingAccountService::class;

  public array $relations = [
    'SERVICE' => [ self::BELONGS_TO, Service::class, 'id_service', "id" ],
  ];

  public function columns(array $columns = []): array
  {
    return parent::columns(array_merge($columns, [
      "id_billing_account" => [
        "type" => "lookup",
        "title" => "Company",
        "model" => "CeremonyCrmApp/Modules/Core/Billing/Models/BillingAccount",
        'foreignKeyOnUpdate' => 'CASCADE',
        'foreignKeyOnDelete' => 'CASCADE',
      ],
      "id_service" => [
        "type" => "lookup",
        "title" => "Service",
        "model" => "CeremonyCrmApp/Modules/Core/Services/Models/Service",
        'foreignKeyOnUpdate' => 'CASCADE',
        'foreignKeyOnDelete' => 'CASCADE',
      ],
    ]));
  }

  public function tableParams(array $params = []): array
  {
    $params = parent::tableParams();
    $params['title'] = 'Billing Account';
    return $params;
  }

}
