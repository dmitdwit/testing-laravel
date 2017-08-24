@extends('main') @section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-6">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Check me out
                    </label>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection