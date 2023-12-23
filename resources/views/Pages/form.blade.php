@extends('Layout.app')
@section('content')
    <!--Card-->
    <div class="card shadow mb-5  rounded">

        <!--Card-Body-->
        <div class="card-body">

            <!--Card-Title-->
            <p class="card-title text-center shadow my-3 rounded">Bus ticket Booking Form</p>

            <div class="icons text-center">
                <i class="fa fa-taxi fa-2x" aria-hidden="true"></i>
            </div>

            <hr>
            <!--Second Row-->
            <div class="row">

                <div class="col-sm-6">
                    <select class="browser-default custom-select mb-4" id="select">
                        <option value="" disabled="" selected="">From City</option>
                        <option value="1">Dhake</option>
                        <option value="2">Comilla</option>
                        <option value="3">Chittagong</option>
                        <option value="4">Cox's Bazaar</option>
                    </select>
                </div>

                <div class="col-sm-6">
                    <select class="browser-default custom-select mb-4" id="select">
                        <option value="" disabled="" selected="">To City</option>
                        <option value="1">Dhake</option>
                        <option value="2">Comilla</option>
                        <option value="3">Chittagong</option>
                        <option value="4">Cox's Bazaar</option>
                    </select>
                </div>

            </div>


            <!--Third Row-->
            <div class="row">

                <div class="col-sm-6">
                    <input placeholder="&#xf073; Departing" type="text" id="date-picker-example"
                        class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome">
                </div>

                <div class="col-sm-6">
                    <input placeholder="&#xf073; Arriving" type="text" id="date-picker-example"
                        class="form-control datepicker" style="font-family:Arial, FontAwesome">
                </div>

            </div>


            <!--Fourth Row-->
            <div class="row mt-4">

                <div class="col-sm-6 date">
                    <label for="date">Date: </label>
                    <input type="date" name="date" id="">
                </div>

                <div class="col-sm-6">
                    <select class="browser-default custom-select mb-4" id="select">
                        <option value="" disabled="" selected="">Anytime</option>
                        <option value="1">6:00 AM</option>
                        <option value="2">3:00 PM</option>
                        <option value="3">6:00 PM</option>
                    </select>
                </div>

            </div>




            <!--Fifth Row-->
            {{-- <div class="row">

                <div class="col-sm-4">
                    <select class="browser-default custom-select mb-4" id="select">
                        <option value="" disabled="" selected="">Kids(0-14)</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>

                <div class="col-sm-4">
                    <select class="browser-default custom-select mb-4" id="select">
                        <option value="" disabled="" selected="">Adults(15-64)</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>

                <div class="col-sm-4">
                    <select class="browser-default custom-select mb-4" id="select">
                        <option value="" disabled="" selected="">Seniors(65+)</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>



            </div> --}}

            <a href="#" class="btn btn-primary float-right mt-5">Search Buses</a>
        </div>
    </div>
@endsection
