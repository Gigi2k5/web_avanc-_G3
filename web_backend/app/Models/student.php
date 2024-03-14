<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{

    protected $fillable = ['name', 'class_id'];

    // Relation avec la classe
    public function class()
    {
        return $this->belongsTo('App\Class');
    }

    // Relation avec les résultats
    public function results()
    {
        return $this->hasMany('App\Result');
    }

    // Méthode pour calculer la moyenne générale de l'élève sur tous ses résultats
    public function calculateOverallAverage()
    {
        $results = $this->results;

        $totalWeightedAverage = 0;
        $totalCoefficient = 0;

        foreach ($results as $result) {
            $totalWeightedAverage += $result->calculateSubjectAverage();
            $totalCoefficient += $result->coefficient;
        }

        if ($totalCoefficient > 0) {
            return $totalWeightedAverage / $totalCoefficient;
        } else {
            return 0;
        }
    }

    // Méthode pour déterminer le rang de l'élève
    public function getRank()
    {
        $overallAverage = $this->calculateOverallAverage();

        $rank = static::whereHas('results', function ($query) use ($overallAverage) {
            $query->where('overall_average', '>', $overallAverage);
        })->count() + 1;

        return $rank;
    }

    use HasFactory;
}
