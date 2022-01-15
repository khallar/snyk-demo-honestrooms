<?php

/**
 * Lives Controller
 *
 * @package     Makent
 * @subpackage  Controller
 * @category    Lives
 * @author      Trioangle Product Team
 * @version     1.5.9
 * @link        http://trioangle.com
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DataTables\LivesDataTable;
use App\Models\Lives;
use App\Models\LivesLang;
use App\Models\language;
use App\Models\Rooms;
use App\Http\Start\Helpers;
use Validator;

class LivesController extends Controller
{
    protected $helper;  // Global variable for instance of Helpers

    public function __construct()
    {
        $this->helper = new Helpers;
    }

    /**
     * Load Datatable for Lives
     *
     * @param array $dataTable  Instance of LivesDataTable
     * @return datatable
     */
    public function index(LivesDataTable $dataTable)
    {

        return $dataTable->render('admin.lives.view');
    }

    /**
     * Add a New Lives
     *
     * @param array $request  Input values
     * @return redirect     to lives view
     */
    public function add(Request $request)
    {
        if(!$_POST)
        {   $data['language'] = Language::translatable()->get(); 
            return view('admin.lives.add',$data);
        }
        else if($request->submit)
        {
            //check name exists or not            
             $lives_name = Lives::where('name','=',@$request->name[0])->get();            
             if(@$lives_name->count() != 0){             
                     $this->helper->flash_message('error', 'This Name already exists'); // Call flash message function
                     return redirect(ADMIN_URL.'/lives');
                }    

            $lives = new Lives;
        

        for($i=0;$i < count($request->lang_code);$i++){
         
        if($request->lang_code[$i]=="en"){
      
        $lives->name        = $request->name[$i];
        $lives->status      = $request->status;
        $lives->save();
        $lastInsertedId = $lives->id;
        }
        else{
         $lives_lang = new LivesLang;
         $lives_lang->lives_id    = $lastInsertedId;
         $lives_lang->lang_code   = $request->lang_code[$i];
         $lives_lang->name        = $request->name[$i];      
         $lives_lang->save();

        }

        }
                

                $this->helper->flash_message('success', 'Added Successfully'); // Call flash message function

                return redirect(ADMIN_URL.'/lives');
            
        }
        else
        {
            return redirect(ADMIN_URL.'/lives');
        }
    }

    /**
     * Update Lives Details
     *
     * @param array $request    Input values
     * @return redirect     to Lives View
     */
    public function update(Request $request)
    {
        if(!$_POST)
        {   $data['language'] = Language::get();  
            $data['result'] = Lives::find($request->id);
            $data['langresult'] = LivesLang::where('lives_id',$request->id)->get();    
            return view('admin.lives.edit', $data);
        }
        else if($request->submit)
        {
           

            // Delete lives

            $lang_id_arr = $request->lang_id;
            unset($lang_id_arr[0]); 

            if(empty($lang_id_arr))
            {
            $lives_lang = LivesLang::where('lives_id',$request->id); 
            $lives_lang->delete();
            }

            $lives_del = LivesLang::select('id')->where('lives_id',$request->id)->get();
            foreach($lives_del as $values){ 
            if(!in_array($values->id,$lang_id_arr))
            {
            $lives_lang = LivesLang::find($values->id); 
            $lives_lang->delete();
            }       

            }

            //End Delete Lives
            //check name exists or not            
             $lives_name = Lives::where('id','!=',@$request->id)->where('name','=',@$request->name[0])->get();            
             if(@$lives_name->count() != 0){             
                     $this->helper->flash_message('error', 'This Name already exists'); // Call flash message function
                     return redirect(ADMIN_URL.'/lives');
                }  
             // update Lives

        for($i=0;$i < count($request->lang_code);$i++){
         
          if($request->lang_code[$i]=="en"){
          $lives = Lives::find($request->id);
          $lives->name        = $request->name[$i];        
          $lives->status      = $request->status;
          $lives->save();

          }
        else{
              if(isset($request->lang_id[$i])){

              $lives_lang = LivesLang::find($request->lang_id[$i]);
              $lives_lang->lang_code   = $request->lang_code[$i];
              $lives_lang->name        = $request->name[$i];            
              $lives_lang->save();            
              } 
              else{

              $lives_lang =  new LivesLang; 
              $lives_lang->lives_id   = $request->id;    
              $lives_lang->lang_code   = $request->lang_code[$i];
              $lives_lang->name        = $request->name[$i];              
              $lives_lang->save();

              }

        }
      } // End update Lives
                    
               $this->helper->flash_message('success', 'Updated Successfully'); // Call flash message function
                       
                return redirect(ADMIN_URL.'/lives');
        }
       
        else
        {
            return redirect(ADMIN_URL.'/lives');
        }
    }

    /**
     * Delete Lives
     *
     * @param array $request    Input values
     * @return redirect     to Lives View
     */
    public function delete(Request $request)
    {
         //dd("ji");
         $count = Rooms::whereRaw('find_in_set('.$request->id.', lives_house)')->count();

        if($count > 0)
            $this->helper->flash_message('error','Rooms have this Lives house.'); // Call flash message function
        else {            
            $lives = Lives::where('id','!=',$request->id)->where('status','Active')->get();
            if(count($lives) == 0)
                  {                   
                       $this->helper->flash_message('error', 'Atleast One Lives shoud be Active.'); 
                   }else{ 
                   $exists_rnot = Lives::find($request->id);
                          if(@$exists_rnot){

                              LivesLang::where('lives_id',$request->id)->delete();                   
                              Lives::find($request->id)->delete();
                              $this->helper->flash_message('success', 'Deleted Successfully.'); 

                          }
                      else{

                        $this->helper->flash_message('error', 'This Lives Already Deleted.');

                          }
           
                      }
        }
        return redirect(ADMIN_URL.'/lives');
    }

    //for Atleast One lives in "Active"...

    public function chck_status($id)
    {
        $livesstatus=Lives::where('status','Active')->get();
        if(count($livesstatus) > 1)
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
