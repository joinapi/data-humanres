<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $role_type_id_from
 * @property string $role_type_id_to
 * @property string $party_id_from
 * @property string $party_id_to
 * @property string $empl_from_date
 * @property string $from_date
 * @property string $pay_grade_id
 * @property string $period_type_id
 * @property string $thru_date
 * @property string $salary_step_seq_id
 * @property float $amount
 * @property string $comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PeriodType $periodType
 * @property PayGrade $payGrade
 */
class PayHistory extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pay_history';

    /**
     * @var array
     */
    protected $fillable = ['pay_grade_id', 'period_type_id', 'thru_date', 'salary_step_seq_id', 'amount', 'comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function periodType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\PeriodType', 'period_type_id', 'period_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payGrade()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\PayGrade', 'pay_grade_id', 'pay_grade_id');
    }
}
