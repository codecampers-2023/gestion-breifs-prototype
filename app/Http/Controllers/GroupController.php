<?php

namespace App\Http\Controllers;

use App\Models\Groupes;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Http\Requests\GroupRequest;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $groups = Groupes::all();
        $groupsPag = Groupes::paginate(3);
        return view('Groupes.index',["groups" => $groups, "groupsPag" => $groupsPag]);
    }

    function search(Request $request)
    {
     if($request->ajax())
     {
        $query = $request->get('query');
      $data = Groupes::where('Nom', 'like', '%'.$query.'%')->paginate(2);
                    // dd($data);
      return view('Groupes.index', compact('data'))->render();
     }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Groupes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GroupRequest $request)
    {
        //
        if($request->has('Logo')){
            $imageName = time().'.'.$request->Logo->getClientOriginalExtension();
            // Public Folder
            $request->Logo->move(public_path('images/groupLog'), $imageName);
        }else{
            $imageName = $request->Logo;
        }
        $group = Groupes::create([
            'Nom_groupe' => $request->Nom_groupe,
            'Logo' => $imageName
        ]);
        return redirect()->route('groupe.index')->with(['true' => 'The groupe was added successfuly']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $group = Groupes::findOrFail($id);
        return view('Groupes.edit', ['group' => $group]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GroupRequest $request, $id)
    {
         //
         if($request->has('Logo')){
            $imageName = time().'.'.$request->Logo->getClientOriginalExtension();
            // Public Folder
            $request->Logo->move(public_path('images/groupLog'), $imageName);
        }else{
            $imageName= $request->input("Logo");
        }
        
        $group = Groupes::findOrFail($id);
        $group->update([
            'Nom_groupe' => $request->Nom_groupe,
            'Logo' => $imageName
        ]);
        return redirect()->route('groupe.index')->with(['true' => 'The groupe was update successfuly']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $group = Groupes::findOrFail($id);
        $group->delete();
        return back()->with(['true' => 'The groupe was deleted successfuly']);
    }

    public function groupCreatePDF() {
        // retreive all records from db
        $data = Groupes::all();
        // share data to view
        view()->share('Groupes.index',$data);
        $pdf = PDF::loadView('pdf_view', ['data'=>$data]);
        // download PDF file with download method
        return $pdf->download('pdf_file_group.pdf');
      }
}
