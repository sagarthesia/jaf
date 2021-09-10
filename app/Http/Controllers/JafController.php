<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJafRequest;
use Carbon\Carbon;
use App\Jaf;
use App\Jaf_education;
use App\Jaf_work;
use App\Jaf_language;
use App\Jaf_technology;


class JafController extends Controller
{
    public function store(StoreJafRequest $request)
    {
        $jaf                        = new Jaf;
        $jaf->first_name            = Arr::get($request, 'first_name');
        $jaf->last_name             = Arr::get($request, 'last_name');
        $jaf->email                 = Arr::get($request, 'email');
        $jaf->phone                 = Arr::get($request, 'phone');
        $jaf->gender                = Arr::get($request, 'gender', 1);
        $jaf->designation           = Arr::get($request, 'designation');
        $jaf->address_line1         = Arr::get($request, 'address_line1');
        $jaf->address_line2         = Arr::get($request, 'address_line1');
        $jaf->city                  = Arr::get($request, 'city');
        $jaf->state                 = Arr::get($request, 'state');
        $jaf->zip_code              = Arr::get($request, 'zip_code');
        $jaf->relationship_status   = Arr::get($request, 'relationship_status');
        $jaf->ref_name              = Arr::get($request, 'ref_name');
        $jaf->ref_contact_number    = Arr::get($request, 'ref_contact_number');
        $jaf->ref_relation          = Arr::get($request, 'ref_relation');
        $jaf->notice_period         = Arr::get($request, 'notice_period');
        $jaf->expected_ctc          = Arr::get($request, 'expected_ctc');
        $jaf->current_ctc           = Arr::get($request, 'current_ctc');
        $jaf->department            = Arr::get($request, 'department');
        $jaf->prefered_location     = Arr::get($request, 'prefered_location');
        $jaf->dob                   = Carbon::parse(Arr::get($request, 'dob'));

        if ($jaf->save()) {
            if ($request->has('education') && count($request->education) > 0) {
                foreach ($request->education as $key => $value) {
                    $education[] = [
                        'jaf_id'        => $jaf->id,
                        'education'     => $key,
                        'name_of_board' => $value['nameofboard'],
                        'passing_year'  => $value['passingyear'],
                        'percentage'    => $value['percentage'],
                    ];
                }

                if (!empty($education)) {
                    Jaf_education::insert($education);
                    unset($education);
                }
            }

            if ($request->has('work') && count($request->work) > 0) {
                $work = [];
                foreach ($request->work as $value) {
                    Arr::set($value, 'jaf_id', $jaf->id);
                    Arr::set($value, 'from', Carbon::parse($value['from'])->format('Y-m-d'));
                    Arr::set($value, 'to', Carbon::parse($value['to'])->format('Y-m-d'));
                    Arr::set($value, 'jaf_id', $jaf->id);
                    array_push($work, $value);
                }

                if (!empty($work)) {
                    Jaf_work::insert($work);
                    unset($work);
                }
            }

            if ($request->has('lang') && count($request->lang) > 0) {
                foreach ($request->lang as $key => $value) {
                    $language[] = [
                        'jaf_id'    => $jaf->id,
                        'language'  => $key,
                        'read'      => !empty($value['read']) ? $value['read'] : null,
                        'write'     => !empty($value['write']) ? $value['write'] : null,
                        'speak'     => !empty($value['speak']) ? $value['speak'] : null,
                    ];
                }

                if (!empty($language)) {
                    Jaf_language::insert($language);
                    unset($language);
                }
            }

            if ($request->has('tech') && count($request->tech) > 0) {
                foreach ($request->tech as $key => $value) {
                    $technology[] = [
                        'jaf_id'        => $jaf->id,
                        'technology'     => $key,
                        'status' => $value['status'],
                    ];
                }

                if (!empty($technology)) {
                    Jaf_technology::insert($technology);
                    unset($technology);
                }
            }

            return redirect('/')->with('status', 'Job application form submitted!');
        }

        return redirect('/')->with('error', 'Something wen wrong');
    }

    public function list()
    {
        $jaf = Jaf::paginate(2);
        return view('list', compact('jaf'));
    }

    public function view($id)
    {
        $jaf = Jaf::with([
            'educations',
            'works',
            'languages',
            'technologies',
        ])->find($id);
        return view('view', compact('jaf'));
    }

