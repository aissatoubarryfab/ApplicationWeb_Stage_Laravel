<?php

namespace App\Http\Controllers;

use App\Models\Dossiers;
use App\Models\Etudiants;
use Illuminate\Http\Request;
use App\Models\Offre_de_stages;
use App\Models\Postules;
class etudiantController extends Controller
{
    public function createEtudiant()
    {
        $etudiant = new Etudiants();
        $etudiant->numEtudiant = request('numEtudiant');
        $etudiant->nom = request('nom');
        $etudiant->prenom = request('prenom');
        $etudiant->numTel = request('numTel');
        $etudiant->adresse = request('adresse');
        $etudiant->CP = request('CP');
        $etudiant->ville = request('ville');
        $etudiant->niveau = request('niveau');
        $etudiant->formation = request('formation');
        $etudiant->user_id = auth()->user()->id;
        $etudiant->tuteur_id = request('tuteur_id');

        $etudiant->save();
        return redirect('/listeEtudiant');
    }
    public function listeEtudiant(){
        $etudiants = Etudiants::all();
        return view('etudiant\listeEtudiant',compact('etudiants'));
    }

    public function afficheOffre(){
        $stages = Offre_de_stages::all();
        $id = $this->getID();
        return view('/interfaceEtudiant',compact('stages', 'id'));
    }

    public function detailsEtudiant($id){
        $etudiant = Etudiants::find($id);
        return view('etudiant\detail', compact('etudiant'));
    }

    public function modifEtudiant($id){
        $etudiant = Etudiants::find($id);
        return view('etudiant\modif' , compact('etudiant'));
    }

    public function updateEtudiant(Request $request, $id){
        $etudiant = Etudiants::find($id);
        $etudiant->numEtudiant = $request->get('numEtudiant');
        $etudiant->nom = $request->get('nom');
        $etudiant->prenom = $request->get('prenom');
        $etudiant->numTel = $request->get('numTel');
        $etudiant->adresse = $request->get('adresse');
        $etudiant->CP = $request->get('CP');
        $etudiant->ville = $request->get('ville');
        $etudiant->niveau = $request->get('niveau');
        $etudiant->formation = $request->get('formation');
        $etudiant->tuteur_id = $request->get('tuteur_id');
        $etudiant->save();
        return redirect('/listeEtudiant')->with('sucess','reussi');
    }

    public function mesOffres($id){
       
       
        $postules = Postules::where('etudiant_id',$id)->get();
        $stages = [];
        foreach ($postules as $item) {
            $stage_id = $item->stage_id;
            $offre = Offre_de_stages :: find($stage_id);
            //$item->offre = $offre;
            array_push($stages,$offre) ;
        }
        
       // dd($stages);
       
        return view('/etudiant/mesOffres',compact('stages','id'));
      
    }

    public function postuler(Request $request){
        
        $postule = new Postules();
        $cv = new Dossiers();
        $motivation = new Dossiers();
        $postule->etudiant_id =  $request->get('etudiant_id');
        $postule->stage_id =  $request->get('stage_id');

        $res = Postules :: where('stage_id',$postule->stage_id)->get();
       
   
        if(count($res) > 0){// Déjà postuler
            return redirect('/interfaceEtudiant')->with('sucess','reussi');
        }else{
            $cv->typeDoss = 'CV';
            $cv->stage_id  =  $request->get('stage_id');
            $cv->etudiant_id =  $request->get('etudiant_id');
            $cv->file_id = request('cv')->store('dossiers');
            $cv->file_name = $request->file('cv')->getClientOriginalName();
    
            //Motivation
            $motivation->typeDoss = 'Motivation';
            $motivation->stage_id  =  $request->get('stage_id');
            $motivation->etudiant_id =  $request->get('etudiant_id');
            $motivation->file_id = request('motivation')->store('dossiers');
            $motivation->file_name = $request->file('motivation')->getClientOriginalName();
    
            $postule->save();
            $cv->save();
            $motivation->save();
           //dd($request->file('motivation')->base);
           afficheOffre();
        }

        //CV
        
       
    }

    public function getID(){
        $user_id = Auth()->user()->id;
        $etudiant = Etudiants::where('user_id',$user_id)->get();
        $id = "" ;
        if($etudiant != null && $etudiant != "" && count($etudiant) > 0 ){
            $id = $etudiant[0]->id;
        }

        return $id;
    }
    public function load( $id_stage){

        $stage=Offre_de_stages::find($id_stage);
        $id = $this->getID();

        //dd($stage);
        //dd($id);
        return view('etudiant/depotcandidature', compact('stage','id'));
       


        //$dossier->stage_id =  $request->get('stage_id');

      //  $postule->save();
    }

    public function destroyEtudiant($id){
        $etudiant = Etudiants::find($id);
        $etudiant->delete();
        return redirect('/listeEtudiant');
    }

}
