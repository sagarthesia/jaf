@extends('layouts.front')

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
            {{ Form::open(array('url' => '/store')) }}

            <div id="accordion">
                <div class="card border-primary mb-3">
                    <div class="card-header" id="basicdetails" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        {{ __('Basic Details') }}
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="basicdetails" data-parent="#accordion">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Address 1</label>
                                        <input  class="form-control" id="address_line1" name="address_line1" value="{{ old('address_line1') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input  class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Zip code</label>
                                        <input  class="form-control" id="zip_code" id="zip_code" name="zip_code" value="{{ old('zip_code') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Date of birth:</label>
                                        <input id="dob" name="dob" class="form-control datepicker" value="{{ old('dob') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Gender</label>
                                        <div class="form-check">
                                            <div class="form-row">
                                                <div class="col-5">
                                                  <input class="form-check-input" type="radio" name="gender" value="1" {{ old("gender") ? "checked" : ""}}>
                                                  <label class="form-check-label">Male</label>
                                                </div>
                                                <div class="col-5">
                                                  <input class="form-check-input" type="radio" name="gender" value="2" {{ old("gender") == 2 ? "checked" : ""}}>
                                                  <label class="form-check-label">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input  class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input  class="form-control" id="designation" name="designation" value="{{ old('designation') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Address 2</label>
                                        <input  class="form-control" id="address_line2" name="address_line2" value="{{ old('address_line2') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>City</label>
                                        <input  class="form-control" id="city" name="city" value="{{ old('city') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="form-control" id="state" name="state">
                                            <option value="">-Select State-</option>
                                            <option value="Andhra Pradesh" {{ ( old('state') == "Andhra Pradesh") ? 'selected' : '' }}>Andhra Pradesh</option>
                                            <option value="Andaman and Nicobar Islands" {{ ( old('state') == "Andaman and Nicobar Islands") ? 'selected' : '' }}>Andaman and Nicobar Islands</option>
                                            <option value="Arunachal Pradesh" {{ ( old('state') == "Arunachal Pradesh") ? 'selected' : '' }}>Arunachal Pradesh</option>
                                            <option value="Assam" {{ ( old('state') == "Assam") ? 'selected' : '' }}>Assam</option>
                                            <option value="Bihar" {{ ( old('state') == "Bihar") ? 'selected' : '' }}>Bihar</option>
                                            <option value="Chandigarh" {{ ( old('state') == "Chandigarh") ? 'selected' : '' }}>Chandigarh</option>
                                            <option value="Chhattisgarh" {{ ( old('state') == "Chhattisgarh") ? 'selected' : '' }}>Chhattisgarh</option>
                                            <option value="Dadar and Nagar Haveli" {{ ( old('state') == "Dadar and Nagar Haveli") ? 'selected' : '' }}>Dadar and Nagar Haveli</option>
                                            <option value="Daman and Diu" {{ ( old('state') == "Daman and Diu") ? 'selected' : '' }}>Daman and Diu</option>
                                            <option value="Delhi" {{ ( old('state') == "Delhi") ? 'selected' : '' }}>Delhi</option>
                                            <option value="Lakshadweep" {{ ( old('state') == "Lakshadweep") ? 'selected' : '' }}>Lakshadweep</option>
                                            <option value="Puducherry" {{ ( old('state') == "Puducherry") ? 'selected' : '' }}>Puducherry</option>
                                            <option value="Goa" {{ ( old('state') == "Goa") ? 'selected' : '' }}>Goa</option>
                                            <option value="Gujarat" {{ ( old('state') == "Gujarat") ? 'selected' : '' }}>Gujarat</option>
                                            <option value="Haryana" {{ ( old('state') == "Haryana") ? 'selected' : '' }}>Haryana</option>
                                            <option value="Himachal Pradesh" {{ ( old('state') == "Himachal Pradesh") ? 'selected' : '' }}>Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir" {{ ( old('state') == "Jammu and Kashmir") ? 'selected' : '' }}>Jammu and Kashmir</option>
                                            <option value="Jharkhand" {{ ( old('state') == "Jharkhand") ? 'selected' : '' }}>Jharkhand</option>
                                            <option value="Karnataka" {{ ( old('state') == "Karnataka") ? 'selected' : '' }}>Karnataka</option>
                                            <option value="Kerala" {{ ( old('state') == "Kerala") ? 'selected' : '' }}>Kerala</option>
                                            <option value="Madhya Pradesh" {{ ( old('state') == "Madhya Pradesh") ? 'selected' : '' }}>Madhya Pradesh</option>
                                            <option value="Maharashtra" {{ ( old('state') == "Maharashtra") ? 'selected' : '' }}>Maharashtra</option>
                                            <option value="Manipur" {{ ( old('state') == "Manipur") ? 'selected' : '' }}>Manipur</option>
                                            <option value="Meghalaya" {{ ( old('state') == "Meghalaya") ? 'selected' : '' }}>Meghalaya</option>
                                            <option value="Mizoram" {{ ( old('state') == "Mizoram") ? 'selected' : '' }}>Mizoram</option>
                                            <option value="Nagaland" {{ ( old('state') == "Nagaland") ? 'selected' : '' }}>Nagaland</option>
                                            <option value="Odisha" {{ ( old('state') == "Odisha") ? 'selected' : '' }}>Odisha</option>
                                            <option value="Punjab" {{ ( old('state') == "Punjab") ? 'selected' : '' }}>Punjab</option>
                                            <option value="Rajasthan" {{ ( old('state') == "Rajasthan") ? 'selected' : '' }}>Rajasthan</option>
                                            <option value="Sikkim" {{ ( old('state') == "Sikkim") ? 'selected' : '' }}>Sikkim</option>
                                            <option value="Tamil Nadu" {{ ( old('state') == "Tamil Nadu") ? 'selected' : '' }}>Tamil Nadu</option>
                                            <option value="Telangana" {{ ( old('state') == "Telangana") ? 'selected' : '' }}>Telangana</option>
                                            <option value="Tripura" {{ ( old('state') == "Tripura") ? 'selected' : '' }}>Tripura</option>
                                            <option value="Uttar Pradesh" {{ ( old('state') == "Uttar Pradesh") ? 'selected' : '' }}>Uttar Pradesh</option>
                                            <option value="Uttarakhand" {{ ( old('state') == "Uttarakhand") ? 'selected' : '' }}>Uttarakhand</option>
                                            <option value="West Bengal" {{ ( old('state') == "West Bengal") ? 'selected' : '' }}>West Bengal</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Relationship Status</label>
                                        <select class="form-control" id="relationship_status" name="relationship_status">
                                            <option value="">-Select Marital Status-</option>
                                            <option value="Single" {{ ( old('relationship_status') == "Single") ? 'selected' : '' }}>Single</option>
                                            <option value="Married" {{ ( old('relationship_status') == "Married") ? 'selected' : '' }}>Married</option>
                                            <option value="Widowed" {{ ( old('relationship_status') == "Widowed") ? 'selected' : '' }}>Widowed</option>
                                            <option value="Separated" {{ ( old('relationship_status') == "Separated") ? 'selected' : '' }}>Separated</option>
                                            <option value="Divorced" {{ ( old('relationship_status') == "Divorced") ? 'selected' : '' }}>Divorced</option>
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
                            <div class="form-row">
                                <label>SSC</label>
                            </div>
                            <div class="form-row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Name of board</label>
                                        <input  class="form-control" id="ssc_nameofboard" name="education[ssc][nameofboard]" value="{{ old('education.ssc.nameofboard') }}">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Passing year</label>
                                        <input  class="form-control yearpicker" id="ssc_passingyear" name="education[ssc][passingyear]" value="{{ old('education.ssc.passingyear') }}">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Percentage</label>
                                        <input  class="form-control" id="ssc_percentage" name="education[ssc][percentage]" value="{{ old('education.ssc.percentage') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row"></div>

                            <div class="form-row">
                                <label>HSC/Diploma</label>
                            </div>
                            <div class="form-row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Name of board</label>
                                        <input  class="form-control" id="hsc_nameofboard" name="education[hsc][nameofboard]" value="{{ old('education.hsc.nameofboard') }}">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Passing year</label>
                                        <input  class="form-control yearpicker" id="hsc_passingyear" name="education[hsc][passingyear]" value="{{ old('education.hsc.passingyear') }}">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Percentage</label>
                                        <input  class="form-control" id="hsc_percentage" name="education[hsc][percentage]" value="{{ old('education.hsc.percentage') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row"></div>

                            <div class="form-row">
                                <label>Bachelor</label>
                            </div>
                            <div class="form-row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Name of board</label>
                                        <input  class="form-control" id="bac_nameofboard" name="education[bac][nameofboard]" value="{{ old('education.bac.nameofboard') }}">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Passing year</label>
                                        <input  class="form-control yearpicker" id="bac_passingyear" name="education[bac][passingyear]" value="{{ old('education.bac.passingyear') }}">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Percentage</label>
                                        <input  class="form-control" id="bac_percentage" name="education[bac][percentage]" value="{{ old('education.bac.percentage') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row"></div>

                            <div class="form-row">
                                <label>Master</label>
                            </div>
                            <div class="form-row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Name of board</label>
                                        <input  class="form-control" id="mas_nameofboard" name="education[mas][nameofboard]" value="{{ old('education.mas.nameofboard') }}">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Passing year</label>
                                        <input  class="form-control yearpicker" id="mas_passingyear" name="education[mas][passingyear]" value="{{ old('education.mas.passingyear') }}">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Percentage</label>
                                        <input  class="form-control" id="mas_percentage" name="education[mas][percentage]" value="{{ old('education.mas.percentage') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-success mb-3">
                    <div class="card-header" id="workexperience" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        {{ __('Work Experience') }}
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="workexperience" data-parent="#accordion">
                        <div class="card-body">
                            <div class="container">
                                <div class="form-row element" id='div_0'>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input  class="form-control" id="work_company_name" name="work[0][company_name]" value="{{ old('work.0.company_name') }}">
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input  class="form-control" id="work_designation" name="work[0][designation]" value="{{ old('work.0.designation') }}">
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="form-group">
                                            <label>From</label>
                                            <input  class="form-control datepicker" id="work_from_0" name="work[0][from]" value="{{ old('work.0.from') }}">
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="form-group">
                                            <label>To</label>
                                            <input  class="form-control datepicker" id="work_to_0" name="work[0][to]" value="{{ old('work.0.to') }}">
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <input type="button" class='form-control btn btn-primary addwork' value="Add Experience">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                          <input class="form-check-input" type="checkbox" name="lang[hindi]" id="lang_hindi" {{(old('lang.hindi')) ? 'checked': ''}}>
                                          <label class="form-check-label">Hindi</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[hindi][read]" id="lang_hindi_read" {{(old('lang.hindi.read')) ? 'checked': ''}} {{(old('lang.hindi')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Read</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[hindi][write]" id="lang_hindi_write" {{(old('lang.hindi.write')) ? 'checked': ''}} {{(old('lang.hindi')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Write</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[hindi][speak]" id="lang_hindi_speak" {{(old('lang.hindi.speak')) ? 'checked': ''}} {{(old('lang.hindi')) ? '': 'disabled'}}>
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
                                          <input class="form-check-input" type="checkbox" name="lang[english]" id="lang_english" {{(old('lang.english')) ? 'checked': ''}}>
                                          <label class="form-check-label">English</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[english][read]" id="lang_english_read" {{(old('lang.english.read')) ? 'checked': ''}} {{(old('lang.english')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Read</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[english][write]" id="lang_english_write" {{(old('lang.english.write')) ? 'checked': ''}} {{(old('lang.english')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Write</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[english][speak]" id="lang_english_speak" {{(old('lang.english.write')) ? 'checked': ''}} {{(old('lang.english')) ? '': 'disabled'}}>
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
                                          <input class="form-check-input" type="checkbox" name="lang[gujarati]" id="lang_gujarati" {{(old('lang.gujarati')) ? 'checked': ''}}>
                                          <label class="form-check-label">Gujarati</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[gujarati][read]" id="lang_gujarati_read" {{(old('lang.gujarati.read')) ? 'checked': ''}} {{(old('lang.gujarati')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Read</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[gujarati][write]" id="lang_gujarati_write" {{(old('lang.gujarati.write')) ? 'checked': ''}} {{(old('lang.gujarati')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Write</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="lang[gujarati][speak]" id="lang_gujarati_speak" {{(old('lang.gujarati.speak')) ? 'checked': ''}} {{(old('lang.gujarati')) ? '': 'disabled'}}>
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
                                          <input class="form-check-input" type="checkbox" name="tech[php]" id="tech_php" {{(old('tech.php')) ? 'checked': ''}}>
                                          <label class="form-check-label">PHP</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[php][status]" value="beginner" id="tech_php_beginner" {{(old('tech.php.status') =='beginner') ? 'checked': ''}} {{(old('tech.php')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Beginner</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[php][status]" value="mediator" id="tech_php_mediator" {{(old('tech.php.status') =='mediator') ? 'checked': ''}} {{(old('tech.php')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Mediator</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[php][status]" value="expert" id="tech_php_expert" {{(old('tech.php.status') =='expert') ? 'checked': ''}} {{(old('tech.php')) ? '': 'disabled'}}>
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
                                          <input class="form-check-input" type="checkbox" name="tech[mysql]" id="tech_mysql" {{(old('tech.mysql')) ? 'checked': ''}}>
                                          <label class="form-check-label">Mysql</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[mysql][status]" value="beginner" id="tech_mysql_beginner" {{(old('tech.mysql.status') =='beginner') ? 'checked': ''}} {{(old('tech.mysql')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Beginner</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[mysql][status]" value="mediator" id="tech_mysql_mediator" {{(old('tech.mysql.status') =='mediator') ? 'checked': ''}} {{(old('tech.mysql')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Mediator</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[mysql][status]" value="expert" id="tech_mysql_expert" {{(old('tech.mysql.status') =='expert') ? 'checked': ''}} {{(old('tech.mysql')) ? '': 'disabled'}}>
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
                                          <input class="form-check-input" type="checkbox" name="tech[laravel]" id="tech_laravel" {{(old('tech.laravel')) ? 'checked': ''}}>
                                          <label class="form-check-label">Laravel</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[laravel][status]" value="beginner" id="tech_laravel_beginner" {{(old('tech.laravel.status') =='beginner') ? 'checked': ''}} {{(old('tech.laravel')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Beginner</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[laravel][status]" value="mediator" id="tech_laravel_mediator" {{(old('tech.laravel.status') =='mediator') ? 'checked': ''}} {{(old('tech.laravel')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Mediator</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[laravel][status]" value="expert" id="tech_laravel_expert" {{(old('tech.laravel.status') =='expert') ? 'checked': ''}} {{(old('tech.laravel')) ? '': 'disabled'}}>
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
                                          <input class="form-check-input" type="checkbox" name="tech[oracle]" id="tech_oracle" {{(old('tech.oracle')) ? 'checked': ''}}>
                                          <label class="form-check-label">Oracle</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[oracle][status]" value="beginner" id="tech_oracle_beginner" {{(old('tech.oracle.status') =='beginner') ? 'checked': ''}} {{(old('tech.oracle')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Beginner</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[oracle][status]" value="mediator" id="tech_oracle_mediator" {{(old('tech.oracle.status') =='mediator') ? 'checked': ''}} {{(old('tech.oracle')) ? '': 'disabled'}}>
                                          <label class="form-check-label">Mediator</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tech[oracle][status]" value="expert" id="tech_oracle_expert" {{(old('tech.oracle.status') =='expert') ? 'checked': ''}} {{(old('tech.oracle')) ? '': 'disabled'}}>
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
                                        <input  class="form-control" id="ref_name" name="ref_name" value="{{ old('ref_name') }}">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Contact number</label>
                                        <input  class="form-control" id="ref_contact_number" name="ref_contact_number" value="{{ old('ref_contact_number') }}">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Relation</label>
                                        <input  class="form-control" id="ref_relation" name="ref_relation" value="{{ old('ref_relation') }}">
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
                                                <option value="Andhra Pradesh" {{ (collect(old('prefered_location'))->contains('Andhra Pradesh')) ? 'selected':'' }}>Andhra Pradesh</option>
                                                <option value="Andaman and Nicobar Islands" {{ (collect(old('prefered_location'))->contains('Andaman and Nicobar Islands')) ? 'selected':'' }}>Andaman and Nicobar Islands</option>
                                                <option value="Arunachal Pradesh" {{ (collect(old('prefered_location'))->contains('Arunachal Pradesh')) ? 'selected':'' }}>Arunachal Pradesh</option>
                                                <option value="Assam" {{ (collect(old('prefered_location'))->contains('Assam')) ? 'selected':'' }}>Assam</option>
                                                <option value="Bihar" {{ (collect(old('prefered_location'))->contains('Bihar')) ? 'selected':'' }}>Bihar</option>
                                                <option value="Chandigarh" {{ (collect(old('prefered_location'))->contains('Chandigarh')) ? 'selected':'' }}>Chandigarh</option>
                                                <option value="Chhattisgarh" {{ (collect(old('prefered_location'))->contains('Chhattisgarh')) ? 'selected':'' }}>Chhattisgarh</option>
                                                <option value="Dadar and Nagar Haveli" {{ (collect(old('prefered_location'))->contains('Dadar and Nagar Haveli')) ? 'selected':'' }}>Dadar and Nagar Haveli</option>
                                                <option value="Daman and Diu" {{ (collect(old('prefered_location'))->contains('Daman and Diu')) ? 'selected':'' }}>Daman and Diu</option>
                                                <option value="Delhi" {{ (collect(old('prefered_location'))->contains('Delhi')) ? 'selected':'' }}>Delhi</option>
                                                <option value="Lakshadweep" {{ (collect(old('prefered_location'))->contains('Lakshadweep')) ? 'selected':'' }}>Lakshadweep</option>
                                                <option value="Puducherry" {{ (collect(old('prefered_location'))->contains('Puducherry')) ? 'selected':'' }}>Puducherry</option>
                                                <option value="Goa" {{ (collect(old('prefered_location'))->contains('Goa')) ? 'selected':'' }}>Goa</option>
                                                <option value="Gujarat" {{ (collect(old('prefered_location'))->contains('Gujarat')) ? 'selected':'' }}>Gujarat</option>
                                                <option value="Haryana" {{ (collect(old('prefered_location'))->contains('Haryana')) ? 'selected':'' }}>Haryana</option>
                                                <option value="Himachal Pradesh" {{ (collect(old('prefered_location'))->contains('Himachal Pradesh')) ? 'selected':'' }}>Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir" {{ (collect(old('prefered_location'))->contains('Jammu and Kashmir')) ? 'selected':'' }}>Jammu and Kashmir</option>
                                                <option value="Jharkhand" {{ (collect(old('prefered_location'))->contains('Jharkhand')) ? 'selected':'' }}>Jharkhand</option>
                                                <option value="Karnataka" {{ (collect(old('prefered_location'))->contains('Karnataka')) ? 'selected':'' }}>Karnataka</option>
                                                <option value="Kerala" {{ (collect(old('prefered_location'))->contains('Kerala')) ? 'selected':'' }}>Kerala</option>
                                                <option value="Madhya Pradesh" {{ (collect(old('prefered_location'))->contains('Madhya Pradesh')) ? 'selected':'' }}>Madhya Pradesh</option>
                                                <option value="Maharashtra" {{ (collect(old('prefered_location'))->contains('Maharashtra')) ? 'selected':'' }}>Maharashtra</option>
                                                <option value="Manipur" {{ (collect(old('prefered_location'))->contains('Manipur')) ? 'selected':'' }}>Manipur</option>
                                                <option value="Meghalaya" {{ (collect(old('prefered_location'))->contains('Meghalaya')) ? 'selected':'' }}>Meghalaya</option>
                                                <option value="Mizoram" {{ (collect(old('prefered_location'))->contains('Mizoram')) ? 'selected':'' }}>Mizoram</option>
                                                <option value="Nagaland" {{ (collect(old('prefered_location'))->contains('Nagaland')) ? 'selected':'' }}>Nagaland</option>
                                                <option value="Odisha" {{ (collect(old('prefered_location'))->contains('Odisha')) ? 'selected':'' }}>Odisha</option>
                                                <option value="Punjab" {{ (collect(old('prefered_location'))->contains('Punjab')) ? 'selected':'' }}>Punjab</option>
                                                <option value="Rajasthan" {{ (collect(old('prefered_location'))->contains('Rajasthan')) ? 'selected':'' }}>Rajasthan</option>
                                                <option value="Sikkim" {{ (collect(old('prefered_location'))->contains('Sikkim')) ? 'selected':'' }}>Sikkim</option>
                                                <option value="Tamil Nadu" {{ (collect(old('prefered_location'))->contains('Tamil Nadu')) ? 'selected':'' }}>Tamil Nadu</option>
                                                <option value="Telangana" {{ (collect(old('prefered_location'))->contains('Telangana')) ? 'selected':'' }}>Telangana</option>
                                                <option value="Tripura" {{ (collect(old('prefered_location'))->contains('Tripura')) ? 'selected':'' }}>Tripura</option>
                                                <option value="Uttar Pradesh" {{ (collect(old('prefered_location'))->contains('Uttar Pradesh')) ? 'selected':'' }}>Uttar Pradesh</option>
                                                <option value="Uttarakhand" {{ (collect(old('prefered_location'))->contains('Uttarakhand')) ? 'selected':'' }}>Uttarakhand</option>
                                                <option value="West Bengal" {{ (collect(old('prefered_location'))->contains('West Bengal')) ? 'selected':'' }}>West Bengal</option>
                                            </select>
                                      </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Notice perriod</label>
                                        <input  class="form-control" id="notice_period" name="notice_period" value="{{ old('notice_period') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Expected CTC</label>
                                        <input  class="form-control" id="expected_ctc" name="expected_ctc" value="{{ old('expected_ctc') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Current CTC</label>
                                        <input  class="form-control" id="current_ctc" name="current_ctc" value="{{ old('current_ctc') }}">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Department</label>
                                            <select class="form-control" name="department">
                                                <option value="">-Select Department-</option>
                                                <option value="PHP" {{ ( old('department') == "PHP") ? 'selected' : '' }}>PHP</option>
                                                <option value="Design" {{ ( old('department') == "Design") ? 'selected' : '' }}>Design</option>
                                                <option value="QA" {{ ( old('department') == "QA") ? 'selected' : '' }}>QA</option>
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