@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container" style="margin-top: 10px">
            <form action="{{url('shop/store')}}" method="post">
                @csrf

                <div class="container">

                    <div class="row d-flex justify-content-end">
                        <label class="col unicode" style="text-align: right">အမှတ်စဉ်</label>
                        <div class="col-md-2">
                            <input type="text" disabled name="register_number" id="register_number" value="" class="form-control unicode">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-md-4 unicode">ဆိုင်အမည်*</label>
                                <div class="col-md-6">
                                    <input type="text" name="shop_name" id="shop_name" value="" class="form-control unicode" placeholder="Coffee">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-md-4 unicode">ဖုန်းနံပါတ်*</label>
                                <div class="col-md-6">
                                    <input type="number" name="phone" id="phone" value="" class="form-control unicode" placeholder="09xxxxxxxxx">
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-md-4 unicode">ဆိုင်ပိုင်ရှင် အမည်*</label>
                                <div class="col-md-6">

                                    <input type="text" name="owner_name" id="owner_name" value="" class="form-control unicode" placeholder="U Mya">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-md-4 unicode" >မြို့နယ်*</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="tsp_id" id="tsp_id" onchange="myFunction(value)">
                                        <option value="">မြို့နယ်</option>
                                        @foreach($townships as $township)
                                            <option value="{{$township->id}}">{{$township->tsp_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-md-4 unicode">ဆိုင်ထိုင်ခွင့်ပြုသည့်ဦးရေ*</label>
                                <div class="col-md-6">
                                    <input type="number" name="approve_person" id="approve_person" value="" class="form-control unicode" placeholder="10">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-md-4 unicode">လိပ်စာ*</label>
                                <div class="col-md-6">
                                    <input type="text" name="address" id="address" value="" class="form-control unicode" placeholder="ပေါင်းလောင်း">
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div align="center">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function myFunction(e) {
            // document.getElementById("register_number").value = e
           $.ajax({
                type:'GET',
                url:'/getRegNumber',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data) {
                    // document.getElementById("register_number").value =html(data.msg);
                    alert(data.msg);
                    document.getElementById("register_number").value = data.msg
                },
                error: function (response){
                    $("#register_number").html("error");
                     alert(response);
                }
            });

        }
    </script>
@endsection
