@extends('layouts.main')
@section('body')
    <main>
        <!-- auth Area Strat-->
        <section class="login-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="basic-login">
                            <h3 class="text-center mb-60">Your Profile</h3>
                            <form action="{{route('user.updateProfile')}}" method="POST">
                                @csrf
                                <label for="name">Your Name</label>
                                <input name="name" id="name" type="text" placeholder="{{$user->name}}" />
                                <label for="name">Your Email</label>
                                <input name="email" id="name" type="text" placeholder="{{$user->email}}" />
                                <label for="password">Password</label>
                                <input name="password" id="password" type="password" placeholder="Enter new password..." />
                                <button type="submit" class="bt-btn theme-btn-2 w-100">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- auth Area End-->
    </main>
@endsection
