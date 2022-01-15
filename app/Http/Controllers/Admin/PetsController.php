<?php

/**
 * Pets Controller
 *
 * @package     Makent
 * @subpackage  Controller
 * @category    Pets
 * @author      Trioangle Product Team
 * @version     1.5.9
 * @link        http://trioangle.com
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DataTables\PetsDataTable;
use App\Models\Pets;
use App\Models\PetsLang;
use App\Models\language;
use App\Models\Rooms;
use App\Http\Start\Helpers;
use Validator;

class PetsController extends Controller
{
    protected $helper;  // Global variable for instance of Helpers

    public function __construct()
    {
        $this->helper = new Helpers;
    }

    /**
     * Load Datatable for Pets
     *
     * @param array $dataTable  Instance of PetsDataTable
     * @return datatable
     */
    public function index(PetsDataTable $dataTable)
    {

        return $dataTable->render('admin.pets.view');
    }

    /**
     * Add a New Pets
     *
     * @param array $request  Input values
     * @return redirect     to Pets view
     */
    public function add(Request $request)
    {
        if(!$_POST)
        {   $data['language'] = Language::translatable()->get(); 
            return view('admin.pets.add',$data);
        }
        else if($request->submit)
        {
            //check name exists or not            
             $pets_name = Pets::where('name','=',@$request->name[0])->get();            
             if(@$pets_name->count() != 0){             
                     $this->helper->flash_message('error', 'This Name already exists'); // Call flash message function
                     return redirect(ADMIN_URL.'/pets');
                }    

            $pets = new Pets;
        

        for($i=0;$i < count($request->lang_code);$i++){
         
        if($request->lang_code[$i]=="en"){
      
        $pets->name        = $request->name[$i];
        $pets->status      = $request->status;
        $pets->save();
        $lastInsertedId = $pets->id;
        }
        else{
         $pets_lang = new PetsLang;
         $pets_lang->pets_id   = $lastInsertedId;
         $pets_lang->lang_code   = $request->lang_code[$i];
         $pets_lang->name        = $request->name[$i];      
         $pets_lang->save();

        }

        }
                

                $this->helper->flash_message('success', 'Added Successfully'); // Call flash message function

                return redirect(ADMIN_URL.'/pets');
            
        }
        else
        {
            return redirect(ADMIN_URL.'/pets');
        }
    }

    /**
     * Update Pets Details
     *
     * @param array $request    Input values
     * @return redirect     to Pets View
     */
    public function update(Request $request)
    {
        if(!$_POST)
        {   $data['language'] = Language::get();  
            $data['result'] = Pets::find($request->id);
            $data['langresult'] = PetsLang::where('pets_id',$request->id)->get();    
            return view('admin.pets.edit', $data);
        }
        else if($request->submit)
        {
           

            // Delete Pets

            $lang_id_arr = $request->lang_id;
            unset($lang_id_arr[0]); 

            if(empty($lang_id_arr))
            {
            $pets_lang = PetsLang::where('pets_id',$request->id); 
            $pets_lang->delete();
            }

            $pets_del = PetsLang::select('id')->where('pets_id',$request->id)->get();
            foreach($pets_del as $values){ 
            if(!in_array($values->id,$lang_id_arr))
            {
            $pets_lang = PetsLang::find($values->id); 
            $pets_lang->delete();
            }       

            }

            //End Delete Pets
            //check name exists or not            
             $pets_name = Pets::where('id','!=',@$request->id)->where('name','=',@$request->name[0])->get();            
             if(@$pets_name->count() != 0){             
                     $this->helper->flash_message('error', 'This Name already exists'); // Call flash message function
                     return redirect(ADMIN_URL.'/pets');
                }  
             // update Pets

        for($i=0;$i < count($request->lang_code);$i++){
         
          if($request->lang_code[$i]=="en"){
          $pets = Pets::find($request->id);
          $pets->name        = $request->name[$i];        
          $pets->status      = $request->status;
          $pets->save();

          }
        else{
              if(isset($request->lang_id[$i])){

              $pets_lang = PetsLang::find($request->lang_id[$i]);
              $pets_lang->lang_code   = $request->lang_code[$i];
              $pets_lang->name        = $request->name[$i];            
              $pets_lang->save();            
              } 
              else{

              $pets_lang =  new PetsLang; 
              $pets_lang->pets_id   = $request->id;    
              $pets_lang->lang_code   = $request->lang_code[$i];
              $pets_lang->name        = $request->name[$i];              
              $pets_lang->save();

              }

        }
      } // End update Pets
                    
               $this->helper->flash_message('success', 'Updated Successfully'); // Call flash message function
                       
                return redirect(ADMIN_URL.'/pets');
        }
       
        else
        {
            return redirect(ADMIN_URL.'/pets');
        }
    }

    /**
     * Delete Pets
     *
     * @param array $request    Input values
     * @return redirect     to Pets View
     */
    public function delete(Request $request)
    {
        $count = Rooms::whereRaw('find_in_set('.$request->id.', pets)')->count();

        if($count > 0)
            $this->helper->flash_message('error','Rooms have this Pets.'); // Call flash message function
        else {            
            $pets = Pets::where('id','!=',$request->id)->where('status','Active')->get();
            if(count($pets) == 0)
                  {                   
                       $this->helper->flash_message('error', 'Atleast One Pets shoud be Active.'); 
                   }else{ 
                   $exists_rnot = Pets::find($request->id);
                          if(@$exists_rnot){

                              PetsLang::where('pets_id',$request->id)->delete();                   
                              Pets::find($request->id)->delete();
                              $this->helper->flash_message('success', 'Deleted Successfully.'); 

                          }
                      else{

                        $this->helper->flash_message('error', 'This Pets Already Deleted.');

                          }
           
                      }
        }
        return redirect(ADMIN_URL.'/pets');
    }

    //for Atleast One pets in "Active"...

    public function chck_status($id)
    {
        $petstatus=Pets::where('status','Active')->get();
        if(count($petstatus) > 1)
        {
            echo "Active";
            exit;
        }
        else
        {
            echo "InActive";
            exit;
        }
    }

}
