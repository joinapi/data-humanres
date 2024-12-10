<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $job_requisition_id
 * @property string $skill_type_id
 * @property string $job_posting_type_enum_id
 * @property string $exam_type_enum_id
 * @property float $duration_months
 * @property float $age
 * @property string $gender
 * @property float $experience_months
 * @property float $experience_years
 * @property string $qualification
 * @property string $job_location
 * @property float $no_of_resources
 * @property string $job_requisition_date
 * @property string $required_on_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property JobInterview[] $jobInterviews
 * @property EmploymentApp[] $employmentApps
 * @property Enumeration $enumerationByExamTypeEnumId
 * @property Enumeration $enumerationByJobPostingTypeEnumId
 * @property SkillType $skillType
 */
class JobRequisition extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'job_requisition';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'job_requisition_id';

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
    protected $fillable = ['skill_type_id', 'job_posting_type_enum_id', 'exam_type_enum_id', 'duration_months', 'age', 'gender', 'experience_months', 'experience_years', 'qualification', 'job_location', 'no_of_resources', 'job_requisition_date', 'required_on_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobInterviews()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\JobInterview', 'job_requisition_id', 'job_requisition_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employmentApps()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\EmploymentApp', 'job_requisition_id', 'job_requisition_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByExamTypeEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\Enumeration', 'exam_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByJobPostingTypeEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\Enumeration', 'job_posting_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function skillType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\SkillType', 'skill_type_id', 'skill_type_id');
    }
}
