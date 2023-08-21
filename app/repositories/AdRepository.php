<?php

namespace App\repositories;

use App\Models\Api\Ad;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;

class AdRepository extends BaseRepository
{
    protected int $cacheMinutes = 90;
    protected array $cacheOnly = ['all', 'find'];

    use CacheableRepository;

    public function model(): string
    {
        return Ad::class;
    }
}
