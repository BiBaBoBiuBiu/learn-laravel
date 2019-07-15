<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Staff
 *
 * @property int $id
 * @property string $nick    花名
 * @property string $name    姓名
 * @property string $sex     性别
 * @property string $card    身份证
 * @property string $address 地址
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereNick($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Staff extends Model {
    //
}
