<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $employee_party_id
 * @property string $employee_role_type_id
 * @property string $perf_review_id
 * @property string $perf_review_item_seq_id
 * @property string $perf_review_item_type_id
 * @property string $perf_rating_type_id
 * @property string $comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Party $partyByEmployeePartyId
 */
class PerfReviewItem extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'perf_review_item';

    /**
     * @var array
     */
    protected $fillable = ['perf_review_item_type_id', 'perf_rating_type_id', 'comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByEmployeePartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'employee_party_id', 'party_id');
    }
}
