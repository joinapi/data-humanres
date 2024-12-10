<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_id
 * @property string $training_class_type_id
 * @property string $from_date
 * @property string $training_request_id
 * @property string $work_effort_id
 * @property string $approver_id
 * @property string $thru_date
 * @property string $approval_status
 * @property string $reason
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Person $personByApproverId
 * @property Party $party
 * @property TrainingClassType $trainingClassType
 * @property TrainingRequest $trainingRequest
 * @property WorkEffort $workEffort
 */
class PersonTraining extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'person_training';

    /**
     * @var array
     */
    protected $fillable = ['training_request_id', 'work_effort_id', 'approver_id', 'thru_date', 'approval_status', 'reason', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personByApproverId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\Person', 'approver_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\Party', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trainingClassType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\TrainingClassType', 'training_class_type_id', 'training_class_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trainingRequest()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\TrainingRequest', 'training_request_id', 'training_request_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffort()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\WorkEffort', 'work_effort_id', 'work_effort_id');
    }
}
