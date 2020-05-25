<?php

namespace yubundle\reference\api\controllers;

use PhpBundle\Reference\Domain\Enums\ReferenceBookPermissionEnum;
use PhpBundle\Reference\Domain\Interfaces\Services\BookServiceInterface;
use RocketLab\Bundle\Rest\Base\BaseCrudController;
use yii\base\Module;

class BookController extends BaseCrudController
{

    public function __construct(
        string $id,
        Module $module,
        array $config = [],
        BookServiceInterface $bookService
    )
    {
        parent::__construct($id, $module, $config);
        $this->service = $bookService;
    }

    public function access(): array
    {
        return [
            [
                [ReferenceBookPermissionEnum::WRITE], ['create', 'update', 'delete']
            ],
        ];
    }

    public function authentication(): array
    {
        return [
            'create',
            'update',
            'delete',
        ];
    }

}
