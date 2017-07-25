<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Contracts\Repositories\CatePostRepository;
use App\Models\CatePost;
use App\Validators\CatePostValidator;

/**
 * Class CatePostRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class CatePostRepositoryEloquent extends BaseRepository implements CatePostRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CatePost::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
