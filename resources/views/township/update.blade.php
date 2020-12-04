@extends('layouts.app')

@section('content')
    <div class="container">
        <label style="margin-top: 5px; color: blue;">Edit Township</label>
        <form action="{{route('township.update',$township->id)}}" method="post">
            @csrf

            <div class="form-group row">
                <div class="col">
                    <input type="text" class="form-control input-sm" name="tsp_name" value="{{$township->tsp_name}}">
                </div>
                <div class="col">
                    <input type="number" class="form-control input-sm" name="tsp_code" value="{{$township->tsp_code}}">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>
@endsection
