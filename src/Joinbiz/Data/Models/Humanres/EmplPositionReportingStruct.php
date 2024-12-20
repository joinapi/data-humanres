<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $empl_position_id_reporting_to
 * @property string $empl_position_id_managed_by
 * @property string $from_date
 * @property string $thru_date
 * @property string $comments
 * @property string $primary_flag
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property EmplPosition $emplPositionByEmplPositionIdManagedBy
 * @property EmplPosition $emplPositionByEmplPositionIdReportingTo
 */
class EmplPositionReportingStruct extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'empl_position_reporting_struct';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'comments', 'primary_flag', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function emplPositionByEmplPositionIdManagedBy()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\EmplPosition', 'empl_position_id_managed_by', 'empl_position_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function emplPositionByEmplPositionIdReportingTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\EmplPosition', 'empl_position_id_reporting_to', 'empl_position_id');
    }
}
