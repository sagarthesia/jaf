@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="{{route('edit', ['id' => $jaf->id])}}" class="btn btn-success col-md-12 text-center mb-3">Click to edit</a>
            <div id="accordion">
                <div class="card border-primary mb-3">
                    <div class="card-header" id="basicdetails" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        {{ __('Basic Details') }}
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="basicdetails" data-parent="#accordion">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>First Name:</label>
                                        <label class="font-weight-bold">{{$jaf->first_name}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <label class="font-weight-bold">{{$jaf->last_name}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Address 1</label>
                                        <label class="font-weight-bold">{{$jaf->address_line1}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <label class="font-weight-bold">{{$jaf->phone}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Zip code</label>
                                        <label class="font-weight-bold">{{$jaf->zip_code}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Date of birth:</label>
                                        <label class="font-weight-bold">{{$jaf->dob}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Gender</label>
                                        <label class="font-weight-bold">
                                            @if($jaf->gender == 1)
                                                Male
                                            @else
                                                Female
                                            @endif
                                        </label>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <label class="font-weight-bold">{{$jaf->last_name}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Designation</label>
                                        <label class="font-weight-bold">{{$jaf->designation}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Address 2</label>
                                        <label class="font-weight-bold">{{$jaf->address_line2}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>City</label>
                                        <label class="font-weight-bold">{{$jaf->city}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>State</label>
                                        <label class="font-weight-bold">{{$jaf->state}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Relationship Status</label>
                                        <label class="font-weight-bold">{{$jaf->relationship_status}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-secondary mb-3">
                    <div class="card-header" id="educationdetails" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        {{ __('Education Details') }}
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="educationdetails" data-parent="#accordion">
                        <div class="card-body">
                            @foreach ($jaf->educations as $education)
                                <div class="form-row">
                                    <label>{{$education->education}}</label>
                                </div>
                                <div class="form-row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Name of board</label>
                                            <label class="font-weight-bold">{{$education->name_of_board}}</label>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Passing year</label>
                                            <label class="font-weight-bold">{{$education->passing_year}}</label>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Percentage</label>
                                            <label class="font-weight-bold">{{$education->percentage}}</label>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="card border-success mb-3">
                    <div class="card-header" id="workexperience" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        {{ __('Work Experience') }}
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="workexperience" data-parent="#accordion">
                        <div class="card-body">
                            @foreach ($jaf->works as $work)
                                <div class="container">
                                    <div class="form-row element" id='div_0'>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <label class="font-weight-bold">{{$work->company_name}}</label>
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <label>Designation</label>
                                                <label class="font-weight-bold">{{$work->designation}}</label>
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <label>From</label>
                                                <label class="font-weight-bold">{{$work->from}}</label>
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <label>To</label>
                                                <label class="font-weight-bold">{{$work->to}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="card border-danger mb-3">
                    <div class="card-header" id="languageknown" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        {{ __('Language Known') }}
                    </div>

                    <div id="collapseFour" class="collapse" aria-labelledby="languageknown" data-parent="#accordion">
                        <div class="card-body">
                            @foreach ($jaf->languages as $language)
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="form-check">
                                              <label class="form-check-label">{{$language->language}}</label>
                                              <label class="font-weight-bold">
                                                @if(!is_null($language->read))
                                                    read
                                                @endif
                                                @if(!is_null($language->write))
                                                    write
                                                @endif
                                                @if(!is_null($language->speak))
                                                    speak
                                                @endif
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="card border-warning mb-3">
                    <div class="card-header" id="technologies" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                        {{ __('Technologies You Known') }}
                    </div>

                    <div id="collapseFive" class="collapse" aria-labelledby="technologies" data-parent="#accordion">
                        <div class="card-body">
                            @foreach ($jaf->technologies as $technology)
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="form-check">
                                              <label class="form-check-label">{{$technology->technology}}</label>
                                              <label class="font-weight-bold">{{$technology->status}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="card border-info mb-3">
                    <div class="card-header" id="refrencecontact" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                        {{ __('Reference Contact') }}
                    </div>

                    <div id="collapseSix" class="collapse" aria-labelledby="refrencecontact" data-parent="#accordion">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <label class="font-weight-bold">{{$jaf->ref_name}}</label>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Contact number</label>
                                        <label class="font-weight-bold">{{$jaf->ref_contact_number}}</label>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Relation</label>
                                        <label class="font-weight-bold">{{$jaf->ref_relation}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-dark mb-3">
                    <div class="card-header" id="preferences" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                        {{ __('Preferences') }}
                    </div>

                    <div id="collapseSeven" class="collapse" aria-labelledby="preferences" data-parent="#accordion">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Prefered location</label>
                                            <label class="font-weight-bold">
                                                @if(!is_null($jaf->prefered_location))
                                                    {{ implode(', ', $jaf->prefered_location)}}
                                                @endif
                                            </label>
                                      </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Notice perriod</label>
                                        <label class="font-weight-bold">{{$jaf->notice_period}}</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Expected CTC</label>
                                        <label class="font-weight-bold">{{$jaf->expected_ctc}}</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Current CTC</label>
                                        <label class="font-weight-bold">{{$jaf->current_ctc}}</label>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Department</label>
                                            <label class="font-weight-bold">{{$jaf->department}}</label>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
