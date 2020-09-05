<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Symfony\Component\HttpFoundation\Response;

use App\Doctor;

use App\Room;

use App\Specialty;

class DoctorController extends Controller
{

    public function index()
    {

        $result = Doctor::orderBy('fullname', 'asc')->paginate(10000);

        $rooms = Room::orderBy('name', 'asc')->paginate(100);

        $specialtys = Specialty::orderBy('name', 'asc')->paginate(100);

        $colors = array('card xl-blue', 'card xl-khaki', 'card xl-blue', 'card xl-parpl', 'card xl-pink', 'card xl-seagreen', 'card xl-blue', 'card xl-seagreen');

        return view('doctor.list', array('results' => $result, 'rooms' => $rooms, 'specialtys' => $specialtys, 'colors' => $colors));
    }

    public function view(int $id)
    {

        $doctor = Doctor::find($id);

        if (isset($doctor) && $doctor->id > 0) {

            $data = $doctor;

            $data['formatedgender'] = ($doctor->gender == 'M') ? 'Male' : 'Female';
            $data['formatedbirthdate'] = \FormatTime::LongTimeFilter($doctor->birthdate);
            $data['formatedphone'] = \FormatTime::phoneFormat($doctor->phone);
            $data['formatedcreated_at'] = \FormatTime::LongTimeFilter($doctor->created_at);
            $data['formatedupdated_at'] = \FormatTime::LongTimeFilter($doctor->updated_at);
            $data['image'] = url('/getImage/' . $doctor->image);
            $data['username'] = $doctor->user->name;
            $data['usermodifiedname'] = $doctor->usermodified->name;
            $data['roomname'] = $doctor->room->name;
            $data['specialtyname'] = $doctor->specialty->name;

            return $data;
        }

        return array('message' => 'No data');
    }

    public function save(Request $request)
    {

        $validate = $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'roomid' => 'required',
            'specialtyid' => 'required'
        ]);

        $doctor = (isset($request->id) && $request->id > 0) ? Doctor::findOrFail($request->id) : new Doctor();

        $user = \Auth::user();
        $doctor->createdBy = $user->id;
        $doctor->modifiedby = $user->id;
        $doctor->roomid = $request->input('roomid');
        $doctor->specialtyid = $request->input('specialtyid');
        $doctor->fullname = $request->input('fullname');
        $doctor->gender = $request->input('gender');
        $doctor->birthdate = $request->input('birthdate');
        $doctor->facebook = $request->input('facebook');
        $doctor->twitter = $request->input('twitter');
        $doctor->instagram = $request->input('instagram');
        $doctor->email = $request->input('email');
        $doctor->phone = $request->input('phone');
        $doctor->address = $request->input('address');

        $image = $request->file('image');
        if ($image) {
            $doctor->image = $request->input('image');
            $image_path = time() . $image->getClientOriginalName();
            \Storage::disk('images')->delete($doctor->image);
            \Storage::disk('images')->put($image_path, \File::get($image));

            $doctor->image = $image_path;
        }

        $doctor->id ? $doctor->update() : $doctor->save();

        return redirect()->route('doctors')->with(array('message' => 'Successfully saved'));
    }
}
