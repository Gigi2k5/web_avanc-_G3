<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{

    protected $fillable = ['eleve_id', 'matiere_id', 'note1_interro', 'note2_interro ', 'note_devoir1', 'note_devoir2', 'coefficient'];

    // Relation avec l'éleve 
    public function student()
    {
        return $this->belongsTo('App\eleve');
    }

    // Relation avec la matière
    public function subject()
    {
        return $this->belongsTo('App\matiere');
    }

    // Méthode pour calculer la moyenne par matière avec coefficient
    public function calculateSubjectAverage()
    {
        $moyInterro = ($this->note1_interro + $this->note2_interro) / 2;
        $moyenne_coefficier = ($this->note_devoir1 + $this->note_devoir2 + $moyInterro ) / 3;

        return  $moyenne_coefficier;
    }
    use HasFactory;
}
