@extends('layouts.master')

@section('content') 
<BR>

<div class="container">
            <div class="row">
           
                  <div class="contact-area style-one">
                    <div class="section-title ">
                    <h4> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp Modifier l'actualité N° {{$news->id}} :  
                        <span>{{$news->title}}</span>
                    </h4>
                    </div>
                    <form  action="{{ route('news_update', $news->id)}}" method="post" enctype="multipart/form-data">
                       
                       {{ csrf_field() }}
                        @method('PUT')
                             <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12">
                              <input type="title" name="title" value="{{$news->title}}" id="title" class="form-control main"  required>
                            </div>
                              
                                <div class="col-xs-8">
                                      <div class="form-group">
                                        Modifier la photo <input type="File" id="image" name="image" value="{{$news->image}}"  class="input-lg">
                                      </div>
                                </div>
                            
                             <div class="col-md-8 col-sm-12 col-xs-12">
                             <textarea name="content" id="content"  rows="15" class="form-control main" >{{$news->content}}</textarea>
                             </div>
                             </div>
                           
                             <br>
                            <div class="row">
                             <div class="col-md-3  ">
                            <button class="btn btn-style-one" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp Enregistrer modification</button>
                           
                        </div>
                       </div>
                      </form>
                     <br>
                    </div>              
                  </div> 
            </div>                    
       </div>
</div>

@endsection