<?php

namespace App\Http\Controllers;
use App\Models\patient_contact_info;
use App\Models\patient_appointment;
use Illuminate\Support\Facades\DB;
use App\Models\doctor;
use App\Models\citie;
use Illuminate\Http\Request;

class mycontroller extends Controller
{

    public function contactinfo(Request $input)
    {
        $table = new patient_contact_info();
        $table->patient_name = $input->name;
        $table->patient_email = $input->email;
        $table->patient_subject = $input->subject;
        $table->patient_message = $input->message;
        $table->save();
        return redirect()->back()->with('success','Your Information Has Been Send Successfully');
    }

    public function admincontact()
    {
        $records = patient_contact_info::get();
        return view("adminpanel.contact",compact('records'));
    }

    public function deletecontact($id)
    {
        $records = patient_contact_info::find($id);
        $records->delete();
        return redirect()->back()->with('success','Record Deleted Successfully');
    }

  public function updatecontact($id)
    {
        $record = patient_contact_info::find($id);
        return view("adminpanel.updatecontact",compact('record'));
    }

    public function updrecord(Request $record)
    {
         $table = patient_contact_info::find($record->id);
         $table->patient_name = $record->patientname;
         $table->patient_email = $record->patientemail;
         $table->patient_subject = $record->patientsubject;
         $table->patient_message = $record->patientmessage;
         $table->save();
        return redirect('/contactdetails');
    }


    public function insertinfo(Request $ins)
    {   
        
        $table = new patient_appointment();
        $table->name = $ins->name;
        $table->email = $ins->email;
        $table->phone = $ins->phone;
        $table->time = $ins->time;
        $table->service = $ins->doctorlist;
        $table->specialist = $ins->specialist;  
        $table->address = $ins->address;
        $table->date = $ins->date;
        $table->message = $ins->message;
        $table->save();
        return redirect()->back()->with('success','Record Has Been Inserted Successfully');
    }

    public function adminpatient()
    {
        $records = patient_appointment::get();
        return view("adminpanel.patient",compact('records'));
  
   }

 public function deleteinsert($id){
    $records = patient_appointment::find($id);
    $records->delete();
    return redirect()->back()->with('success','Record Deleted Successfully');
}

public function updateinsert($id)
{
    $updrecords = patient_appointment::find($id);
    return view("adminpanel.updpatients",compact('updrecords'));
}

public function updrecordapp(Request $updrecords)
    {
         $table = patient_appointment::find($updrecords->patientid);
         $table->name = $updrecords->patientname;
         $table->email = $updrecords->patientemail;
         $table->phone = $updrecords->patientphone;
         $table->time = $updrecords->patienttime;
         $table->service = $updrecords->patientservice;
         $table->specialist = $updrecords->patientspe;
         $table->address = $updrecords->patientaddress;
         $table->date = $updrecords->patientdate;
         $table->message = $updrecords->patientmessage;
         $table->save();
        return redirect('/patient');
    }

public function getdata()
{
    $records = patient_appointment::get();
    return view("doctorpanel.index",compact('records'));

}

public function addcities(Request $cities)
{
    $table = new citie();
    $table->cities = $cities->cities;
    $table->save();
    return redirect()->back()->with('success','Record Has Been Inserted Successfully');
}

public function getcity()
{
    $getcity = citie::get();
    return view("adminpanel.cities",compact('getcity'));

}

public function deletecity($id)
{
    $city = citie::find($id);
    $city->delete();
    return redirect()->back()->with('success','Record Deleted Successfully');
}

public function updatecity($id)
{
    $updcities = citie::find($id);
    return view("adminpanel.updcities",compact('updcities'));
}

public function updatedcity(Request $ucity)
{
     $table = citie::find($ucity->updid);
     $table->cities = $ucity->updcity;
     $table->save();
     return redirect('/cities');
}



 public function profile()
 {
     $records = patient_appointment::get();
     return view("profile",compact('records'));

}

public function doctorlogin(Request $req)
{
    $doctors = DB::table('doctors')->where('doctoremail', $req->input('doctoremail'))->where('doctorpassword', $req->input('doctorpassword'))->first();
    if($doctors)
    {
        session(['doctors'=>$req->input('doctoremail')]);
        session(['doctors'=>$req->input('doctorpassword')]);
        if ($req->input('doctoremail') && $req->input('doctorpassword')) 
        {
            $rec = patient_appointment::get();
            return view("doctorpanel.index",compact('rec'));
        }
    }
        else
        {
            return redirect('/loginpage')->with('error','Login Failed');
        }
}
public function logoutdoctor()
{
    session()->flush();
    return view('/');

}

public function insertdoctors(Request $req)
{
    $doc = new doctor();
    $doc->doctorname = $req->doctorname;
    $doc->doctoremail = $req->doctoremail;
    $doc->doctorspecialist = $req->doctorspeciality;
    $doc->doctorcontact = $req->doctorcontact;
    $doc->doctoraddress = $req->doctoraddress;
    $doc->doctorpassword = $req->doctorpassword;
    $doc->save();
    return redirect()->back()->with('success','Record Has Been Registered Successfully');
}

public function fetchdoctor()
{
    $fetchdoctor = doctor::get();
    return view('adminpanel.fetchdoctor',compact('fetchdoctor'));
}

public function deletedoc($id)
{
    $fdoctor = doctor::find($id);
    $fdoctor->delete();
    return redirect()->back()->with('success','Record Has Been Deleted Successfully');
}

public function upddoctor($id)
{
    $upddoctors = doctor::find($id);
    return view("adminpanel.upddoctor",compact('upddoctors'));
}

public function doctorupdated(Request $doc)
{
    $updated = doctor::find($doc->docid);
    $updated->doctorname = $doc->docname;
    $updated->doctoremail = $doc->docemail;
    $updated->doctorspecialist = $doc->docspecialist;
    $updated->doctorcontact = $doc->doccontact;
    $updated->doctoraddress = $doc->docaddress;
    $updated->doctorpassword = $doc->docpassword;
    $updated->save();
    return redirect('/fetchdoctor');
}

public function deletepatient($id)
{
    $del = patient_appointment::find($id);
    $del->delete();
    return redirect('/doctorlogin');
}

public function updatepatient($id)
{
    $fetchpatients = patient_appointment::find($id);
    return view("doctorpanel.updatepatient",compact('fetchpatients'));
}

public function updatedpatients(Request $fetchpatients)
    {
         $table = patient_appointment::find($fetchpatients->patientid);
         $table->name = $fetchpatients->patientname;
         $table->email = $fetchpatients->patientemail;
         $table->time = $fetchpatients->patienttime;
         $table->phone = $fetchpatients->patientphone;
         $table->service = $fetchpatients->patientservice;
         $table->date = $fetchpatients->patientdate;
         $table->message = $fetchpatients->patientmessage;
         $table->save();
        return redirect()->back();
    }
}
