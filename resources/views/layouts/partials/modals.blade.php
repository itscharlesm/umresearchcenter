<!-- Register Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="{{ url('admin/register-user') }}" method="POST" class="row">
                        @csrf
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="usr_first_name" name="usr_first_name"
                                placeholder="First Name">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="usr_middle_name" name="usr_middle_name"
                                placeholder="Middle Name">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="usr_last_name" name="usr_last_name"
                                placeholder="Last Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="usr_email" name="usr_email"
                                placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="usr_password" name="usr_password"
                                placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/login') }}" class="row" method="POST">
                    {{ csrf_field() }}
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="email"
                            placeholder="Email">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="password"
                            placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
