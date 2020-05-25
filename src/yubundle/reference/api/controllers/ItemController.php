<?php

namespace yubundle\reference\api\controllers;

use PhpBundle\Reference\Domain\Enums\ReferenceBookPermissionEnum;
use PhpBundle\Reference\Domain\Interfaces\Services\ItemServiceInterface;
use RocketLab\Bundle\Rest\Base\BaseCrudController;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use yii\base\Module;

class ItemController extends BaseCrudController
{

    public function __construct(
        string $id,
        Module $module,
        array $config = [],
        ItemServiceInterface $itemService
    )
    {
        parent::__construct($id, $module, $config);
        $this->service = $itemService;
    }

    protected function normalizerContext(): array
    {
        return [
            AbstractNormalizer::IGNORED_ATTRIBUTES => ['translations'],
        ];
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
