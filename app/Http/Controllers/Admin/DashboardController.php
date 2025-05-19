<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Annuaire;
use App\Models\Role;

class DashboardController extends Controller
{
    public function index()
    {
        // Utilisateurs
        $totalUsers = User::count();
        $usersByRole = Role::withCount('users')->get();

        // Annuaires
        $totalAnnuaires = Annuaire::count();
        $annuairesByStatut = Annuaire::select('statut')
            ->selectRaw('count(*) as total')
            ->groupBy('statut')
            ->get();

        $latestAnnuaires = Annuaire::latest()->take(5)->get();

        return view('backoffice.admin.index', compact(
            'totalUsers',
            'usersByRole',
            'totalAnnuaires',
            'annuairesByStatut',
            'latestAnnuaires'
        ));
    }
}