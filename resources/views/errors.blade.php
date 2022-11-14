@if($msg = Session::get('success'))
<div class="alert alert-success">    
    <strong>{{$msg}}</strong>
 </div>
@endif
@if($msg = Session::get('error'))
<div class="alert alert-danger">     
    <strong>{{$msg}}</strong>
 </div>
@endif
@if ($errors->any())  
@foreach ($errors->all() as $error)
<div class="alert alert-danger">  
    
    {{ $error }}
</div>  
@endforeach
@endif  