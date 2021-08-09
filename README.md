# teewurst/pipeline-bundle

## Installation
Require the package and configure the bundle.

> If you are using `symfony/flex` you don't have to do anything.

```
composer require teewurst/pipeline-bundle
```

### Config without symfony/flex
Go to your `config/bundles.php` and add the following line

```php
<?php

return [
    ...
    Teewurst\PipelineBundle\PipelineBundle::class => ['all' => true],
];
```
