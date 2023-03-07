<?php

namespace App\Http\Controllers;
use App\Exports\ApprenantExport;
use App\Imports\ApprenantImport;
use App\Models\Apprenant;
use App\Models\Groupes;
use App\Models\GroupesApprenant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Middleware\Authorize;
use Maatwebsite\Excel\Facades\Excel;

class ApprenantController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
            $this->Middleware("can:isFormateurOrAdmin");
    }

    public function index()
    {
        $groupes=Groupes::all();
        $apprenant =Apprenant::paginate(6);
        return view('apprenants.index',['groupes'=>$groupes,'data'=>$apprenant]);
    }
    // public function filter_group(Request $request){
    //     if($request->has('filter') && !empty($request->filter)){
    //         $apprenants = DB::table('Apprenant')
    //         ->select("*" )
    //             ->join('groupes_apprenant', 'Apprenant.id', '=', 'groupes_apprenant.Apprenant_id')
    //             ->join('Groupes', 'groupes_apprenant.Groupe_id', '=', 'Groupes.id')
    //             ->where('Groupes.id','Like','%'.$request->filter.'%')
    //             ->get();
    //             return response(['dataapprenants'=>$apprenants]);
    //     }
    //     else{
    //         $apprenants=Apprenant::all();
    //         return response(['dataapprenants'=>$apprenants]);
    //         dd($apprenants);
    //     }

    // }
    // public function search_apprenant(Request $request){
    //     $searchapprenat=Apprenant::where('Nom','Like','%'.$request->searchapprenant.'%')->get();
    //     return response(['searchapprenat'=>$searchapprenat]);

    // }

    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
        $query = $request->get('query');
      $data = DB::table('apprenant')
                    ->where('Nom', 'like', '%'.$query.'%')
                    // ->orWhere('Nom_tache', 'like', '%'.$query.'%')
                    ->paginate(6);
                    // dd($data);
      return view('apprenants.apprenant_data', compact('data'))->render();
     }
    }

    function fetch2_data(Request $request)
    {
     if($request->ajax())
     {
        if($request->has('query') && !empty($request->get('query'))){
        $query = $request->get('query');
      $data = DB::table('apprenant')
            ->select("*" )
                ->join('groupes_apprenant', 'apprenant.id', '=', 'groupes_apprenant.Apprenant_id')
                ->join('Groupes', 'groupes_apprenant.Groupe_id', '=', 'Groupes.id')
                ->where('Groupes.id','Like','%'.$query.'%')
                ->paginate(6);
                // dd($data);
                return view('apprenants.apprenant_data', compact('data'))->render();
        }
        else{
            $data =Apprenant::paginate(6);
        return view('apprenants.apprenant_data', compact('data'))->render();
        }
     }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groupes=Groupes::all();
        //
        return view('apprenants.create',['groupes'=>$groupes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $validation = $request->validate([
            'Nom' => 'required|max:255',
            'Prenom' => 'required|max:255',
            'Email' => 'required|email|unique:apprenant',
            'Phone' => 'required|max:255',
            'Adress' => 'required|max:255',
            'CIN' => 'required|max:255',
            'Date_naissance' => 'required|date',
            'Image' => 'required',

            'Etudiant_actif' => 'required|in:true,false',
            'Date_inscription' => 'required|date',
            'Sexe' => 'required|in:male,female',
            'Diplome' => 'required|in:non,oui',
            'Lieu_naissance' => 'required|max:255',
            'Nom_arabe' => 'required|max:255',
            'Prenom_arabe' => 'required|max:255',
            'Niveau_Scolaire' => 'required|max:255',
        ]);


        if($request->has('Image')){
        $file=$request->Image;
        $Image=time(). '_' .$file->getClientOriginalName();
        $file->move(public_path('images/apprenant'),$Image);
        }

       $create =  Apprenant::create([
            'Nom'=>$request->Nom,
            'Prenom'=>$request->Prenom,
            'Email'=>$request->Email,
            'Numero_telephone'=>$request->Phone,
            'Adress'=>$request->Adress,
            'CIN'=>$request->CIN,
            'Date_naissance'=>$request->Date_naissance,
            'Image'=>$Image,

            "Etudiant_actif"=>$request->Etudiant_actif,
            "Date_inscription"=>$request->Date_inscription,
            "Sexe"=>$request->Sexe,
            "Diplome"=>$request->Diplome,
            "Lieu_naissance"=>$request->Lieu_naissance,
            "Nom_arabe"=>$request->Nom_arabe,
            "Prenom_arabe"=>$request->Prenom_arabe,
            "Niveau_Scolaire"=>$request->Niveau_Scolaire,

        ]);

        return redirect()->route('apprenant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Apprenant::findOrFail($id);
        $groupes=Groupes::all();
        return view('apprenants.edit',['edit'=>$edit,'groupes'=>$groupes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'Nom' => 'max:255',
            'Prenom' => 'max:255',
            'Email' => 'email',
            'Phone' => 'max:255',
            'Adress' => 'max:255',
            'CIN' => 'max:255',
            'Date_naissance' => 'date',

            'Etudiant_actif' => 'in:true,false',
            'Date_inscription' => 'date',
            'Sexe' => 'in:male,female',
            'Diplome' => 'in:non,oui',
            'Lieu_naissance' => 'max:255',
            'Nom_arabe' => 'max:255',
            'Prenom_arabe' => 'max:255',
            'Niveau_Scolaire' => 'max:255',
        ]);


        if($request->Imagee){
            $file=$request->Imagee;
        $Image=time(). '_' .$file->getClientOriginalName();
        $file->move(public_path('images/apprenant'),$Image);
        }
        else{
            $Image= $request->image;
        }

        $create =  Apprenant::findOrFail($id)->update([
            'Nom'=>$request->Nom,
            'Prenom'=>$request->Prenom,
            'Email'=>$request->Email,
            'Numero_telephone'=>$request->Phone,
            'Adress'=>$request->Adress,
            'CIN'=>$request->CIN,
            'Date_naissance'=>$request->Date_naissance,
            'Image'=>$Image,

            "Etudiant_actif"=>$request->Etudiant_actif,
            "Date_inscription"=>$request->Date_inscription,
            "Sexe"=>$request->Sexe,
            "Diplome"=>$request->Diplome,
            "Lieu_naissance"=>$request->Lieu_naissance,
            "Nom_arabe"=>$request->Nom_arabe,
            "Prenom_arabe"=>$request->Prenom_arabe,
            "Niveau_Scolaire"=>$request->Niveau_Scolaire,

        ]);


        return redirect('/apprenant')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Apprenant::findOrFail($id);
        $delete->delete();
        return redirect('/apprenant');
    }

     // export data format excel

     public function exportexcel(){
        return Excel::download(new ApprenantExport,'datapage.xlsx');
    }
     // import data format excel
     public function importexcel(Request $request){

        Excel::import(new ApprenantImport, $request->file);
        return redirect()->back();

    }

    //  Export data form PDF

    public function generatepdf(){

        $apprenant = Apprenant::all();
        $pdf = Pdf::loadView('pdf.apprenant', compact('apprenant'));
    return $pdf->download('apprenant.pdf');
    }
}
