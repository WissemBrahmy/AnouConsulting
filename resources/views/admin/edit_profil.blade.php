@extends('layouts.master')

@section('content') 
<BR>

<div class="container">
            <div class="row">
            <div class="section-title text-center">
              <div class="contact-form responsive">
                    @if(session('success'))
                         <p class="alert alert-success">
                         <b>    {{session('success')}}</b>
                         </p>
                       
                    @endif
              </div>
                  <div class="contact-area style-one">
                    <div class="section-title ">
                    <h4> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp Modifier mon profil  :  
                        
                    </h4>
                    </div>
                    <div class="">
                      <table class="table-responsive">
                      <tr><td>
                      <form  action="{{ route('edit_profil')}}" method="post" enctype="multipart/form-data">
                        
                       {{ csrf_field() }}
                        @method('POST')
                             <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12">
                          
                              <input type="text" name="name" value="{{Auth::user()->name}}" id="name" class="form-control main"  required>
                              <br>
                            </div>
                              
                            <div class="col-md-8 col-sm-12 col-xs-12">
                          
                          <input type="email" name="email" value="{{Auth::user()->email}}" id="email" class="form-control main"  required>
                          <br>
                        </div>
                        <br>
                            
                             <div class="col-md-8 col-sm-12 col-xs-12">
                             <input type="password" name="password" minlength='8' placeholder="Tappez votre nouveau mot de passe" id="password" class="form-control main"  required>
                             <br>
                         </div>
                         
                            </div>
                           
                             <br>
                            <div class="row">
                             <div class="col-md-7  ">
                           <button class="btn btn-style-one" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp Enregistrer modification</button>
                           
                       </div>
                       </div>
                       </form>
                       </td>
                       <td><img src="{{asset('images/ANOU.png')}}" alt="" width="225" height="100" ></td>
                           </tr>
                           </table>
                           
                        <br>
                  </div>    
                            
                  </div> 
            </div>                    
            </div>
            </div>

</div>

@endsection