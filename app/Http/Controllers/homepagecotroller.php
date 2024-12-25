<?php

namespace App\Http\Controllers;
use App\Models\Registerkey;
use App\Models\Userbrand;
use App\Models\Userpostbland;
use App\Models\Userpostmatangazo;
use App\Models\Userproductorder;
use Hash;
use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Storage;
use App\Models\Userpost;
use App\Models\Contactus;
use Illuminate\Validation\Rules\Unique;
class homepagecotroller extends Controller
{

    public function userdashboard(Request $request){
            $data=$request->validate(
            [
                'name'=>'required',
                'password'=>'required',
            ]
            );
            $user=Registration::where('name',$data['name'])->first();
            $pass=Registration::where('name',$data['name'].'~')->first();
           
            if($user && Hash::check($data['password'],$user->password)){
             
                    $id=$user->id;
                    $status=$user->status;
                    session(['id'=>$id]);
                    session(['status'=>$status]);
                    session(['name'=>$user->name] ); 
                    return redirect(route('dashboardpage'));  
                }
                else{
        
                    if($pass){ 
                        $messege="Akaunti yako  inakadiriwa kufungiwa piga no:0785226584";
                        return redirect(route('userlogin'))->with('login', $messege); 
                    }else{
                        $messege= "Umekosea misimbo au huna akaunti";
                        return redirect(route('userlogin'))->with('login', $messege);    
                    
                    }
                   
                }
           }
            
    public function comments(Request $request){
             $Data=  $request->validate([
                'name'=>'required',
               'massege'=>'required',
               'phone'=>'required|numeric', ]);
               $newcomment=Contactus::create($Data);
               return redirect(route('contactus'))->with('comment', 'Tunajali mawazo yako kwa maendeleo!');
            
            }

    public function userregister(Request $request){
        $data= $request->validate([
            
          
           'password'=>'required',
           'phone'=>'required|numeric',
           'status'=>'nullable',
           'name'=>'required|unique:Registration',],[
            'name.Unique'=>'Jina hili limeshatumika'
        ]);
        $data['password']=Hash::make($data['password']);
        $newUser =Registration::create($data);
        return redirect(route('userlogin'))->with('success', 'Registered successfully');
    }
    public function userchange(Registration $user,Request $request){
        
            if($user->status=="user"){
                $user->status="admin";
            }else{
                $user->status="user";
            }
            $user->save();
         return redirect(route('user'));
    }
    public function dirisha(Request $request){
        $dirisha=Registerkey::where('id', 1)->first(); 
        if( $dirisha->registerkey=="opened"){
            $dirisha->registerkey="closed";
        }else{
            $dirisha->registerkey="opened";
        }
        $dirisha->save();
     return redirect(route('user'));
}
    public function userorderdel(Userproductorder $userorderd){
        $userorderd->delete();
         return redirect(route('dashboardpage'));
}
public function commentdel(Contactus $comment){
    $comment->delete();
     return redirect(route('user'));
}
    public function userdelete(Registration $user){
    
    $test= Userpost::where('ownerid', $user->id)->get();
    $test1= Userpostbland::where('ownerid', $user->id)->get();
    $test2= Userpostmatangazo::where('ownerid', $user->id)->get();
    $test3= Userbrand::where('description', (string)$user->id)->get();
    $test4= Userproductorder::where('description', (string)$user->id)->get();
    foreach($test as $tests){
        if (Storage::disk('public')->exists($tests->imgpath)) {
            Storage::disk('public')->delete($tests->imgpath);
          }
         
    }
    foreach($test1 as $tests){
        if (Storage::disk('public')->exists($tests->imgpath)) {
            Storage::disk('public')->delete($tests->imgpath);
          }
    }
    foreach($test2 as $tests){
        if (Storage::disk('public')->exists($tests->imgpath)) {
            Storage::disk('public')->delete($tests->imgpath);
          }
    } 
    foreach($test3 as $tests){
        $tests->delete();
    }
    foreach($test4 as $tests){
        $tests->delete();
    }
    $user->delete();
    return redirect(route('user'));
}
    public function  buserorder(Userbrand  $buserorder){
        $buserorder->delete();
        return redirect(route('user'));
}
public function userblock(Registration $user){
    if(strpos($user->name,'~')!==false){ 
        $user->name=rtrim($user->name,'~');
    }else{
        $user->name=$user->name.'~'; 
         
    }
 
    $user->save();
    return redirect(route('user'));
}

public function  buserorders(Userpostbland  $buserorders){
    if (Storage::disk('public')->exists( $buserorders->imgpath)) {
        Storage::disk('public')->delete( $buserorders->imgpath);
      }
    $buserorders->delete();
        return redirect(route('user'));
}
public function  matangazodel(Userpostmatangazo  $matangazo){
    if (Storage::disk('public')->exists( $matangazo->imgpath)) {
        Storage::disk('public')->delete( $matangazo->imgpath);
      }
      $matangazo->delete();
        return redirect(route('user'));
}

