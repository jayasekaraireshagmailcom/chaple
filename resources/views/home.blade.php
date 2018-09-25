@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('General Details') }}</div>

                <div class="card-body">
                    <form method="POST"  ng-app="generalinfor" ng-controller="generalinforCtrl" ng-submit="generalinforsubmit($event)" name="gform">
                        @csrf
                        <div class="form-group row justify-content-center" >
                            

                            <div class="col-md-12">
                                <small class="form-text text-muted errormsg" ng-show="message != null"><input type="text" ng-model="message" class="form-control convertaslabel" value="@{{message}}"></small>
                                <input type="hidden" value="@{{record_id}}" name="record_id" ng-model="record_id">
                            </div>
                        </div>
                        <div class="form-group row" >
                            

                            <div class="col-md-12">
                                <label>Chaple</label><span class="asterisk_input">  </span>
                                <select id="chaple" name="chaple" class="form-control" class="form-control{{ $errors->has('chaple') ? ' is-invalid' : '' }}" required autofocus ng-model="chaple" ng-change="checkSaint()" >
                                @foreach ($chaple as $key => $value)    
                                    <option value="{{$key}}">{{$value}}</option>   
                                @endforeach    
                               
                                </select>
                                
                                @if ($errors->has('chaple'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('chaple') }}</strong>
                                    </span>
                                @endif
                                <small class="form-text text-muted errormsg" ng-show="chaple == undefined">Please select a Chaple !</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                <label>Saint</label><span class="asterisk_input">  </span>
                                <input name="saint" ng-disabled="true" class="form-control" ng-hide="chaple!= undefined" type="text" class="form-control" placeholder="Saint ">
                                <div ng-if="chaple!= undefined " ng-repeat="saint in saint" >
                                    <div ng-repeat="(key,value1) in saint">
                                        <input type="hidden" value="@{{key}}" name="saint_id" class="saint_id">
                                        <input type="text" name="saint" class="form-control" value="@{{value1}}" disabled>
                                    </div>
                                </div>
                              
                               
                                
                                @if ($errors->has('saint'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('saint') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                <label>Novena</label><span class="asterisk_input">  </span>
                                <input name="novena" id="novena" type="text" class="form-control{{ $errors->has('novena') ? ' is-invalid' : '' }}" name="novena" placeholder="Novena " ng-disabled="chaple== undefined" ng-model="novena" ng-pattern="/^[1-9]+$/" required>

                                @if ($errors->has('novena'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('novena') }}</strong>
                                    </span>
                                @endif
                                <span ng-if="chaple!= undefined">
                                <small class="form-text text-muted errormsg" ng-show="gform.novena.$error.required" >Please select a Novena !</small>    

                                <small class="form-text text-muted errormsg" ng-show="gform.novena.$error.pattern">Please enter a valied number !</small>
                                </span>                                
                            </div>
                        </div>
                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                <label>Zone</label><span class="asterisk_input">  </span>
                                <input name="zone" id="zone" type="text" class="form-control{{ $errors->has('zone') ? ' is-invalid' : '' }}" name="zone" placeholder="Zone "  ng-disabled="chaple== undefined" ng-model="zone" ng-pattern="/^[1-9]+$/" required>

                                @if ($errors->has('zone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('zone') }}</strong>
                                    </span>
                                @endif
                                <span ng-if="chaple!= undefined">
                                <small class="form-text text-muted errormsg" ng-show="gform.zone.$error.required" >Please select a Zone !</small>
                                <small class="form-text text-muted errormsg" ng-show="gform.zone.$error.pattern">Please enter a valied number !</small>
                                </span>                                
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
                            
                                <button type="submit" class="btn btn-primary col-md-4 " disabled ng-show="chaple== undefined || gform.novena.$error.required || gform.novena.$error.pattern || gform.zone.$error.required || gform.zone.$error.pattern || message!=null">
                                    {{ __('Save') }}
                                </button>
                                <button type="submit" class="btn btn-primary col-md-4 " ng-show="chaple!= undefined && !gform.novena.$error.required && !gform.novena.$error.pattern && !gform.zone.$error.required && !gform.zone.$error.pattern && message==null">
                                    {{ __('Save') }}
                                </button>                                
                                <span class="col-md-4"></span>
                                <button type="button" class="btn btn-primary col-md-4 " ng-click="gotofamily()" ng-show="message==null" disabled ng-model="nextbt">
                                    {{ __('Next') }}
                                </button>
                                <button type="button" class="btn btn-primary col-md-4 "  ng-show="message!=null" ng-model="nextbt" ng-click="gotofamily()">
                                   {{ __('Next') }}
                                </button>                                  
                                                              

                               <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>-->
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
