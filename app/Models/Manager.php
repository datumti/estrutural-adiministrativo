<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public function personSms()
    {
        return $this->belongsTo('App\Models\Person', 'person_id_sms');
    }

    public function personQuality()
    {
        return $this->belongsTo('App\Models\Person', 'person_id_quality');
    }

    public function personProduction()
    {
        return $this->belongsTo('App\Models\Person', 'person_id_production');
    }

    public function personDiscipline()
    {
        return $this->belongsTo('App\Models\Person', 'person_id_discipline');
    }

    public function construction()
    {
        return $this->belongsTo('App\Models\Construction');
    }
}