    public function  userpostshow(Userpost  $userpostshowd){
    if (Storage::disk('public')->exists(  $userpostshowd->imgpath)) {
        Storage::disk('public')->delete(  $userpostshowd->imgpath);
      }
    $userpostshowd->delete();
    return redirect(route('dashboardpage'));
}

    
    public function uploadimage(Request $request){
            $data  = $request->validate([
                'pname'=>'required',
                'description'=>'required',
                'cost'=>'required|numeric',
                'imgpath' => 'nullable|file|mimes:jpg,png,jpeg,gif|max:2048',
                'ownerid'=>'nullable',
               
            ]);
            $phone=Registration::where('id', session('id'))->first();
            $data['description']=$request->description."  #".(string)$phone->phone ."#";
            $data['ownerid']=session('id');
       if ($request->hasFile('imgpath')) {
           $data['imgpath'] = $request->file('imgpath')->store('userpost_images', 'public');
  
       }
        $newPost =Userpost::create($data);
             return redirect(route('uploadimage'));

        }
//"94bQtdAQqmc7Mtf2BN4L8b94qSzZFtschCOATm9C"

    public function uploadimagebland(Request $request){
    $data  = $request->validate([
        
        'description'=>'required',
        'phone'=>'required|numeric',
        'cost'=>'required|numeric',
        'imgpath' => 'nullable|file|mimes:jpg,png,jpeg,gif|max:2048',
        'ownerid'=>'nullable',
       
    ]);
    $data['ownerid']=session('id');
if ($request->hasFile('imgpath')) {
   $data['imgpath'] = $request->file('imgpath')->store('userpost_imagesbland', 'public');

        }
        $newPost =Userpostbland::create($data);
            return redirect(route('dashboardpage1'));

        }
public function uploadimagematangazo(Request $request){

    $data  = $request->validate([
        
        'description'=>'required',
        'head'=>'required',
        'imgpath' => 'nullable|file|mimes:jpg,png,jpeg,gif|max:2048',
        'ownerid'=>'nullable',
       
    ]);
    $data['ownerid']=session('id');
    if ($request->hasFile('imgpath')) {
   $data['imgpath'] = $request->file('imgpath')->store('userpost_imagesmatangazo', 'public');
    } else
    $data['imgpath']="userpost_imagesmatangazo/tangazo.jpg";
    $newPost =Userpostmatangazo::create($data);
     return redirect(route('dashboardpage2'));

    }

