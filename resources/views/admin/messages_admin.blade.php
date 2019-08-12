@extends('layouts.master')

@section('content') 
<BR>
<div class="section-title text-center">
            <h4>CONSULTER  
                <span>MESSAGES</span>
            </h4>
            
     </div><br><br>
<div class="table-responsive">
  <table class="table table-hover">
    <tr><td>id</td><td>Nom</td><td>Email</td><td>Téléphone</td><td>Message</td><td>Action</td><tr>
    <tr><td>02</td><td>44</td><td>01</td><td>01</td><td>01</td><td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#largeShoes">Corbeille</button></td><tr>
    <tr><td>124</td><td>8</td><td>03</td><td>01</td><td>01</td><td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#largeShoes">Corbeille</button><tr>
    <tr><td>112</td><td>78</td><td>87</td><td>01</td><td>01</td><td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#largeShoes">Corbeille</button></td><tr>
  </table>
</div>
<!-- The modal -->
<div class="modal fade" id="largeShoes" tabindex="-1" role="dialog" aria-labelledby="modalLabellarge" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<h4 class="modal-title" id="modalLabelSmall">Confirmation suppression</h4>
</div>

<div class="modal-body">
vous voulez vraiment le supprimer?
</div>
<div class="modal-footer">
<a href="#" class="btn btn-danger " role="button">Oui</a>
</div>
</div>
</div>
</div>
@endsection

