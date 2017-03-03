@if(count($errors)>0)
    <div class="alert alert-danger">
    <button data-dismiss="alert" type="button" class="close"><span aria-hidden="true">×</span>
    </button>
     <ul>
         @foreach($errors->all() as $error)
            <li>{!! $error!!}</li>
         @endforeach

     </ul>
    </div>
@endif

	