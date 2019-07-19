@extends('layout.basereg')
@section('content')
<div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Si<b>BORA</b></a>
            <small>SIBORA - SISTEM BORANG AKREDITASI</small>
        </div>
        <div class="card">
            <div class="body">
                    <div class="msg">Register a new membership</div>
                    @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                    @endif
                <form action="{{ url('registerPost') }}" method="post">
                {{ csrf_field() }}
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" placeholder="Name" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confrimation" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('id_role') ? ' has-error' : '' }}">
                        <select name="id_role" id="fakultas" class="form-control show-tick">
                        <option value="">-- Please select Role --</option>
                            @foreach($role as $user)
                                <option value="{{$user->id}}">{{$user->nama}}</option>
                            @endforeach 
                        </select>
                    </div>

                    <div class="form-group{{ $errors->has('jur') ? ' has-error' : '' }}">
                        <select name="jur" id="jurusan" class="form-control show-tick">
                        <option value="">-- Please select Jurusan --</option>
                            @foreach($tb_jurusan as $user)
                                <option value="{{$user->id}}">{{$user->nama}}</option>
                            @endforeach 
                        </select>
                    </div>

                    <div class="form-group{{ $errors->has('prodi') ? ' has-error' : '' }}">
                        <select name="prodi" id="id" class="form-control show-tick">
                        <option value="">-- Please select Prodi --</option>
                        </select>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="{{url('login')}}">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

   
@endsection