<?php

/**
 * Service Controller
 *
 * @package     Makent
 * @subpackage  Controller
 * @category    Service
 * @author      Trioangle Product Team
 * @version     1.5.9
 * @link        http://trioangle.com
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DataTables\ServiceDataTable;
use App\Models\Service;
use App\Models\ServiceLang;
use App\Models\language;
use App\Models\Rooms;
use App\Http\Start\Helpers;
use Validator;

class ServiceController extends Controller
{
    protected $helper;  // Global variable for instance of Helpers

    public function __construct()
    {
        $this->helper = new Helpers;
    }

    /**
     * Load Datatable for Service
     *
     * @param array $dataTable  Instance of ServiceDataTable
     * @return datatable
     */
    public function index(ServiceDataTable $dataTable)
    {

        return $dataTable->render('admin.service.view');
    }

    /**
     * Add a New Service
     *
     * @param array $request  Input values
     * @return redirect     to service view
     */
    public function add(Request $request)
    {
        if(!$_POST)
        {   $data['language'] = Language::translatable()->get(); 
            return view('admin.service.add',$data);
        }
        else if($request->submit)
        {
            //check name exists or not            
             $service_name = Service::where('name','=',@$request->name[0])->get();            
             if(@$service_name->count() != 0){             
                     $this->helper->flash_message('error', 'This Name already exists'); // Call flash message function
                     return redirect(ADMIN_URL.'/service');
                }    

            $service = new Service;
        

        for($i=0;$i < count($request->lang_code);$i++){
         
        if($request->lang_code[$i]=="en"){
      
        $service->name        = $request->name[$i];
        $service->status      = $request->status;
        $service->save();
        $lastInsertedId = $service->id;
        }
        else{
         $service_lang = new ServiceLang;
         $service_lang->service_id   = $lastInsertedId;
         $service_lang->lang_code   = $request->lang_code[$i];
         $service_lang->name        = $request->name[$i];      
         $service_lang->save();

        }

        }
                

                $this->helper->flash_message('success', 'Added Successfully'); // Call flash message function

                return redirect(ADMIN_URL.'/service');
            
        }
        else
        {
            return redirect(ADMIN_URL.'/service');
        }
    }

    /**
     * Update Service Details
     *
     * @param array $request    Input values
     * @return redirect     to Service View
     */
    public function update(Request $request)
    {
        if(!$_POST)
        {   $data['language'] = Language::get();  
            $data['result'] = Service::find($request->id);
            $data['langresult'] = ServiceLang::where('service_id',$request->id)->get();    
            return view('admin.service.edit', $data);
        }
        else if($request->submit)
        {
           

            // Delete Service

            $lang_id_arr = $request->lang_id;
            unset($lang_id_arr[0]); 

            if(empty($lang_id_arr))
            {
            $service_lang = ServiceLang::where('service_id',$request->id); 
            $service_lang->delete();
            }

            $service_del = ServiceLang::select('id')->where('service_id',$request->id)->get();
            foreach($service_del as $values){ 
            if(!in_array($values->id,$lang_id_arr))
            {
            $service_lang = ServiceLang::find($values->id); 
            $service_lang->delete();
            }       

            }

            //End Delete Service
            //check name exists or not            
             $service_name = Service::where('id','!=',@$request->id)->where('name','=',@$request->name[0])->get();            
             if(@$service_name->count() != 0){             
                     $this->helper->flash_message('error', 'This Name already exists'); // Call flash message function
                     return redirect(ADMIN_URL.'/service');
                }  
             // update Service

        for($i=0;$i < count($request->lang_code);$i++){
         
          if($request->lang_code[$i]=="en"){
          $service = Service::find($request->id);
          $service->name        = $request->name[$i];        
          $service->status      = $request->status;
          $service->save();

          }
        else{
              if(isset($request->lang_id[$i])){

              $service_lang = ServiceLang::find($request->lang_id[$i]);
              $service_lang->lang_code   = $request->lang_code[$i];
              $service_lang->name        = $request->name[$i];            
              $service_lang->save();            
              } 
              else{

              $service_lang =  new ServiceLang; 
              $service_lang->service_id   = $request->id;    
              $service_lang->lang_code   = $request->lang_code[$i];
              $service_lang->name        = $request->name[$i];              
              $service_lang->save();

              }

        }
      } // End update Service
                    
               $this->helper->flash_message('success', 'Updated Successfully'); // Call flash message function
                       
                return redirect(ADMIN_URL.'/service');
        }
       
        else
        {
            return redirect(ADMIN_URL.'/service');
        }
    }

    /**
     * Delete Service
     *
     * @param array $request    Input values
     * @return redirect     to Service View
     */
    public function delete(Request $request)
    {
        $count = Rooms::whereRaw('find_in_set('.$request->id.', service)')->count();

        if($count > 0)
            $this->helper->flash_message('error','Rooms have this Service.'); // Call flash message function
        else {            
            $service = Service::where('id','!=',$request->id)->where('status','Active')->get();
            if(count($service) == 0)
                  {                   
                       $this->helper->flash_message('error', 'Atleast One Service shoud be Active.'); 
                   }else{ 
                   $exists_rnot = Service::find($request->id);
                          if(@$exists_rnot){

                              ServiceLang::where('service_id',$request->id)->delete();                   
                              Service::find($request->id)->delete();
                              $this->helper->flash_message('success', 'Deleted Successfully.'); 

                          }
                      else{

                        $this->helper->flash_message('error', 'This Service Already Deleted.');

                          }
           
                      }
        }
        return redirect(ADMIN_URL.'/service');
    }

    //for Atleast One service in "Active"...

    public function chck_status($id)
    {
        $servicestatus=Service::where('status','Active')->get();
        if(count($servicestatus) > 1)
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
