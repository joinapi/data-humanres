<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $empl_position_id
 * @property string $responsibility_type_id
 * @property string $from_date
 * @property string $thru_date
 * @property string $comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property EmplPosition $emplPosition
 * @property ResponsibilityType $responsibilityType
 */
class EmplPositionResponsibility extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'empl_position_responsibility';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function emplPosition()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\EmplPosition', 'empl_position_id', 'empl_position_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function responsibilityType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\ResponsibilityType', 'responsibility_type_id', 'responsibility_type_id');
    }
}
