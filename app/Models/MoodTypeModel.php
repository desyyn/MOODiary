<?php

namespace App\Models;

use CodeIgniter\Model;

class MoodTypeModel extends Model
{
    protected $table = 'mood_types';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_mood', 'emoji'];
}
