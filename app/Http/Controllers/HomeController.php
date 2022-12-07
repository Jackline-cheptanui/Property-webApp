<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\property_images;
use App\Models\property_rooms;
use App\Models\property_types;
use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function welcome()
    {
        $rooms=property_rooms::with('getRoomfiles')->get();
       //.// dd($rooms);
        return view('welcome',['getRoomfiles'=>$rooms]);
    }
    public function create(Request $request)
    {
        //
        
        $property=new Properties();
        $property->property_description=$request->property_description;
        $property->property_name=$request->property_name;
        $property->property_location=$request->property_location;
        $property->save();
        if($request->property_image){
          //  dd($request->property_image);
            $images=new property_images();
            $name = $request->property_image->getClientOriginalName();
            $request->property_image->storeAs('public/attachments', $name);
            $images->property_id=$property->id;
            $images->property_room_id=null;
            $images->property_image=$name;
            $images->save();
        }
        return redirect()->back();
    }
    public function getproperty(){
        $propertylist=Properties::first();
        return response()->json($propertylist);
    }
    public function addPropertyRoom(Request $request){
      //  dd($request->all());
        $rooms=new property_rooms();
        $rooms->room_type_id=$request->room_type_id;
        $rooms->room_name=$request->room_name;
        $rooms->room_description=$request->room_description;
       // $rooms->room_price=$request->room_price;
        $rooms->save();
        if($request->room_image !=''){
            for ($i=0; $i <count($request->room_image) ; $i++) { 
                # code...
            $images=new property_images();
            $name = $request->room_image->getClientOriginalName();
            $request->room_image->storeAs('public/attachments', $name);
            $images->property_id=$request->property_id;
            $images->property_room_id=$rooms->id;
            $images->property_image=$name;
            $images->save();
            }
            
        }
        return redirect()->back();
    }
    public function addroom_types(){
       return view('users.addroomtype');
    }
    public function addrooms(){
        $getroomtypes=property_types::get();
        return view('users.addrooms',['getroomtypes'=>$getroomtypes]);
     }
     
    public function addRoomTypes(Request $request){
        $roomtype=new property_types();
        $roomtype->type_name=$request->roomtype;
        $roomtype->save();
        return redirect()->back();
    }
    /**
     * User Profile
     * @param Nill
     * @return View Profile
     * @author Shani Singh
     */
    public function getProfile()
    {
        return view('profile');
    }

    /**
     * Update Profile
     * @param $profileData
     * @return Boolean With Success Message
     * @author Shani Singh
     */
    public function updateProfile(Request $request)
    {
        #Validations
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'mobile_number' => 'required|numeric|digits:10',
        ]);

        try {
            DB::beginTransaction();
            
            #Update Profile Data
            User::whereId(auth()->user()->id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'mobile_number' => $request->mobile_number,
            ]);

            #Commit Transaction
            DB::commit();

            #Return To Profile page with success
            return back()->with('success', 'Profile Updated Successfully.');
            
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Change Password
     * @param Old Password, New Password, Confirm New Password
     * @return Boolean With Success Message
     * @author Shani Singh
     */
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        try {
            DB::beginTransaction();

            #Update Password
            User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
            
            #Commit Transaction
            DB::commit();

            #Return To Profile page with success
            return back()->with('success', 'Password Changed Successfully.');
            
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }
}
