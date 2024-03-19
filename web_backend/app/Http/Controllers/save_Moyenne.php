<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\student;

class save_Moyenne extends Controller
{
    public function calculateAverages()
    {
        // Récupérer tous les résultats
        $results = Result::all();

        // Parcourir les résultats pour calculer la moyenne de chaque résultat
        foreach ($results as $result) {
            // Appeler la méthode calmoyenne() pour calculer la moyenne
            $average = $result->calculateSubjectAverage();
            // Faites quelque chose avec la moyenne calculée, comme l'enregistrer dans une base de données ou l'afficher
        }

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Calcul des moyennes effectué avec succès.');
    }


    public function store(Request $request)
    {
     // Récupérer l'identifiant de l'élève depuis la requête
     $studentId = $request->input('eleve_id');

     // Récupérer l'élève spécifique
     $student = Student::find($studentId);

     // Vérifier si l'élève existe
     if (!$student) {
         return response()->json(['message' => 'Élève non trouvé'], 404);
     }

     // Calculer la moyenne générale de l'élève
     $overallAverage = $student->calculateOverallAverage();

     // Récupérer tous les élèves de la même classe que l'élève spécifique
     $classStudents = Student::where('class_id', $student->class_id)->get();

     // Déterminer le rang de l'élève dans sa classe
     $rank = $classStudents->filter(function ($classStudent) use ($overallAverage) {
         return $classStudent->calculateOverallAverage() > $overallAverage;
     })->count() + 1;

     // Enregistrer les moyennes par matière pour chaque résultat de l'élève
     foreach ($student->results as $result) {
         $subjectAverage = $result->calculateSubjectAverage();
         $result->subject_average = $subjectAverage;
         $result->save();
     }

     // Mettre à jour la moyenne générale et le rang de l'élève dans la table des résultats
     $studentResults = $student->results;
     foreach ($studentResults as $result) {
         $result->overall_average = $overallAverage;
         $result->rank = $rank;
         $result->save();
     }

     // Répondre avec une réponse JSON
     return response()->json(['message' => 'Moyennes enregistrées avec succès']);
 }

}