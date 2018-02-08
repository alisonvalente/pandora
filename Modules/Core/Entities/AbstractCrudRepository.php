<?php

namespace Modules\Core\Entities;

use Modules\Core\Entities\BaseRepository;
use Modules\Core\Entities\CrudRepositoryInterface;
use Modules\Core\Traits\CrudMethodsTrait;

abstract class AbstractCrudRepository extends BaseRepository implements CrudRepositoryInterface
{
    use CrudMethodsTrait;
}
