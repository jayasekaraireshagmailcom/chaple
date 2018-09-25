@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Family Details') }}</div>

                <div class="card-body">
                    <form method="POST"  ng-app="familyinfor" ng-controller="familyinforCtrl" ng-submit="familyinfor_2submit($event)" name="fform">
                        @csrf
                       
                        <fieldset>
                        <span class="form-text text-muted errormsg label_size label label-default">Mother</span>                        
                        <div class="form-group row" >
                            

                            <div class="col-md-12">
                           
                                <small class="form-text text-muted errormsg" ng-show="message != null"><input type="text" ng-model="message" class="form-control convertaslabel" value="@{{message}}"></small>
                                <input type="hidden" value="@{{record_id}}" name="record_id" ng-model="record_id">
                                <input type="hidden" value="@{{people_id}}" name="people_id" ng-model="people_id">
                            
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>Full Name</label><span class="asterisk_input">  </span>
                                <input name="mname"  class="form-control" type="text" class="form-control" placeholder="Full Name " ng-model="mname" ng-pattern="/^[a-zA-Z\_\- ]*$/" required>                                
                                <small class="form-text text-muted errormsg" ng-show="fform.mname.$error.required">Please enter full name !</small>
                                <small class="form-text text-muted errormsg" ng-show="fform.mname.$error.pattern">Please enter a valied name !</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            

                            <div class="col-md-12">

                                <label>Date of Birth</label><span class="asterisk_input">  </span>
                                <br/>
                                <md-datepicker md-current-view="year" name="mdob" id="mdob" ng-model="mdob"  required></md-datepicker>
                                <span ng-if="mdob== null">
                                <small class="form-text text-muted errormsg" ng-show="fform.mdob.$error.required" >Please select your birth date !</small>
                                </span>                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>Deceased?</label>
                                <label>If "yes" When ?</label>
                                <br/>
                                <md-datepicker md-current-view="year" name="mdeaddate" id="mdeaddate" ng-model="mdeaddate"  ></md-datepicker>  
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>Place of Baptism</label>
                                <input name="mbaptism"  class="form-control" type="text" class="form-control" placeholder="Place of Baptism" ng-model="mbaptism" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>Race</label><span class="asterisk_input">  </span>
                                <input name="mrace"  class="form-control" type="text" class="form-control" placeholder="Race" ng-model="mrace" ng-pattern="/^[a-zA-Z\_\- ]*$/" required>
                                <small class="form-text text-muted errormsg" ng-show="fform.mrace.$error.required">Please enter your race !</small>
                                <small class="form-text text-muted errormsg" ng-show="fform.mrace.$error.pattern">Please enter a valied race !</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>Religion</label><span class="asterisk_input">  </span>
                                <input name="mreligion"  class="form-control" type="text" class="form-control" placeholder="Religion" ng-model="mreligion" ng-pattern="/^[a-zA-Z\_\- ]*$/" required>
                                <small class="form-text text-muted errormsg" ng-show="fform.mreligion.$error.required">Please enter your religion !</small>
                                <small class="form-text text-muted errormsg" ng-show="fform.mreligion.$error.pattern">Please enter a valied religion !</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>Marriage Date</label><span class="asterisk_input">  </span>
                                <br/>
                                <md-datepicker md-current-view="year" name="mmarriagedate" id="mmarriagedate" ng-model="mmarriagedate"  ></md-datepicker>                                
                                <small class="form-text text-muted errormsg" ng-show="mmarriagedate==null" >Please enter your marriage date !</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>Place of Marriage</label><span class="asterisk_input">  </span>
                                <br/>
                                <input name="mmarriageplace"  class="form-control" type="text" class="form-control" placeholder="Place of Marriage" ng-model="mmarriageplace" required>
                                <small class="form-text text-muted errormsg" ng-show="mmarriageplace==null" >Please enter your marriage place !</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>Employment</label><span class="asterisk_input">  </span>
                                <br/>
                                <input name="memployment"  class="form-control" type="text" class="form-control" placeholder="Employment" ng-model="memployment" required>
                                <small class="form-text text-muted errormsg" ng-show="memployment==null" >Please enter your employment !</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>Are you handling responsibilities in the churh? If "yes" Please mention</label>
                                <br/>
                                <input name="mresponsibilities"  class="form-control" type="text"  ng-model="mresponsibilities" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>Are you a member of any company? If "yes" Please mention</label>
                                <br/>
                                <input name="mcompany"  class="form-control" type="text"  ng-model="mcompany" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>Remarks</label>
                                <br/>
                                <input name="mremarks"  class="form-control" type="text"  ng-model="mremarks" >
                            </div>
                        </div>                                                                                                                                                                                                                                                
                        <!--<div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>-->

                        <div class="form-group row col-md-12 remove_borders">
                            
                                <button type="submit" class="btn btn-primary col-md-4 ">
                                    {{ __('Save') }}
                                </button>
                                <span class="col-md-4"></span>
                                <button type="button" class="btn btn-primary col-md-4 " ng-click="">
                                    {{ __('Next') }}
                                </button>                                

                               <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>-->
                            
                        </div>
                    </form>
                    </fieldset>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
