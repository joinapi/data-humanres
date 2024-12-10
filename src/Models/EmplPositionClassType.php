<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $empl_position_class_type_id
 * @property string $parent_type_id
 * @property string $has_table
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property EmplPositionTypeClass[] $emplPositionTypeClasses
 * @property EmplPositionClassType $emplPositionClassTypeByParentTypeId
 */
class EmplPositionClassType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'empl_position_class_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'empl_position_class_type_id';

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
    public function emplPositionTypeClasses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\EmplPositionTypeClass', 'empl_position_class_type_id', 'empl_position_class_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function emplPositionClassTypeByParentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\EmplPositionClassType', 'parent_type_id', 'empl_position_class_type_id');
    }
}
