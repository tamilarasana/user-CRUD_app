<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Request\URL;
use Illuminate\Http\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Usermodel;
use View;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserController extends Controller
{
    public function store(Request $request){
            $this->validate($request, [
                'name' => 'required',
                'address' => 'required',
                'phone'   =>  'required',
                'state'   =>  'required',
                'country' =>  'required'
            ],
            [
                'name.required'      =>     'Name Required',
                'address.required'   =>     'Address Required',
                'phone.required'     =>     'Phone  Required',
                'state.required'     =>     'State Required',
                'country.required'  =>     'Country Required'
           ]);

            $usermodel = new Usermodel;

            $usermodel->name = $request->name;
            $usermodel->address = $request->address;
            $usermodel->phone = $request->phone;
            $usermodel->state = $request->state;
            $usermodel->country = $request->country;


                if($usermodel->save()){

                 return redirect('list')->with('success', 'Data Added Successfully');
                }
        }

         public function getData(){

            $data['data']= Usermodel::sortable()->paginate(5);

            if (count($data)>0)
            {
                return view('list',$data);

            }
            else
            {
                return view('list',$data);
            }

        }


        // public function show(Request $request, $id){


        public function show($id)
         {
      
        //dd($id);, 
        
         $data['info'] = Usermodel::find(['id' => $id ]);
         //echo '<pre/>';
         //print_r($data);
         //exit(); //dd($data);
         //dd($data);
          return view('list_show',$data);
         }

        public function edit($id){

            $data = Usermodel::find($id);
            return view('list_edit', compact('data','id'));
        }


        public function update(Request $request, $id) {
             
          $this->validate($request, [
                'name' => 'required',
                'address' => 'required',
                'phone'   =>  'required',
                'state'   =>  'required',
                'country' =>  'required'
            ],
            [
                'name.required'      =>     'Name Required',
                'address.required'   =>     'Address Required',
                'phone.required'     =>     'Phone  Required',
                'state.required'     =>     'State Required',
                'country.required'  =>     'Country Required'
           ]);

            $data          = Usermodel::find($id);
            $data->name    = $request->get('name');
            $data->address = $request->get('address');
            $data->phone   = $request->get('phone');
            $data->state   = $request->get('state');
            $data->country = $request->get('country');
            $data->save();
            return redirect('list')->with('success', 'Data Updated');
        }

        public function destroy(Request $request, $id) {
            $data = Usermodel::find($id);
            $data->delete();
            return redirect('list')->with('success', 'Data deleted');

        }

        public function index(){
            $data = Usermodel::latest()->paginate(2);
            return view('list', compact('data'))
                    ->with('success',(request()->input('page',1)-1)*2);
        }

        public function search(Request $request){
            $search=$request->get('search');
            $data=\DB::table('details')->where('name','like','%'.$search.'%') ->paginate(2);
            return view('list', ['data' => $data]);
        }



        public function export() 
         {
            
           return Excel::download(new UsersExport, 'sample.xlsx');
         }

         /* public function sort(){

            DB::enableQueryLog();

            $data =Usermodel::sortable()->paginate(2);

            echo DB::enableQueryLog();

            die;
            
            return view('list', compact('data'));
          } */



         //Api 

        function api_list(Request $request){

            $_message = [
                            'status'    => false,
                            'message'   => "No data found",
                            'data'      => \DB::table('details')->get()
                        ];



            return response()->json($_message);
        }

    
}