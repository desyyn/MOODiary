<?php

namespace App\Models;

use CodeIgniter\Model;

class MoodEntryModel extends Model
{
    protected $table = 'mood_entries';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'tanggal', 'mood_type_id', 'catatan'];

    public function getMoodWithType($userId)
    {
        return $this->select('mood_entries.*, mood_types.nama_mood, mood_types.emoji')
                    ->join('mood_types', 'mood_entries.mood_type_id = mood_types.id', 'left')
                    ->where('user_id', $userId)
                    ->orderBy('tanggal', 'DESC')
                    ->findAll();
    }
}
