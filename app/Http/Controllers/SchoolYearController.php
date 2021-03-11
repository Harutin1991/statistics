<?php

namespace App\Http\Controllers;
use App\Teacher;
use App\SchoolYearReference;
use Illuminate\Http\Request;
use App\Allocations;
use App\SchoolYear;

class SchoolYearController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {

        $schoolYear = SchoolYear::orderBy('id', 'DESC')->get();
        return response()->json($schoolYear);
    }

    public function create(Request $request)
    {
        $schoolYear = new SchoolYear;
        $schoolYear->year_name = $request->year_name;
        $schoolYear->start_date = $request->start_date;
        $schoolYear->end_date = $request->end_date;
        $schoolYear->description = $request->description;
        $schoolYear->is_current = $request->is_current;

        $schoolYear->save();
        return response()->json($schoolYear);
    }

    public function show($id)
    {
        $schoolYear = SchoolYear::find($id);
        return response()->json($schoolYear);
    }

    public function update(Request $request, $id)
    {
        $schoolYear = SchoolYear::find($id);

        $schoolYear->start_date = $request->input('start_date');
        $schoolYear->end_date = $request->input('end_date');
        $schoolYear->description = $request->input('description');
         $schoolYear->year_name = $request->input('year_name');
        $schoolYear->is_current = $request->input('is_current');
        $schoolYear->save();
        return response()->json($schoolYear);
    }

    public function destroy($id)
    {
        $school = SchoolYear::find($id);
        $school->delete();
        return response()->json('School Year removed successfully');
    }

}
