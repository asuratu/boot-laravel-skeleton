<?php

namespace App\Http\Controllers;

use App\repositories\AdRepository;
use Illuminate\Http\JsonResponse;
use ZhuiTech\BootLaravel\Controllers\RestController;

class AdsController extends RestController
{
    protected string $transformer = 'App\Transformers\AdItemTransformer';

    protected string $listTransformer = 'App\Transformers\AdListTransformer';

    public function __construct(AdRepository $repository)
    {
        parent::__construct($repository);
    }

    public function list(): JsonResponse
    {
        $list = $this->repository->all();
        return $this->success($this->transformList($list));
    }

    public function item($id): JsonResponse
    {
        $item = $this->repository->find($id);
        return $this->success($this->transformItem($item));
    }

    public function paginateList(): JsonResponse
    {
        $size = request('size', 10);
        $list = $this->repository->paginate($size);
        return $this->success($this->transformList($list));
    }
}
