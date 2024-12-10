<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $job_interview_id
 * @property string $job_interviewee_party_id
 * @property string $job_requisition_id
 * @property string $job_interviewer_party_id
 * @property string $job_interview_type_id
 * @property string $grade_secured_enum_id
 * @property string $job_interview_result
 * @property string $job_interview_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Enumeration $enumerationByGradeSecuredEnumId
 * @property Party $partyByJobIntervieweePartyId
 * @property JobInterviewType $jobInterviewType
 * @property Party $partyByJobInterviewerPartyId
 * @property JobRequisition $jobRequisition
 */
class JobInterview extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'job_interview';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'job_interview_id';

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
    protected $fillable = ['job_interviewee_party_id', 'job_requisition_id', 'job_interviewer_party_id', 'job_interview_type_id', 'grade_secured_enum_id', 'job_interview_result', 'job_interview_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByGradeSecuredEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\Enumeration', 'grade_secured_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByJobIntervieweePartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\Party', 'job_interviewee_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jobInterviewType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\JobInterviewType', 'job_interview_type_id', 'job_interview_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByJobInterviewerPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\Party', 'job_interviewer_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jobRequisition()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\JobRequisition', 'job_requisition_id', 'job_requisition_id');
    }
}
