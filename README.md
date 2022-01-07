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

## How to use
You are now able to use the pipeline service as factory for recursive and complex pipelines.

The example at [teewurst\pipeline](https://github.com/teewurst/pipeline/blob/master/README.md#use-pipeline-service) could be represented as:

```yaml
My\App\MyPipeline:
    factory:   ['@teewurst\pipeline\PipelineService', create]
    arguments:
        # First Argument an array of <TaskInterface|array<TaskInterface|array<...>>>
        $tasks:
        - '@My\App\CheckServiceAvailabilityTask'
        - - '@My\App\ErrorHandlerTask' # catch execution of submission even on error
          - - '@My\App\PrepareDataTask'
            - '@My\App\ValidateDataTask'
            - '@My\App\DoGetOfferRequestTask'
         # .. some additional things like set quote, upload documents etc.
        - - '@My\App\LogResultLocalyTask'
          - '@My\App\LogResultInDWTask'
        # Options array to pass pipeline
        $options:
            - any
            - options
```
