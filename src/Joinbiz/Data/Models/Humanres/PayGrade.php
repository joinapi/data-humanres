<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $pay_grade_id
 * @property string $pay_grade_name
 * @property string $comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PayHistory[] $payHistories
 * @property SalaryStepNew[] $salaryStepNews
 */
class PayGrade extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pay_grade';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'pay_grade_id';

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
    protected $fillable = ['pay_grade_name', 'comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payHistories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PayHistory', 'pay_grade_id', 'pay_grade_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salaryStepNews()
    {
        return $this->hasMany('\SalaryStepNew', 'pay_grade_id', 'pay_grade_id');
    }
}
