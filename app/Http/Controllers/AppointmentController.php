<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;





class AppointmentController extends Controller
{

    // public function indexA() 
    // {

    //     return view('appointments');
    // }

    // public function indexA()
    // {
    //     $users = User::all();

        
    //     return view('appointments',  ["appointment"=>$users]);
    // }


    public function indexA()
{
    $tokenOwner = auth()->user(); // Assuming the authenticated user is the token owner
    // return $tokenOwner;
    // $users = User::where('id', $tokenOwner->id)->get(); // Fetch only the token owner
    
    return view('appointments',  ["appointment" => $tokenOwner]);
}

    public function index()
    {
        $data = Appointment::paginate(10);
        return view('admin.listeRendez', compact('data'));
    }
    public function indexB()//filter
    {
        $currentDate = now()->toDateString();
    
        $data = Appointment::whereDate('appointment_day', $currentDate)->paginate(10);
    
        return view('admin.listeRendez', compact('data'));
    }
//     public function index()
// {
// $data['appointments'] = Appointment::orderBy('id','desc')->paginate(5);
// return view('admin.listeRendez', $data);
// }

    // public function index()
    // {
    // $data['companies'] = Company::orderBy('id','desc')->paginate(5);
    // return view('companies.index', $data);
    // }



    // public function edit(Appointment $appointmenta)
    // {
    //     $appointment = Appointment::paginate(10);
    //     return view('admin.editeRendez', compact('appointment'));
    // }

    public function edit(Appointment $appointment , $id)
    {
        $data = Appointment::find($id); 
        // return $data ;
        return view('admin.editeRendez', ["appointment"=>$data]);
        // return $id; 
    }

    // public function update(Request $request, $id)
    // {
    //     $appointment = Appointment::findOrFail($id);
        
    //     $appointment->name = $request->input('name');
    //     $appointment->lineage = $request->input('lineage');
    //     $appointment->national_number = $request->input('national_number');
    //     $appointment->email = $request->input('email');
    //     $appointment->appointment_day = $request->input('appointment_day');
    //     $appointment->appointment_hour = $request->input('appointment_hour');
        
    //     $appointment->save();

    //     return redirect()->route('listeRendez.dashboard')
    //         ->with('success', 'Appointment updated successfully.');
    // }

                public function update(Request $request,$id)
                {
                    
                    // return $request;
                    $request->validate([
                        'cin'=> 'required',
                'prenom'=>'required',
                'téléphone'=>'required',
                'name' => 'required',
                'email' => 'required',
                'appointment_day' =>'required',
                'appointment_hour' => 'required',
                ]);

                // return $request;
                $appointment = Appointment::find($id); 

                // return  Appointment::find($id);
                $appointment->update($request->all());

                // $company = Appointment::find($id);
                return redirect()->route('rendezvous.index')->with('success','Product updated successfully');


                }




// public function update(Request $request, Product $product)
// {
//     $request->validate([
//         'name' => 'required',
//         'detail' => 'required',
//     ]);

//     $product->update($request->all());

//     return redirect()->route('products.index')->with('success','Product updated successfully');
// }
  

    // public function edit(Appointment $Appointment)
    // {
    //     return view('admin.editeRendez',compact('Appointment'));
    // }



    public function create()
    {
        return view('appointments');
    }

    // public function destroy(Request $request, $id)
    // {
    //     $appointment = Appointment::findOrFail($id);
    //     $appointment->delete();

    //     return redirect()->route('rendezvous.indexA')
    //         ->with('success', 'Appointment deleted successfully.');
    // }


//    public function destroy(Appointment $Appointmenttt)
//    {

//    $Appointmenttt->delete();
//     return redirect()->route('rendezvous.index')
//     ->with('success','Company has been deleted successfully');
//     }
// public function destroy(Appointment $appointment)
// {
//     $appointment->delete();

//     return redirect()->route('rendezvous.index')
//         ->with('success', 'Appointment has been deleted successfully.');
// }



// public function destroy(Appointment $appointment)
// {
//     $appointment->delete();

//     $appointments = Appointment::all();

//     return redirect()->route('rendezvous.index')
//         ->with('success', 'Appointment has been deleted successfully.')
//         ->with('appointments', $appointments);
// }
// public function destroy(Appointment $Appointment): RedirectResponse
//     {
//         $Appointment->delete();
         
//         return redirect()->route('rendezvous.index')
//                         ->with('success','Product deleted successfully');
//     }

// public function destroy(Request $request, $id)
//     {
//         $appointment = Appointment::findOrFail($id);
//         $appointment->delete();

//         return redirect()->route('listeRendez.dashboard')
//             ->with('success', 'Appointment deleted successfully.');
//     }

    public function destroy(Request $request)
    {
         $appointment = Appointment::findOrFail($request->id);
        $appointment->delete();
        //return 'deleted ';

         return redirect()->route('rendezvous.index') 
            ->with('success', 'Appointment deleted successfully.');
    }
    

// public function show(Appointment $Appointment)
// {
// return view('admin.listeRendez',compact('Appointment'));
// } 

    public function store(Request $request)
    {
        // return "dd";
        $request->validate([
            'name' => 'required',
            'prenom' => 'required',
            'cin' => 'required',
            'téléphone' => 'required',
            'email' => 'required|email',
            'appointment_day' => 'required|date',
            'appointment_hour' => 'required',
        ]);

        Appointment::create($request->all());
        // return 'test';
        // return redirect()->route('showindexuser'); 
        return view('dashboard');
        // return redirect()->route('appointmentsA')->with('success', 'Appointment created successfully.');
    }


//     public function indexuser()
// {
    

//     $user = auth()->user(); // Get the authenticated user
    
//     $specialAppointments = $user->appointments; // Retrieve the special appointments for the user
    // return $specialAppointments;

//     return view('dashboard', ['appointments' => $user]);
// }

    // public function indexuser()
    // {
    //     $user = auth()->user(); 
        // Get the authenticated user
        
        // $appointments = $user->appointments; // Retrieve all appointments for the user
        
    //     return view('dashboard', ['appointments' => $user]);
    // }

    public function search(Request $request)
    {   
        
        // $nationalNumber = $request->input('national_number');
        $nationalNumber = $_GET['query'];
      
        $data = Appointment::where('cin', 'LIKE', "%$nationalNumber%")->get();
        // return $data;
        return view('admin.listserch', compact('data'));
    }


//     public function search(Request $request)
// {
//     $nationalNumber = $request->input('national_number');
    
//     $data = Appointment::where('national_number', 'LIKE', "%$nationalNumber%")->paginate(10);

//     return view('admin.appointments.index', compact('data'));
// }

 

    // return $data;









}


public function indexB()//filter
{
    $currentDate = now()->toDateString();

    $data = Appointment::whereDate('appointment_day', $currentDate)->paginate(10);

    return view('admin.listeRendez', compact('data'));
}