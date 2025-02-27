<?php

namespace HubletoApp\Community\Pipeline;

class Loader extends \HubletoMain\Core\App
{


  public function __construct(\HubletoMain $main)
  {
    parent::__construct($main);
  }

  public function init(): void
  {
    $this->main->router->httpGet([
      '/^pipeline\/?$/' => Controllers\Home::class,
    ]);

    $this->main->sidebar->addLink(1, 250, 'pipeline', $this->translate('Pipeline'), 'fas fa-timeline', str_starts_with($this->main->requestedUri, 'pipeline'));


    // if (str_starts_with($this->main->requestedUri, 'sales')) {
    //   $this->main->sidebar->addHeading1(2, 10200, $this->translate('Sales'));
    //   $this->main->sidebar->addLink(2, 10201, 'sales', $this->translate('Pipeline'), 'fas fa-timeline');
    // }
  }
}