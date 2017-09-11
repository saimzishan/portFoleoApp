<style>
    .fbbtn{
        color: #FFFFFF;
        width: 50%;
        height: 40px;
        float: left;
    }
    .gbtn{
        margin-top: 3px;
        width: 50%;
        height: 34px;
        border-radius: 2px;
    }
</style>
<div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">

                <form action="{{ url('/userLogin') }}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="Email">E-mail</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Password</label>
                        <input type="password" name="password" class="form-control" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                      <button class="form-control btn btn-primary btn-block">Signin</button>
                    </div>
                    <div class="form-group">
                        <a href="{{ route('redirect' ) }}">
                            <img src="assets/img/fb.png" alt="Click to faceBook login" class="fbbtn">
                        </a>
                        <a href="{{ route('redirectt' ) }}">
                            <img src="assets/img/g.png" alt="Click to G+ login" class="gbtn">
                        </a>
                        {{--<a href="redirect">FB Login</a>
                        <p class="pull-right">
                        {{link_to_route('redirect','Log In',['facebook' ], ['class'=>'btn btn-primary  fbbtn'])}}
                            <a class="" href="javascript:;" data-toggle="modal" data-target="#forget-password">Forget password</a>
                        </p>--}}
                    </div>
                </form>
                <div class="form-group">
                    <a class="" href="javascript:;" data-toggle="modal" data-target="#signupModal"><button class="form-control btn btn-primary btn-block" style="padding-top: 10px;">  Signup</button></a>
                </div>
            </div>



        </div>

    </div>
</div>






