<?php


use App\Http\Controllers\Controller;
use App\Models\UncheckedCategory;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function saveOption(Request $request)
    {
        $categoryLabel = $request->input('category_label');
        $phraseEvalue = $request->input('phrase_evalue');

        // Enregistrez les données dans la base de données
        $uncheckedCategory = new UncheckedCategory();
        $uncheckedCategory->category_label = $categoryLabel;
        $uncheckedCategory->phrase_evalue = $phraseEvalue;
        $uncheckedCategory->save();

        return response()->json(['message' => 'Option enregistrée avec succès']);
    }
}