    public function brandorder(Userpostbland $brand,Request $request){

        $data  = $request->validate([
            
            'description'=>'nullable',
            'describ'=>'nullable',
            'quantity'=>'required',
            'imgpath' => 'nullable',
            'phone'=>'required',
           
        ]);
        if ( $brand->imgpath) {
            $data['imgpath'] =  $brand->imgpath;
            $data['describ'] = $brand->description;
            $data['description'] = (string) $brand->ownerid;
        }
        $newPost =Userbrand::create($data);
         return redirect(route('index'));
    
        }
        public function productorder(Userpost $userpost,Request $request){
            

            $data  = $request->validate([
                'description'=>'nullable',
                'pname'=>'nullable',
                'quantity'=>'required',
                'imgpath' => 'nullable',
                'phone'=>'required',
               
            ]);
            if ($userpost->imgpath) {
                $data['imgpath'] = $userpost->imgpath;
                $data['description'] = (string)$userpost->ownerid;
                $data['pname'] = $userpost->pname;
            }
            $newPost =Userproductorder::create($data);
             return redirect(route('index'));
        
            }

    public function userregistration(){
        $regpermission=Registerkey::where('id',1)->first();
        if( $regpermission->registerkey=="opened"){
            return view("register");
        }else
        return view('error');
        }

    public function contactus(){
        return view("contactus");}

public function userlogin(){
       return view("login");
    }

    public function dashboardpage(){
        if(session("id")){
            $userpostshows = Userpost::where('ownerid', session('id'))->get();
                    
            $userorders = Userproductorder::where('description',(string)session("id"))->get();
            return view("dashboard.dashboard",['userpostshow'=> $userpostshows,'userorder'=> $userorders]);
        }else
        return view('error');
       
        }
    public function dashboardpage1(){
            if(session("status")=="admin"){
                return view("dashboard.bland");
            }else
            return view('error');
           
            }
            
    public function dashboardpage2(){
            if(session("status")=="admin"){
                return view("dashboard.matangazo");
            }else
            return view('error');
           
            }
            public function dashboardpage3(){
                if(session("status")=="admin"){
                    $regpermission=Registerkey::where('id',1)->first();
                    $users = Registration::all();
                    $comments = Contactus::all();
                    $matangazo = Userpostmatangazo::where('ownerid', session('id'))->get();
                    $userorders=Userbrand::where('description', session('id'))->get();
                    $userorderss=Userpostbland::where('ownerid', session('id'))->get();
                return view("dashboard.user",['permission'=>$regpermission ,'users'=>$users,'comments'=>$comments,'userorderb'=> $userorders,'userorderbs'=> $userorderss,'matangazo'=> $matangazo],);
                }else
                return view('error');
               
                }
    public function uploadpage(){
        if(session("id")) {
            return view("dashboard.uploadimage");
         }else
             return view('error');
   }
   public function matangazo2(){

$userpostmatangazo = Userpostmatangazo ::all();
return view("matangazo2", ['matangazo'=>$userpostmatangazo]);
     
   }
   public function home(){
    session()->forget(['id','status','name']);
        //session()->flash("id");
        //session()->flash("status");
        //session()->flash("name");
        $users=Registration::all();
        $userpost=Userpost::all();
        $comments=Contactus::all();
        $userbland=Userpostbland::all();
        $filterd=[];
        foreach($userpost as $filteruserpost){
          $test= Registration::where('id', $filteruserpost->ownerid)->first();
          if($test->status=="admin"){
            $filterd[]=$filteruserpost;
          }
        }
        return view("homepage",[ 'users' => $users,'adminpost' =>   $filterd,
        'comments' => $comments,'brand' => $userbland,
        'userpost' => $userpost],);
     
   }
   public function shome(Request  $index){
    //session()->flash("id");
    //session()->flash("status");
    //session()->flash("name");
    session()->forget(['id','status','name']);
    $sindex=$index->sindex;
    $users=Registration::all();
    $userpost=Userpost::all();
    $sindexs=Userpost::where('ownerid', $sindex)->get();
    $comments=Contactus::all();
    $userbland=Userpostbland::all();
    $filterd=[];
    foreach($userpost as $filteruserpost){
      $test= Registration::where('id', $filteruserpost->ownerid)->first();
      if($test->status=="admin"){
        $filterd[]=$filteruserpost;
      }
    }
    
    return view("homepage",[ 'users' => $users,'adminpost' =>   $filterd,
    'comments' => $comments,'brand' => $userbland,
    'userpost' => $sindexs],);
 
}
 }