@extends('admin.Frontend.master')
@section('content')

<style>
    img {
        transform: translateX(0px);
        border-radius: 5px;
    }
</style>
<div class="container rounded bg-white py-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class=" profile-img d-flex flex-column align-items-center text-center p-3 py-5">
                <img class=" mt-5" height="250px" width="150px" src="{{url('/uploads//'.auth()->user()->image)}}">
                <span class="font-weight-bold ">{{ auth()->user()->name }}</span><span class="text-black-50">
                    {{ auth()->user()->email }}
                </span><span> </span>

                <!-- <div class="file btn btn-lg btn-primary mt-3">
                    Change Photo
                    <input type="file" name="file">
                </div> -->
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Full Name</label><input type="text" class="form-control" placeholder="Enter Your fullName" value="{{ auth()->user()->name }}"></div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">User Name</label><input type="text" class="form-control" placeholder="Enter Your UserName" value="hasib21"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value="{{ auth()->user()->email }}"></div>

                </div>

                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Mobile Number</label><input type="mobile" class="form-control" placeholder="Mobile Number" value="01825132226"></div>
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value="Bangladesh"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button"><a href="{{route('profile.edit',auth()->user()->id)}}">Update profile</a></button></div>
            </div>
        </div>
        <div class="">
            <div class="">
                <h1 class="text-center  mb-3 " style="font-weight: bold; font-size:large">My Wining Info</h1>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Message</th>
                            <th scope="col">Address</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($contacts as $contact )
                        @if($contact->email == auth()->user()->email)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->message}}</td>
                            <td>{{$contact->Address}}</td>
                            <td>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>






@endsection

<!------ Include the above in your HEAD tag ---------->