    public function edit($id)
    {
        $jaf = Jaf::with([
            'educations',
            'works',
            'languages',
            'technologies',
        ])->find($id);
        $languages = $jaf->languages->keyBy('language');
        $technologies = $jaf->technologies->keyBy('technology');

        return view('edit', compact('jaf', 'languages', 'technologies'));
    }

    public function update(StoreJafRequest $request, $id)
    {
        $jaf                        = Jaf::find($id);
        $jaf->first_name            = Arr::get($request, 'first_name');
        $jaf->last_name             = Arr::get($request, 'last_name');
        $jaf->email                 = Arr::get($request, 'email');
        $jaf->phone                 = Arr::get($request, 'phone');
        $jaf->gender                = Arr::get($request, 'gender', 1);
        $jaf->designation           = Arr::get($request, 'designation');
        $jaf->address_line1         = Arr::get($request, 'address_line1');
        $jaf->address_line2         = Arr::get($request, 'address_line1');
        $jaf->city                  = Arr::get($request, 'city');
        $jaf->state                 = Arr::get($request, 'state');
        $jaf->zip_code              = Arr::get($request, 'zip_code');
        $jaf->relationship_status   = Arr::get($request, 'relationship_status');
        $jaf->ref_name              = Arr::get($request, 'ref_name');
        $jaf->ref_contact_number    = Arr::get($request, 'ref_contact_number');
        $jaf->ref_relation          = Arr::get($request, 'ref_relation');
        $jaf->notice_period         = Arr::get($request, 'notice_period');
        $jaf->expected_ctc          = Arr::get($request, 'expected_ctc');
        $jaf->current_ctc           = Arr::get($request, 'current_ctc');
        $jaf->department            = Arr::get($request, 'department');
        $jaf->prefered_location     = Arr::get($request, 'prefered_location');
        $jaf->dob                   = Carbon::parse(Arr::get($request, 'dob'));

        if ($jaf->save()) {
            if ($request->has('education') && count($request->education) > 0) {
                Jaf_education::where('jaf_id', $id)
                    ->delete();
                foreach ($request->education as $key => $value) {
                    $education[] = [
                        'jaf_id'        => $jaf->id,
                        'education'     => $key,
                        'name_of_board' => $value['nameofboard'],
                        'passing_year'  => $value['passingyear'],
                        'percentage'    => $value['percentage'],
                    ];
                }

                if (!empty($education)) {
                    Jaf_education::insert($education);
                    unset($education);
                }
            }

            if ($request->has('work') && count($request->work) > 0) {
                Jaf_work::where('jaf_id', $id)
                    ->delete();
                $work = [];
                foreach ($request->work as $value) {
                    Arr::set($value, 'jaf_id', $jaf->id);
                    Arr::set($value, 'from', Carbon::parse($value['from'])->format('Y-m-d'));
                    Arr::set($value, 'to', Carbon::parse($value['to'])->format('Y-m-d'));
                    Arr::set($value, 'jaf_id', $jaf->id);
                    array_push($work, $value);
                }

                if (!empty($work)) {
                    Jaf_work::insert($work);
                    unset($work);
                }
            }

            if ($request->has('lang') && count($request->lang) > 0) {
                Jaf_language::where('jaf_id', $id)
                    ->delete();
                foreach ($request->lang as $key => $value) {
                    $language[] = [
                        'jaf_id'    => $jaf->id,
                        'language'  => $key,
                        'read'      => !empty($value['read']) ? $value['read'] : null,
                        'write'     => !empty($value['write']) ? $value['write'] : null,
                        'speak'     => !empty($value['speak']) ? $value['speak'] : null,
                    ];
                }

                if (!empty($language)) {
                    Jaf_language::insert($language);
                    unset($language);
                }
            }

            if ($request->has('tech') && count($request->tech) > 0) {
                Jaf_technology::where('jaf_id', $id)
                    ->delete();
                foreach ($request->tech as $key => $value) {
                    $technology[] = [
                        'jaf_id'        => $jaf->id,
                        'technology'     => $key,
                        'status' => $value['status'],
                    ];
                }

                if (!empty($technology)) {
                    Jaf_technology::insert($technology);
                    unset($technology);
                }
            }
            return redirect('/list')->with('status', 'Job application form updated!');
        }

        return redirect('/edit/'.$id)->with('error', 'Something wen wrong');
    }

    public function delete(Jaf $id)
    {
        $id->delete();

        return redirect('/list')->with('status', 'Job application form deleted!');
    }
}
