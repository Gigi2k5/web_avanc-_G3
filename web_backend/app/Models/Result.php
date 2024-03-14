<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{

    protected $fillable = ['student_id', 'subject_id', 'interrogation_note_1', 'interrogation_note_2', 'homework_note_1', 'homework_note_2', 'coefficient'];

    // Relation avec l'élève
    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    // Relation avec la matière
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    // Méthode pour calculer la moyenne par matière avec coefficient
    public function calculateSubjectAverage()
    {
        $interrogationAverage = ($this->interrogation_note_1 + $this->interrogation_note_2) / 2;
        $homeworkAverage = ($this->homework_note_1 + $this->homework_note_2) / 2;
        $weightedAverage = ($interrogationAverage + $homeworkAverage) / 2 * $this->coefficient;

        return $weightedAverage;
    }
    use HasFactory;
}
