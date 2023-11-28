<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $valodate = $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required',
            ]);

            if(Auth::guard('web')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>'Active','type'=>'Admin'])){
                return redirect('dashboard');
                }
            else{
                return redirect()->back()->with('error','Invalid Email or Password');
            }
        }
        return view('server.login');
    }
    public function logout(){
        Auth::guard('web')->logout();
        return redirect('login');
    }
    public function dashboard(){
        // $admin = User::where('type','Admin')->where('designation_id','!=','0')->get()->count();
        // $employee = User::with('designation')->where('type','Employee')->whereHas('designation',function($q){
        //     $q->where('type','Employee');})->get()->count();
        // $labore = User::with('designation')->where('type','Employee')->whereHas('designation',function($q){
        //     $q->where('type','Laborer');})->get()->count();

        // $project = Project::get()->count();
        // $complete_project = Project::where('status','Finished')->get()->count();
        // $running_project = Project::where('status','Ongoing')->get()->count();

        // $invoice = Invoice::get()->count();
        // $purchase_invoice = Invoice::where('invoice_type','Purchase')->get()->count();
        // $sale_invoice = Invoice::where('invoice_type','Sell')->get()->count();
        // $project_invoice = Invoice::where('invoice_type','Project')->get()->count();

        // $client = Client::get()->count();
        // $supplier = Supplier::get()->count();
        // $project_client = Client::where('type','Project')->get()->count();
        // $sale_client = Client::where('type','Sale')->get()->count();
        // return view('admin.dashboard')->with(compact('admin','employee','labore','project','complete_project','running_project','invoice','purchase_invoice','sale_invoice','project_invoice','client','project_client','sale_client','supplier'));
        return view('server.admin.dashboard');
    }
    // public function changePassword(Request $request)
    // {
    //     if($request->isMethod('post'))
    //     {
    //         //dd($request->all());
    //         $employee = User::where('email',$request->email)->get()->first();
    //         if($employee){
    //             if(Hash::check($request->current_password, $employee->password)) {
    //                 //dd($request->new_password);
    //                 $employee->password = bcrypt($request->new_password);
    //                 $employee->update();
    //                 return redirect(route('user.change-password'))->with('success','Password Change Successfully');
    //             } else {
    //                 return redirect(route('user.change-password'))->with('error','Password Not Matching');
    //             }
    //         }
    //         else{
    //             return redirect(route('user.change-password'))->with('error','Email Id Not Correct');
    //         }

    //     }
    //     return view('payroll.user.change-password');
    // }
}
