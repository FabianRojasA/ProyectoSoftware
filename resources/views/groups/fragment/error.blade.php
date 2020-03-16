@if(count($errors))
    <div class="alert alert-info">
        <button type="button" class="clos" data-dismiss="alert">
            &times;
        </button>

        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif