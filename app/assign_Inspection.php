<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assign_Inspection extends Model
{
    public function complete()
    {
        $this->completed = true;
        $this->save();
    }
}
