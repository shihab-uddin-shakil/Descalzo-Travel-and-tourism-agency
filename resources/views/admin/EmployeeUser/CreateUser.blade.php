@extends('main.index')
@section('content')
<div class="block">
                                <h4>New Employee</h4>                                
                                <form id="validate" role="form" class="form-horizontal" action="javascript:alert('Form #validate submited');">                            
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,maxSize[20]] form-control"/>
                                            <span class="help-block">Required, max size = 20</span>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 control-label">Username</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,maxSize[20]] form-control"/>
                                            <span class="help-block">Required, max size = 20</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password:</label>
                                        <div class="col-md-9">
                                            <input type="password" class="validate[required,minSize[5],maxSize[10]] form-control" id="password"/>
                                            <span class="help-block">Required, min size = 5, max size = 10</span>
                                        </div>
                                    </div>                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Confirm:</label>
                                        <div class="col-md-9">
                                            <input type="password" class="validate[required,equals[password]] form-control"/>
                                            <span class="help-block">Required, equals Password</span>
                                        </div>
                                    </div>                            
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Age:</label>
                                        <div class="col-md-9    ">
                                            <input type="text" class="validate[required,custom[integer],min[18],max[120]] form-control"/>
                                            <span class="help-block">Required, integer, min value = 15, max = 120</span>
                                        </div>                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Gender:</label>
                                        <div class="col-md-3">
                                            <select class="validate[required] select" id="formGender">
                                                <option value="">Choose option</option>
                                                <option value="1">Male</option>
                                                <option value="0">Female</option>
                                            </select>                           
                                            <span class="help-block">Required</span>
                                        </div>                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date of birth:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,custom[date]] form-control"/>
                                            <span class="help-block">Required, date YYYY-MM-DD</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Credit card:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,creditCard] form-control"/>
                                            <span class="help-block">Required, credit card number</span>
                                        </div>
                                    </div>             
                                                                                               
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-primary" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>                                                                
                                </form>
                            </div>    
@stop