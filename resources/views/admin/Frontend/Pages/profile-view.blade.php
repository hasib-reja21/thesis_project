@extends('admin.Frontend.master')
@section('content')

<div class="container rounded bg-white py-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class=" profile-img d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="{{url('/uploads//'.auth()->user()->image)}}">
                <span class="font-weight-bold ">{{ auth()->user()->name }}</span><span class="text-black-50">
                    {{ auth()->user()->email }}
                </span><span> </span>

                <div class="file btn btn-lg btn-primary mt-3">
                    Change Photo
                    <input type="file" name="file">
                    
                </div>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
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
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="">
            <div class="">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Product</th>
                            <th scope="col">Category</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Pending</td>
                            <td>
                            <a href="#" class="btn btn-danger btn-sm">Cancle</a>
                            </td>
                        </tr>
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