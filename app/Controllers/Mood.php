<?php

namespace App\Controllers;
use App\Models\MoodEntryModel;
use App\Models\MoodTypeModel;

class Mood extends BaseController
{
    public function add()
    {
        if (!session()->get('logged_in')) return redirect()->to('/login');

        $moodTypeModel = new MoodTypeModel();
        $data['moodTypes'] = $moodTypeModel->findAll();

        return view('mood/add', $data);
    }

    public function save()
    {
        $moodModel = new MoodEntryModel();
        $moodModel->save([
            'user_id' => session()->get('user_id'),
            'tanggal' => $this->request->getPost('tanggal'),
            'mood_type_id' => $this->request->getPost('mood_type_id'),
            'catatan' => $this->request->getPost('catatan')
        ]);

       return redirect()->to('/mood/success');
    }

    public function history()
    {
        $userId = session()->get('user_id');
        $moodModel = new MoodEntryModel();
        $moods = $moodModel->getMoodWithType($userId);

        return view('mood/history', ['moods' => $moods]);
    }


    public function edit($id)
    {
        $moodModel = new MoodEntryModel();
        $moodTypeModel = new MoodTypeModel();

        $mood = $moodModel->find($id);

        if (!$mood || $mood['user_id'] != session()->get('user_id')) {
            return redirect()->to('/mood/history')->with('error', 'Kamu tidak punya akses ke log ini.');
        }

        $data['mood'] = $mood;
        $data['moodTypes'] = $moodTypeModel->findAll();

        return view('mood/edit', $data);
    }


    public function delete($id)
    {
        $moodModel = new \App\Models\MoodEntryModel();

        $mood = $moodModel->find($id);
        if ($mood && $mood['user_id'] == session()->get('user_id')) {
            $moodModel->delete($id);
            return redirect()->to('/mood/history')->with('success', 'Log mood berhasil dihapus.');
        }

        return redirect()->to('/mood/history')->with('error', 'Gagal menghapus log mood.');
    }

    public function success()
    {
        $moodModel = new \App\Models\MoodEntryModel();
        $userId = session()->get('user_id');

        $mood = $moodModel
            ->select('mood_entries.*, mood_types.nama_mood, mood_types.emoji')
            ->join('mood_types', 'mood_entries.mood_type_id = mood_types.id', 'left')
            ->where('mood_entries.user_id', $userId)
            ->orderBy('mood_entries.id', 'DESC')
            ->first(); 

        return view('mood/success', ['mood' => $mood]);
    }

    public function update($id)
    {
        $moodModel = new MoodEntryModel();
        $mood = $moodModel->find($id);

        if (!$mood || $mood['user_id'] != session()->get('user_id')) {
            return redirect()->to('/mood/history')->with('error', 'Gagal mengupdate data.');
        }

        $moodModel->update($id, [
            'tanggal' => $this->request->getPost('tanggal'),
            'mood_type_id' => $this->request->getPost('mood_type_id'),
            'catatan' => $this->request->getPost('catatan')
        ]);

       return redirect()->to('/mood/success');
    }
}
