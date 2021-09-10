@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            {{ Form::open(array('url' => route('update',$jaf->id) )) }}

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
                                        <label>First Name</label>
                                        <input class="form-control" id="first_name" name="first_name" value="{{ $jaf->first_name }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $jaf->email }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Address 1</label>
                                        <input  class="form-control" id="address_line1" name="address_line1" value="{{ $jaf->address_line1 }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input  class="form-control" id="phone" name="phone" value="{{ $jaf->phone }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Zip code</label>
                                        <input  class="form-control" id="zip_code" id="zip_code" name="zip_code" value="{{ $jaf->zip_code }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Date of birth:</label>
                                        <input id="dob" name="dob" class="form-control datepicker" value="{{ $jaf->dob }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Gender</label>
                                        <div class="form-check">
                                            <div class="form-row">
                                                <div class="col-5">
                                                  <input class="form-check-input" type="radio" name="gender" value="1" {{ ($jaf->gender == 1) ? "checked" : ""}}>
                                                  <label class="form-check-label">Male</label>
                                                </div>
                                                <div class="col-5">
                                                  <input class="form-check-input" type="radio" name="gender" value="2" {{ ($jaf->gender == 2) ? "checked" : ""}}>
                                                  <label class="form-check-label">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input  class="form-control" id="last_name" name="last_name" value="{{ $jaf->last_name }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input  class="form-control" id="designation" name="designation" value="{{ $jaf->designation }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Address 2</label>
                                        <input  class="form-control" id="address_line2" name="address_line2" value="{{ $jaf->address_line2 }}">
                                    </div>

                                    <div class="form-group">
                                        <label>City</label>
                                        <input  class="form-control" id="city" name="city" value="{{ $jaf->city }}">
                                    </div>

                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="form-control" id="state" name="state">
                                            <option value="">-Select State-</option>
                                            <option value="Andhra Pradesh" {{ ( $jaf->state == "Andhra Pradesh") ? 'selected' : '' }}>Andhra Pradesh</option>
                                            <option value="Andaman and Nicobar Islands" {{ ( $jaf->state == "Andaman and Nicobar Islands") ? 'selected' : '' }}>Andaman and Nicobar Islands</option>
                                            <option value="Arunachal Pradesh" {{ ( $jaf->state == "Arunachal Pradesh") ? 'selected' : '' }}>Arunachal Pradesh</option>
                                            <option value="Assam" {{ ( $jaf->state == "Assam") ? 'selected' : '' }}>Assam</option>
                                            <option value="Bihar" {{ ( $jaf->state == "Bihar") ? 'selected' : '' }}>Bihar</option>
                                            <option value="Chandigarh" {{ ( $jaf->state == "Chandigarh") ? 'selected' : '' }}>Chandigarh</option>
                                            <option value="Chhattisgarh" {{ ( $jaf->state == "Chhattisgarh") ? 'selected' : '' }}>Chhattisgarh</option>
                                            <option value="Dadar and Nagar Haveli" {{ ( $jaf->state == "Dadar and Nagar Haveli") ? 'selected' : '' }}>Dadar and Nagar Haveli</option>
                                            <option value="Daman and Diu" {{ ( $jaf->state == "Daman and Diu") ? 'selected' : '' }}>Daman and Diu</option>
                                            <option value="Delhi" {{ ( $jaf->state == "Delhi") ? 'selected' : '' }}>Delhi</option>
                                            <option value="Lakshadweep" {{ ( $jaf->state == "Lakshadweep") ? 'selected' : '' }}>Lakshadweep</option>
                                            <option value="Puducherry" {{ ( $jaf->state == "Puducherry") ? 'selected' : '' }}>Puducherry</option>
                                            <option value="Goa" {{ ( $jaf->state == "Goa") ? 'selected' : '' }}>Goa</option>
                                            <option value="Gujarat" {{ ( $jaf->state == "Gujarat") ? 'selected' : '' }}>Gujarat</option>
                                            <option value="Haryana" {{ ( $jaf->state == "Haryana") ? 'selected' : '' }}>Haryana</option>
                                            <option value="Himachal Pradesh" {{ ( $jaf->state == "Himachal Pradesh") ? 'selected' : '' }}>Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir" {{ ( $jaf->state == "Jammu and Kashmir") ? 'selected' : '' }}>Jammu and Kashmir</option>
                                            <option value="Jharkhand" {{ ( $jaf->state == "Jharkhand") ? 'selected' : '' }}>Jharkhand</option>
                                            <option value="Karnataka" {{ ( $jaf->state == "Karnataka") ? 'selected' : '' }}>Karnataka</option>
                                            <option value="Kerala" {{ ( $jaf->state == "Kerala") ? 'selected' : '' }}>Kerala</option>
                                            <option value="Madhya Pradesh" {{ ( $jaf->state == "Madhya Pradesh") ? 'selected' : '' }}>Madhya Pradesh</option>
                                            <option value="Maharashtra" {{ ( $jaf->state == "Maharashtra") ? 'selected' : '' }}>Maharashtra</option>
                                            <option value="Manipur" {{ ( $jaf->state == "Manipur") ? 'selected' : '' }}>Manipur</option>
                                            <option value="Meghalaya" {{ ( $jaf->state == "Meghalaya") ? 'selected' : '' }}>Meghalaya</option>
                                            <option value="Mizoram" {{ ( $jaf->state == "Mizoram") ? 'selected' : '' }}>Mizoram</option>
                                            <option value="Nagaland" {{ ( $jaf->state == "Nagaland") ? 'selected' : '' }}>Nagaland</option>
                                            <option value="Odisha" {{ ( $jaf->state == "Odisha") ? 'selected' : '' }}>Odisha</option>
                                            <option value="Punjab" {{ ( $jaf->state == "Punjab") ? 'selected' : '' }}>Punjab</option>
                                            <option value="Rajasthan" {{ ( $jaf->state == "Rajasthan") ? 'selected' : '' }}>Rajasthan</option>
                                            <option value="Sikkim" {{ ( $jaf->state == "Sikkim") ? 'selected' : '' }}>Sikkim</option>
                                            <option value="Tamil Nadu" {{ ( $jaf->state == "Tamil Nadu") ? 'selected' : '' }}>Tamil Nadu</option>
                                            <option value="Telangana" {{ ( $jaf->state == "Telangana") ? 'selected' : '' }}>Telangana</option>
                                            <option value="Tripura" {{ ( $jaf->state == "Tripura") ? 'selected' : '' }}>Tripura</option>
                                            <option value="Uttar Pradesh" {{ ( $jaf->state == "Uttar Pradesh") ? 'selected' : '' }}>Uttar Pradesh</option>
                                            <option value="Uttarakhand" {{ ( $jaf->state == "Uttarakhand") ? 'selected' : '' }}>Uttarakhand</option>
                                            <option value="West Bengal" {{ ( $jaf->state == "West Bengal") ? 'selected' : '' }}>West Bengal</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Relationship Status</label>
                                        <select class="form-control" id="relationship_status" name="relationship_status">
                                            <option value="">-Select Marital Status-</option>
                                            <option value="Single" {{ ( $jaf->relationship_status == "Single") ? 'selected' : '' }}>Single</option>
                                            <option value="Married" {{ ( $jaf->relationship_status == "Married") ? 'selected' : '' }}>Married</option>
                                            <option value="Widowed" {{ ( $jaf->relationship_status == "Widowed") ? 'selected' : '' }}>Widowed</option>
                                            <option value="Separated" {{ ( $jaf->relationship_status == "Separated") ? 'selected' : '' }}>Separated</option>
                                            <option value="Divorced" {{ ( $jaf->relationship_status == "Divorced") ? 'selected' : '' }}>Divorced</option>
                                        </select>
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
                                            <input  class="form-control" id="ssc_nameofboard" name="education[{{$education->education}}][nameofboard]" value="{{$education->name_of_board}}">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Passing year</label>
                                            <input  class="form-control yearpicker" id="ssc_passingyear" name="education[{{$education->education}}][passingyear]" value="{{$education->passing_year}}">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Percentage</label>
                                            <input  class="form-control" id="ssc_percentage" name="education[{{$education->education}}][percentage]" value="{{$education->percentage}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row"></div>
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
                                    <div class="form-row element" id='div_{{$loop->iteration}}'>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input  class="form-control" id="work_company_name" name="work[{{$loop->iteration}}][company_name]" value="{{$work->company_name}}">
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <label>Designation</label>
                                                <input  class="form-control" id="work_designation" name="work[{{$loop->iteration}}][designation]" value="{{$work->designation}}">
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <label>From</label>
                                                <input  class="form-control datepicker" id="work_from_0" name="work[{{$loop->iteration}}][from]" value="{{$work->from}}">
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <label>To</label>
                                                <input  class="form-control datepicker" id="work_to_0" name="work[{{$loop->iteration}}][to]" value="{{$work->to}}">
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                @if ($loop->iteration == 1)
                                                    <input type="button" class='form-control btn btn-primary addwork' value="Add Experience">
                                                @else
                                                    <input type="button" class="form-control btn btn-danger removework" id="remove_{{$loop->iteration}}" value="Delete">
                                                @endif
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
                            <div class="form-row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[hindi]" id="lang_hindi" {{($languages->has('hindi')) ? 'checked': ''}}>
                                          <label class="form-check-label">Hindi</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[hindi][read]" id="lang_hindi_read" {{($languages->has('hindi') && $languages->get('hindi')->read == 'on') ? 'checked': ''}} {{($languages->has('hindi')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Read</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[hindi][write]" id="lang_hindi_write" {{($languages->has('hindi') && $languages->get('hindi')->write == 'on') ? 'checked': ''}} {{($languages->has('hindi')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Write</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[hindi][speak]" id="lang_hindi_speak" {{($languages->has('hindi') && $languages->get('hindi')->speak == 'on') ? 'checked': ''}} {{($languages->has('hindi')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Speak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row"></div>

                            <div class="form-row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[english]" id="lang_english" {{($languages->has('english')) ? 'checked': ''}}>
                                          <label class="form-check-label">English</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[english][read]" id="lang_english_read" {{($languages->has('english') && $languages->get('english')->read == 'on') ? 'checked': ''}} {{($languages->has('english')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Read</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[english][write]" id="lang_english_write" {{($languages->has('english') && $languages->get('english')->write == 'on') ? 'checked': ''}} {{($languages->has('english')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Write</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[english][speak]" id="lang_english_speak" {{($languages->has('english') &&$languages->get('english')->speak == 'on') ? 'checked': ''}} {{($languages->has('english')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Speak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row"></div>

                            <div class="form-row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[gujarati]" id="lang_gujarati" {{($languages->has('gujarati')) ? 'checked': ''}}>
                                          <label class="form-check-label">Gujarati</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[gujarati][read]" id="lang_gujarati_read" {{($languages->has('gujarati') && $languages->get('gujarati')->read == 'on') ? 'checked': ''}} {{($languages->has('gujarati')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Read</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[gujarati][write]" id="lang_gujarati_write" {{($languages->has('gujarati') && $languages->get('gujarati')->write == 'on') ? 'checked': ''}} {{($languages->has('gujarati')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Write</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[gujarati][speak]" id="lang_gujarati_speak" {{($languages->has('gujarati') && $languages->get('gujarati')->speak == 'on') ? 'checked': ''}} {{($languages->has('gujarati')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Speak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-warning mb-3">
                    <div class="card-header" id="technologies" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                        {{ __('Technologies You Known') }}
                    </div>

                    <div id="collapseFive" class="collapse" aria-labelledby="technologies" data-parent="#accordion">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="tech[php]" id="tech_php" {{($technologies->has('php')) ? 'checked': ''}}>
                                          <label class="form-check-label">PHP</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[php][status]" value="beginner" id="tech_php_beginner" {{($technologies->has('php') && $technologies->get('php')->status == 'beginner') ? 'checked': ''}} {{($technologies->has('php')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Beginner</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[php][status]" value="mediator" id="tech_php_mediator" {{($technologies->has('php') && $technologies->get('php')->status == 'mediator') ? 'checked': ''}} {{($technologies->has('php')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Mediator</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[php][status]" value="expert" id="tech_php_expert" {{($technologies->has('php') && $technologies->get('php')->status == 'expert') ? 'checked': ''}} {{($technologies->has('php')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Expert</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row"></div>

                            <div class="form-row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="tech[mysql]" id="tech_mysql" {{($technologies->has('mysql')) ? 'checked': ''}}>
                                          <label class="form-check-label">Mysql</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[mysql][status]" value="beginner" id="tech_mysql_beginner" {{($technologies->has('mysql') && $technologies->get('mysql')->status == 'beginner') ? 'checked': ''}} {{($technologies->has('mysql')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Beginner</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[mysql][status]" value="mediator" id="tech_mysql_mediator" {{($technologies->has('mysql') && $technologies->get('mysql')->status == 'mediator') ? 'checked': ''}} {{($technologies->has('mysql')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Mediator</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[mysql][status]" value="expert" id="tech_mysql_expert" {{($technologies->has('mysql') && $technologies->get('mysql')->status == 'expert') ? 'checked': ''}} {{($technologies->has('mysql')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Expert</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row"></div>

                            <div class="form-row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="tech[laravel]" id="tech_laravel" {{($technologies->has('laravel')) ? 'checked': ''}}>
                                          <label class="form-check-label">Laravel</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[laravel][status]" value="beginner" id="tech_laravel_beginner" {{($technologies->has('laravel') && $technologies->get('laravel')->status == 'beginner') ? 'checked': ''}} {{($technologies->has('laravel')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Beginner</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[laravel][status]" value="mediator" id="tech_laravel_mediator" {{($technologies->has('laravel') && $technologies->get('laravel')->status == 'mediator') ? 'checked': ''}} {{($technologies->has('laravel')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Mediator</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[laravel][status]" value="expert" id="tech_laravel_expert" {{($technologies->has('laravel') && $technologies->get('laravel')->status == 'expert') ? 'checked': ''}} {{($technologies->has('laravel')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Expert</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row"></div>

                            <div class="form-row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="tech[oracle]" id="tech_oracle" {{($technologies->has('oracle')) ? 'checked': ''}}>
                                          <label class="form-check-label">Oracle</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[oracle][status]" value="beginner" id="tech_oracle_beginner" {{($technologies->has('oracle') && $technologies->get('oracle')->status == 'beginner') ? 'checked': ''}} {{($technologies->has('oracle')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Beginner</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[oracle][status]" value="mediator" id="tech_oracle_mediator" {{($technologies->has('oracle') && $technologies->get('oracle')->status == 'mediator') ? 'checked': ''}} {{($technologies->has('oracle')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Mediator</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[oracle][status]" value="expert" id="tech_oracle_expert" {{($technologies->has('oracle') && $technologies->get('oracle')->status == 'expert') ? 'checked': ''}} {{($technologies->has('oracle')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Expert</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        <input  class="form-control" id="ref_name" name="ref_name" value="{{ $jaf->ref_name }}">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Contact number</label>
                                        <input  class="form-control" id="ref_contact_number" name="ref_contact_number" value="{{ $jaf->ref_contact_number }}">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Relation</label>
                                        <input  class="form-control" id="ref_relation" name="ref_relation" value="{{ $jaf->ref_relation }}">
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
                                            <select multiple class="form-control" name="prefered_location[]">
                                                <option value="">-Select Prefered location-</option>
                                                <option value="Andhra Pradesh" {{ (in_array('Andhra Pradesh', $jaf->prefered_location)) ? 'selected':'' }}>Andhra Pradesh</option>
                                                <option value="Andaman and Nicobar Islands" {{ (in_array('Andaman and Nicobar Islands', $jaf->prefered_location)) ? 'selected':'' }}>Andaman and Nicobar Islands</option>
                                                <option value="Arunachal Pradesh" {{ (in_array('Arunachal Pradesh', $jaf->prefered_location)) ? 'selected':'' }}>Arunachal Pradesh</option>
                                                <option value="Assam" {{ (in_array('Assam', $jaf->prefered_location)) ? 'selected':'' }}>Assam</option>
                                                <option value="Bihar" {{ (in_array('Bihar', $jaf->prefered_location)) ? 'selected':'' }}>Bihar</option>
                                                <option value="Chandigarh" {{ (in_array('Chandigarh', $jaf->prefered_location)) ? 'selected':'' }}>Chandigarh</option>
                                                <option value="Chhattisgarh" {{ (in_array('Chhattisgarh', $jaf->prefered_location)) ? 'selected':'' }}>Chhattisgarh</option>
                                                <option value="Dadar and Nagar Haveli" {{ (in_array('Dadar and Nagar Haveli', $jaf->prefered_location)) ? 'selected':'' }}>Dadar and Nagar Haveli</option>
                                                <option value="Daman and Diu" {{ (in_array('Daman and Diu', $jaf->prefered_location)) ? 'selected':'' }}>Daman and Diu</option>
                                                <option value="Delhi" {{ (in_array('Delhi', $jaf->prefered_location)) ? 'selected':'' }}>Delhi</option>
                                                <option value="Lakshadweep" {{ (in_array('Lakshadweep', $jaf->prefered_location)) ? 'selected':'' }}>Lakshadweep</option>
                                                <option value="Puducherry" {{ (in_array('Puducherry', $jaf->prefered_location)) ? 'selected':'' }}>Puducherry</option>
                                                <option value="Goa" {{ (in_array('Goa', $jaf->prefered_location)) ? 'selected':'' }}>Goa</option>
                                                <option value="Gujarat" {{ (in_array('Gujarat', $jaf->prefered_location)) ? 'selected':'' }}>Gujarat</option>
                                                <option value="Haryana" {{ (in_array('Haryana', $jaf->prefered_location)) ? 'selected':'' }}>Haryana</option>
                                                <option value="Himachal Pradesh" {{ (in_array('Himachal Pradesh', $jaf->prefered_location)) ? 'selected':'' }}>Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir" {{ (in_array('Jammu and Kashmir', $jaf->prefered_location)) ? 'selected':'' }}>Jammu and Kashmir</option>
                                                <option value="Jharkhand" {{ (in_array('Jharkhand', $jaf->prefered_location)) ? 'selected':'' }}>Jharkhand</option>
                                                <option value="Karnataka" {{ (in_array('Karnataka', $jaf->prefered_location)) ? 'selected':'' }}>Karnataka</option>
                                                <option value="Kerala" {{ (in_array('Kerala', $jaf->prefered_location)) ? 'selected':'' }}>Kerala</option>
                                                <option value="Madhya Pradesh" {{ (in_array('Madhya Pradesh', $jaf->prefered_location)) ? 'selected':'' }}>Madhya Pradesh</option>
                                                <option value="Maharashtra" {{ (in_array('Maharashtra', $jaf->prefered_location)) ? 'selected':'' }}>Maharashtra</option>
                                                <option value="Manipur" {{ (in_array('Manipur', $jaf->prefered_location)) ? 'selected':'' }}>Manipur</option>
                                                <option value="Meghalaya" {{ (in_array('Meghalaya', $jaf->prefered_location)) ? 'selected':'' }}>Meghalaya</option>
                                                <option value="Mizoram" {{ (in_array('Mizoram', $jaf->prefered_location)) ? 'selected':'' }}>Mizoram</option>
                                                <option value="Nagaland" {{ (in_array('Nagaland', $jaf->prefered_location)) ? 'selected':'' }}>Nagaland</option>
                                                <option value="Odisha" {{ (in_array('Odisha', $jaf->prefered_location)) ? 'selected':'' }}>Odisha</option>
                                                <option value="Punjab" {{ (in_array('Punjab', $jaf->prefered_location)) ? 'selected':'' }}>Punjab</option>
                                                <option value="Rajasthan" {{ (in_array('Rajasthan', $jaf->prefered_location)) ? 'selected':'' }}>Rajasthan</option>
                                                <option value="Sikkim" {{ (in_array('Sikkim', $jaf->prefered_location)) ? 'selected':'' }}>Sikkim</option>
                                                <option value="Tamil Nadu" {{ (in_array('Tamil Nadu', $jaf->prefered_location)) ? 'selected':'' }}>Tamil Nadu</option>
                                                <option value="Telangana" {{ (in_array('Telangana', $jaf->prefered_location)) ? 'selected':'' }}>Telangana</option>
                                                <option value="Tripura" {{ (in_array('Tripura', $jaf->prefered_location)) ? 'selected':'' }}>Tripura</option>
                                                <option value="Uttar Pradesh" {{ (in_array('Uttar Pradesh', $jaf->prefered_location)) ? 'selected':'' }}>Uttar Pradesh</option>
                                                <option value="Uttarakhand" {{ (in_array('Uttarakhand', $jaf->prefered_location)) ? 'selected':'' }}>Uttarakhand</option>
                                                <option value="West Bengal" {{ (in_array('West Bengal', $jaf->prefered_location)) ? 'selected':'' }}>West Bengal</option>
                                            </select>
                                      </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Notice perriod</label>
                                        <input  class="form-control" id="notice_period" name="notice_period" value="{{ $jaf->notice_period }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Expected CTC</label>
                                        <input  class="form-control" id="expected_ctc" name="expected_ctc" value="{{ $jaf->expected_ctc }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Current CTC</label>
                                        <input  class="form-control" id="current_ctc" name="current_ctc" value="{{ $jaf->current_ctc }}">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Department</label>
                                            <select class="form-control" name="department">
                                                <option value="">-Select Department-</option>
                                                <option value="PHP" {{ ( $jaf->department == "PHP") ? 'selected' : '' }}>PHP</option>
                                                <option value="Design" {{ ($jaf->department == "Design") ? 'selected' : '' }}>Design</option>
                                                <option value="QA" {{ ( $jaf->department == "QA") ? 'selected' : '' }}>QA</option>
                                            </select>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input type="submit" class="btn btn-primary col-md-12 text-center" id="">

            {{ Form::close() }}

        </div>
    </div>
</div>
@endsection