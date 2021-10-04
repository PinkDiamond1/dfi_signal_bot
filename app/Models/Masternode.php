<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin Eloquent
 * @property string  masternode_id
 * @property string  owner_address
 * @property string  operator_address
 * @property integer creation_height
 * @property integer resign_height
 * @property integer ban_height
 * @property string  state
 * @property integer minted_blocks
 * @property array   target_multipliers
 * @property string  timelock
 */
class Masternode extends Model
{
    protected $fillable = [
        'masternode_id',
        'owner_address',
        'operator_address',
        'creation_height',
        'resign_height',
        'ban_height',
        'state',
        'minted_blocks',
        'target_multipliers',
        'timelock',
    ];
    protected $casts = [
        'target_multipliers' => 'array',
    ];
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function userMasternodes(): HasMany
    {
        return $this->hasMany(UserMasternode::class);
    }
}