<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Touriste;

class TouristeController extends Controller
{
    public function index(Request $request)
{
    $query = Annonce::query();

    if ($request->filled('search')) {
        $search = $request->search;

        $query->where(function ($q) use ($search) {
            $q->where('location', 'LIKE', '%' . $search . '%');
            if (strtotime($search)) {
                $q->orWhereDate('disponible_du', '<=', $search)
                ->whereDate('disponible_jusquau', '>=', $search);
            }
        });
    }

    $perPage = $request->input('per_page', 10);
    $annonce = $query->paginate($perPage)->withQueryString();;

    return view('touriste', compact('annonce'));
}

}
