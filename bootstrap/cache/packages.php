<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'laravelcollective/html' => 
  array (
    'providers' => 
    array (
      0 => 'Collective\\Html\\HtmlServiceProvider',
    ),
    'aliases' => 
    array (
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
    ),
  ),
  'appzcoder/crud-generator' => 
  array (
    'providers' => 
    array (
      0 => 'Appzcoder\\CrudGenerator\\CrudGeneratorServiceProvider',
    ),
  ),
  'appzcoder/laravel-admin' => 
  array (
    'providers' => 
    array (
      0 => 'Appzcoder\\LaravelAdmin\\LaravelAdminServiceProvider',
      1 => 'Appzcoder\\CrudGenerator\\CrudGeneratorServiceProvider',
      2 => 'Collective\\Html\\HtmlServiceProvider',
    ),
    'aliases' => 
    array (
      'Form' => 'Collective\\Html\\FormFacade',
      'HTML' => 'Collective\\Html\\HtmlFacade',
    ),
  ),
);