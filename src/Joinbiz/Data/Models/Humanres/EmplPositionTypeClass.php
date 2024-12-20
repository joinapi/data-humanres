<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $empl_position_type_id
 * @property string $empl_position_class_type_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $standard_hours_per_week
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property EmplPositionClassType $emplPositionClassType
 * @property EmplPositionType $emplPositionType
 */
class EmplPositionTypeClass extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'empl_position_type_class';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'standard_hours_per_week', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function emplPositionClassType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\EmplPositionClassType', 'empl_position_class_type_id', 'empl_position_class_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function emplPositionType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\EmplPositionType', 'empl_position_type_id', 'empl_position_type_id');
    }
}
