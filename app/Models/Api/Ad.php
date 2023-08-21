<?php

namespace App\Models\Api;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use ZhuiTech\BootLaravel\Models\Model;

/**
 * App\Models\Api\Ad
 *
 * @property int      $id
 * @property int      $create_time
 * @property int      $update_time
 * @property int|null $sort        排序
 * @property int|null $status      状态
 * @property string   $type_id     广告位
 * @property string   $name        广告名称
 * @property string   $image       图片
 * @property string   $thumb       缩略图
 * @property string   $url         链接地址
 * @property string   $description 备注
 * @method static Builder|Ad newModelQuery()
 * @method static Builder|Ad newQuery()
 * @method static Builder|Ad query()
 * @method static Builder|Ad whereCreateTime($value)
 * @method static Builder|Ad whereDescription($value)
 * @method static Builder|Ad whereId($value)
 * @method static Builder|Ad whereImage($value)
 * @method static Builder|Ad whereName($value)
 * @method static Builder|Ad whereSort($value)
 * @method static Builder|Ad whereStatus($value)
 * @method static Builder|Ad whereThumb($value)
 * @method static Builder|Ad whereTypeId($value)
 * @method static Builder|Ad whereUpdateTime($value)
 * @method static Builder|Ad whereUrl($value)
 * @mixin Eloquent
 */
class Ad extends Model
{
    use HasFactory;
}
