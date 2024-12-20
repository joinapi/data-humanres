<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $responsibility_type_id
 * @property string $parent_type_id
 * @property string $has_table
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property EmplPositionResponsibility[] $emplPositionResponsibilities
 * @property ResponsibilityType $responsibilityTypeByParentTypeId
 * @property ValidResponsibility[] $validResponsibilities
 */
class ResponsibilityType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'responsibility_type';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'responsibility_type_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['parent_type_id', 'has_table', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplPositionResponsibilities()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\EmplPositionResponsibility', 'responsibility_type_id', 'responsibility_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function responsibilityTypeByParentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\ResponsibilityType', 'parent_type_id', 'responsibility_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function validResponsibilities()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\ValidResponsibility', 'responsibility_type_id', 'responsibility_type_id');
    }
}
