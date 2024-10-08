<?php

namespace App\Http\Controllers\Journaux;
use App\Http\Controllers\Controller; 
use App\Models\journaux\JournalAchat;
use App\DataTables\journaux\AchatDataTable;
use App\Models\PlanCompte;
use App\Models\AnneeFiscale;
use Illuminate\Http\Request;

class JournalAchatController extends Controller
{

    // Afficher tous les journaux d'achats
    public function index(AchatDataTable $dataTable)
{
    return $dataTable->render('journal_achat.index');
}
    
    // Afficher le formulaire de création
    public function create(Request $request)
    {
        $comptes = PlanCompte::all(); // Récupérer tous les comptes
        $annees = AnneeFiscale::all(); // Récupérer toutes les années fiscales
        $view = view('journal_achat.create', compact('comptes', 'annees'))->render(); // Passer les comptes et les années à la vue
        return response()->json(['data' =>  $view, 'status'=> true]);
    }
    


    // Enregistrer un nouvel achat
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'numero_compte' => 'required|exists:plan_comptes,id',
            'libelle' => 'required|string|max:255',
            'debit' => 'required|numeric',
            'credit' => 'required|numeric',
            'annee_fiscale_id' => 'required|exists:annee_fiscales,id',
        ]);
    
        JournalAchat::create($validatedData);
    
        return redirect()->route('achat.index')->with('success', 'Achat enregistrer  avec succès');
    }
    


    
    
    // Afficher le formulaire d'édition
    public function edit($id)
{
    $achat = JournalAchat::findOrFail($id);
    $comptes = PlanCompte::all(); // Pour le champ 'numero_compte'
    $annees = AnneeFiscale::all(); // Pour le champ 'annee_fiscale'

    return view('journal_achat.edit', compact('achat', 'comptes', 'annees'))->render();
}

    // Mettre à jour un achat
    public function update(Request $request, $id)
{
    $request->validate([
        'numero_compte' => 'required|exists:plan_comptes,id',
        'libelle' => 'required|string|max:255',
        'debit' => 'required|numeric',
        'credit' => 'required|numeric',
        'annee_fiscale_id' => 'required|exists:annee_fiscales,id',
    ]);

    $achat = JournalAchat::findOrFail($id);
    $achat->update([
        'numero_compte' => $request->numero_compte,
        'libelle' => $request->libelle,
        'debit' => $request->debit,
        'credit' => $request->credit,
        'annee_fiscale_id' => $request->annee_fiscale_id,
    ]);

    return redirect()->route('achat.index')->with('success', 'Achat mis à jour avec succès');
}


    // Supprimer un achat
    public function destroy($id)
{
    $achat = JournalAchat::findOrFail($id);
    $achat->delete();

    return redirect()->route('achat.index')->with('success', 'Achat supprimé avec succès');
}

}
