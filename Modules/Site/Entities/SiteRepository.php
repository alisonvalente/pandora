<?php
namespace Modules\Site\Entities;

use Modules\Core\Entities\AbstractCrudRepository;

class SiteRepository extends AbstractCrudRepository
{

    protected $modelClass = Site::class;

    public function getByUserId($userId)
    {
        $query = $this->newQuery()->whereUserId($userId);

        return $this->doQuery($query)->first();
    }
}