<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Input;
use Validator;
use Redirect;
use Session;
use File;


class AddAnounceController extends Controller
{

   public function html_email($request, $id){

    $first = current(explode("|", $request->imagini)); 
    

     $data = array(
        'name' => $request->nume,
        'pret' => $request->pret,
        'nr_camere' => $request->cam,
        'titlu' => $request->titlu,
        'oras' => $request->oras,
        'zona' => $request->zona,
        'id' => $id,
        'imagine' => "http://127.0.0.1:8000$first"
    );

    Mail::send('emails.welcome', $data, function ($message) use ($request){

        $message->from('emevladstefan95@gmail.com', 'Publicare anunt');

        $message->to($request->email)->subject('Publicare anunt');
    });

      
   }

  public function addAnounce(Request $request)
  {
     \DB::table('anunturi')->insert(
       ['titlu' => $request->titlu,
       'pret' => $request->pret,
       'structura_de_rezistenta' => null, // to do in optiuni suplimentare
       'nr_camere' => $request->cam,
       'suprafata_utila' => $request->suprafataUtila,
      'suprafata_utila_totala' => null, // to do in optiuni suplimentare
      'suprafata_construita' => null,
       'regim_inaltime' =>  null,
       'confort' => $request->confort,
       'etaje' => $request->etaj,
       'tip_imobil' => null,
       'locuri_parcare' => null,
       'nr_garaje' => null,
       'nr_bai' => $request->nrBai,
       'nr_balcoane' => null,
       'nr_bucatarii' => null,
       'compartimentare' => $request->compartimentare,
       'an_constructie' => null,
       'oras' => $request->oras , 
       'zona' =>  $request->zona,
       'tip_bloc' => null,
       'telefon' => $request->telefon,
       'status' => 0,
       'tip' => $request->options,
       'tipContract' => $request->tip_contract,
       'descriere' => $request->descriere,
       'adresa' => $request->adresa,
       'nume' => $request->nume,
       'email' => $request->email,
       'imagini' => $request->imagini,
       'user_id' => \Auth::user()->id,
       'created_at' => new \DateTime(),
       'updated_at' => new \DateTime()
       ]); 
     
  }


   public function upload(Request $request){

      $width = 500;
      $height = 500;
      $uploadDir = 'uploads';

      if (!empty($_FILES)) {
        $tmpFile = $_FILES['file']['tmp_name'];
        list($widthInit, $heightInit) = getimagesize($tmpFile);
        $filename = $uploadDir.'/'.time().'-'. $_FILES['file']['name'];
        $filename2 = $uploadDir.'/'.time().'1-'. $_FILES['file']['name'];
         

        if ($widthInit > $heightInit) {
          $minWidth = ($widthInit - $heightInit)/2;
          $maxWidth = ($widthInit - $heightInit)/2 + $width;
          $minHeight = 0;
          $maxHeight = $heightInit;
        }
        else {
          $minHeight = (- $widthInit + $heightInit)/2;
          $maxHeight = (- $widthInit + $heightInit)/2 + $width;
          $minWidth = 0;
          $maxWidth = $widthInit;
        }

        $dest_image = $filename;
        $img = imagecreatetruecolor(500, 500);

        $type = exif_imagetype($_FILES['file']['tmp_name']);
        
        if ($type == IMAGETYPE_JPEG)
          $org_img = imagecreatefromjpeg($tmpFile);
        else if ($type == IMAGETYPE_PNG)
          $org_img = imagecreatefrompng($tmpFile);
        else if ($type == IMAGETYPE_GIF)
          $org_img = imagecreatefromgif($tmpFile);
        
        $ims = getimagesize($tmpFile);

        imagecopyresized($img, $org_img, 0, 0, $minWidth, $minHeight, 500, 500,$maxWidth,$maxHeight);
        imagejpeg($img,$dest_image,90);
        move_uploaded_file($tmpFile,$filename2);     
      }

      $success_message = array( 'success' => 200,
                        'filename' => $pubpath.$foldername.'/'.$filename,
                        'filename2' => $pubpath.$foldername.'/'.$filename2,
                        );
     return json_encode($success_message);

}
    public function checkData(Request $request)
    {
        $corect = true;
        
        if(!$request->titlu)
          $corect = false;
        if(!$request->pret)
          $corect = false;
        if(!$request->suprafata_utila)
          $corect = false;
        if(!$request->adresa)
          $corect = false;
        if(!$request->descriere)
          $corect = false;
        if(!$request->email)
          $corect = false;
        if(!$request->nume)
          $corect = false;
        if(!$request->telefon)
          $corect = false;

        if(!is_numeric($request->telefon))
            $corect = false;
        if(!is_numeric($request->pret))
            $corect = false;
        if(!is_numeric($request->suprafataUtila))
            $corect = false;
        if(strlen($request->telefon) != 10)
          $corect = false;
        if ( !(strpos ($request->email, "@") && strpos($request->email, ".") && strlen($request->email) > 4))
          $corect = false;

        if($request->options == 'apartament'){
          if(!$request->nrBai)
            $corect = false;
          if(!is_numeric($request->nrBai))
            $corect = false;
          if(!$request->cam)
            $corect = false;
          if(!$request->compartimentare)
            $corect = false;
          if(!$request->confort)
            $corect = false;
          
          if(!$request->etaj)
            $corect = false;
          if(!is_numeric($request->etaj))
            $corect = false;
        }
         if($request->options == 'casa'){
          if(!$request->nrBai)
            $corect = false;
          if(!is_numeric($request->nrBai))
            $corect = false;

          if(!$request->suprafata)
            $corect = false;
          if(!is_numeric($request->nrBai))
            $corect = false;

          

        }
        return $corect;

    }
  

  public function display(Request $request)
  {
    $input = $request->all();
    $result = array();

   //adaug in baza de date
     $this->checkData($request);
    $this->addAnounce($request);
   
   //trimit mail  


    
 
    $this->html_email($request,\DB::getPdo()->lastInsertId());
    
    return view ('confirmare-email');
    //return view("not-logged");
  }
}
