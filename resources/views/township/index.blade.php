@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container" style="margin-top: 10px">
            <form action="{{url('township/store')}}" method="post" class="form-inline">
                @csrf

                <div class="form-group row">
                    <div class="col">
                        <input type="text" class="form-control input-sm" name="tsp_name" value=""
                               placeholder="Township Name">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control input-sm" name="tsp_code" value=""
                               placeholder="Township Code">
                    </div>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </div>

            </form>
        </div>

        <hr class="solid">

        <div class="body_container">
            @if(count($townships)>0)
                <div class="table-responsive">
                    <table class="table table-bordered table-hover style-table">
                        <thead>
                        <tr>
                            <th>Township Name</th>
                            <th>Township Code</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($townships as $township)
                            <tr>
                                <td>
                                    {{$township->tsp_name}}
                                </td>
                                <td>
                                    {{$township->tsp_code}}
                                </td>
                                <td>
                                    <div align="center">
                                        <i class="fa fa-edit align-content-start" style="margin: 5px;"
                                           onclick="location.href='{{route('township.edit',$township->id)}}'"></i>

                                        <i class="fa fa-trash align-content-between" style="margin: 5px;"
                                           onclick="location.href='{{route('township.delete',$township->id)}}'"></i>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div align="center">
                    <p>Total = {{count($townships)}}</p>
                </div>
            @endif
        </div>
    </div>
@endsection
