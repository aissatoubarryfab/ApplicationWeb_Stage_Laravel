<?php

namespace App\Http\Controllers;

use App\Models\Offre_de_stages;
use App\Models\Etudiants;
use App\Models\Postules;
use Illuminate\Http\Request;
class offre_de_stageController extends Controller
{
    public function create(){
        $stage = new Offre_de_stages();
        $stage->titre = request('titre');
        $stage->debut = request('debut');
        $stage->fin = request('fin');
        $stage->description = request('description');
        $stage->entreprise_id = request('entreprise_id');

        $stage->save();

        return redirect('/listeStage');
    }

    public function listeStage(){
        $stages = Offre_de_stages::all();
        return view('stage\listeStage',compact('stages'));
    }
    public function afficheOffre(){
        $stages = Offre_de_stages::all();
        return view('/interfaceEtudiant',compact('stages'));
    }
    public function postulerOffre(){
        $stages = Offre_de_stages::all();
        $user_id = Auth()->user()->id;
        $etudiant = Etudiants::where('user_id',$user_id)->get();
        $id = "" ;
        if($etudiant != null && $etudiant != "" ){
            $id = $etudiant[0]->id;
        }
        return view('stage\postuler',compact('stages','id'));
    }

    public function modifStage($id){
        $stage =Offre_de_stages::find($id);
        return view('stage\modif',compact('stage'));
      }

      public function detailsStage($id){
        $stage=Offre_de_stages::find($id);
        return view('stage\detail',compact('stage'));
      }
    

      public function detailsStage1($id){
        $stage=Offre_de_stages::find($id);
        $user_id = Auth()->user()->id;
        $etudiant = Etudiants::where('user_id',$user_id)->get();
        $id = "" ;
        if($etudiant != null && $etudiant != "" ){
            $id = $etudiant[0]->id;
        }
        //dd($etudiant[0]->id);
        /*
        $postule = new Postules();
        $postule->etudiant_id = $id;
        $postule->stage_id = $stage->id;
        $postule->save();*/

       // dd($postule);

        return view('stage\detail',compact('stage','id'));
      }

      public function updateStage(Request $request, $id)
      {
          $stage = Offre_de_stages::find($id);
         $stage->titre=$request->get('titre');
         $stage->debut=$request->get('debut');
         $stage->fin=$request->get('fin');
         $stage->description=$request->get('description');
         $stage->entreprise_id=$request->get('entreprise_id');

         $stage->save();
         return redirect('/listeStage');
      
      }
  
      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroyStage($id)
      {
          $stage= Offre_de_stages::find($id);
          $stage->delete();
         return redirect('/listeStage');
      }

      public function recherche(){
          $q = request()->input('q');
          $stages = Offre_de_stages::where('titre','like',"%$q%")
             ->orwhere('description','like',"%$q%")
             ->paginate(5);
            return view('stage\recherche',compact('stages'));
      }
}
