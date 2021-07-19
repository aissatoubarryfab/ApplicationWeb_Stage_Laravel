<?php

namespace App\Http\Controllers;

use App\Models\Tuteurs;
use Illuminate\Http\Request;

class tuteurController extends Controller
{
    public function createTuteur(){
        $tuteur = new Tuteurs();
        $tuteur->nom = request('nom');
        $tuteur->prenom = request('prenom');
        $tuteur->statut= request('statut');
        $tuteur->dateNaiss = request('dateNaiss');
        $tuteur->numTel = request('numTel');
        $tuteur->user_id = auth()->user()->id;

        $tuteur->save();

        return redirect('/listeTuteur');;
    }


    public function listeTuteur(){
        $tuteurs = Tuteurs::all();
        return view('tuteur\listeTuteur',compact('tuteurs'));
    }

    public function modifTuteur($id){
        $tuteur =Tuteurs::find($id);
        return view('tuteur\modif',compact('tuteur'));
      }
    

      public function detailsTuteur($id){
        $tuteur=Tuteurs::find($id);
        //return $id;
        return view('tuteur\detail',compact('tuteur'));
      }

      public function updateTuteur(Request $request, $id)
      {
          $tuteur = Tuteurs::find($id);
  
         $tuteur->nom=$request->get('nom');
         $tuteur->prenom=$request->get('prenom');
         $tuteur->statut=$request->get('statut');
         $tuteur->dateNaiss=$request->get('dateNaiss');
         $tuteur->numTel=$request->get('numTel');
         $tuteur->save();
         return redirect('/listeTuteur');
      
      }
  
      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroyTuteur($id)
      {
          $tuteur= Tuteurs::find($id);
          $tuteur->delete();
         return redirect('/listeTuteur');
      }

}
