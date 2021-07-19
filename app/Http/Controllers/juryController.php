<?php

namespace App\Http\Controllers;

use App\Models\Jurys;
use Illuminate\Http\Request;

class juryController extends Controller
{
    public function createJury(){
        $jury = new Jurys();
        $jury->nom = request('nom');
        $jury->prenom = request('prenom');
        $jury->statut= request('statut');
        $jury->dateNaiss = request('dateNaiss');
        $jury->numTel = request('numTel');
        $jury->user_id = auth()->user()->id;

        $jury->save();

        return redirect('/listeJury');
    }


    public function listeJury(){
        $jurys = Jurys::all();
        return view('jury\listeJury',compact('jurys'));
    }

    public function modifJury($id){
        $jury =Jurys::find($id);
        return view('jury\modif',compact('jury'));
      }
    

      public function detailsJury($id){
        $jury=Jurys::find($id);
        //return $id;
        return view('jury\detail',compact('jury'));
      }

      public function updateJury(Request $request, $id)
      {
          $jury = Jurys::find($id);
  
         $jury->nom=$request->get('nom');
         $jury->prenom=$request->get('prenom');
         $jury->statut=$request->get('statut');
         $jury->dateNaiss=$request->get('dateNaiss');
         $jury->numTel=$request->get('numTel');
         $jury->save();
         return redirect('/listeJury');
      
      }
  
      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroyJury($id)
      {
          $jury = Jurys::find($id);
          $jury->delete();
         return redirect('/listeJury');
      }

}
