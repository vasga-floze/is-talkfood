<x-app-layout>
    <x-slot name="header">
        <form class="form-inline my-4 my-lg-0">
            <a class="nav-link mx-auto" href="{{ url('/aboutme') }}"><span>About Me</span></a>

            <a class="nav-link mx-auto" href="{{ url('/favorites') }}"><span>Favorites</span></a>

            <a class="nav-link mx-auto" href="{{ url('/recipebook') }}"><span>Recipe Book</span></a>
        </form>
    </x-slot>
</x-app-layout>
<h2 class="text-center">ABOUT ME</h2>
<div class="card">
    <div class="card-body px-5 py-3 border-bottom rounded-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card" style="width: 36rem; height: 150px;">
                        <div class="card-body">
                            <h5 class="card-title">ABOUT ME</h5>
                                <div>
                                    <a href="{{ route('profile.show') }}">
                                        <button type="submit" class="btn btn-dark">Edit Profile</button>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="width: 10rem; height: 150px;">
                        <img src="{{asset('images/profile.png')}}" width="150" height="125">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 36rem; height: 150px;">
                        <div class="col align-self-center">
                            <h5 class="card-title">MY LOCATION</h5>
                        </div>
                    <div>
                </div> 
            </div>
        </div>
    </div>
</div>

