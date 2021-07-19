<?php

namespace App\Http\Controllers;

use App\Models\Entreprises;
use Illuminate\Http\Request;

class entrepriseController extends Controller
{
    public function listeEntreprise(){
        $entreprises = Entreprises::all();
        return view('entreprise\listeEntreprise',compact('entreprises'));

    }
    
    public function modif($id){
        $entreprise =Entreprises::find($id);
        return view('entreprise\modif',compact('entreprise'));
      }
    

      public function details($id){
        $entreprise=Entreprises::find($id);
        //return $id;
        return view('entreprise\detail',compact('entreprise'));
      }

      public function update(Request $request, $id)
      {
          $entreprise = Entreprises::find($id);
  
         $entreprise->raison_soc=$request->get('raison_soc');
         $entreprise->numTel=$request->get('numTel');
         $entreprise->numRue=$request->get('numRue');
         $entreprise->nomRue=$request->get('nomRue');
         $entreprise->ville=$request->get('ville');
         $entreprise->codePostal=$request->get('codePostal');
  
         $entreprise->save();
         return redirect('/liste');
      
      }
  
      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
          $entreprise = Entreprises::find($id);
          $entreprise->delete();
          return redirect('/liste');;
      }

      
}
