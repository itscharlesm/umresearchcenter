<!-- Register User Modal -->
<div class="modal fade" id="registerUser" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register User</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="{{ route('admin.user-manage.create') }}" class="row" method="POST">
                        {{ csrf_field() }}
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="firstName" name="firstName"
                                placeholder="First Name">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="lastName" name="lastName"
                                placeholder="Last Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="email"
                                placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="password"
                                placeholder="Password">
                        </div>

                        <!-- Roles Section -->
                        <div class="col-12 mb-3">
                            <h5>Assign Roles:</h5>
                            <div class="row my-3">
                                {{-- super admin --}}
                                <div class="col-md-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]" id="role1"
                                            value="1">
                                        <label class="form-check-label" for="role1">Super Administrator</label>
                                    </div>
                                </div>
                                {{-- admin --}}
                                <div class="col-md-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]" id="role2"
                                            value="2">
                                        <label class="form-check-label" for="role2">Admin</label>
                                    </div>
                                </div>
                                {{-- news module --}}
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]" id="role3"
                                            value="3">
                                        <label class="form-check-label" for="role3">Post News and Bulletins</label>
                                    </div>
                                </div>
                                {{-- announcement --}}
                                <div class="col-md-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]" id="role4"
                                            value="4">
                                        <label class="form-check-label" for="role4">Post Announcement</label>
                                    </div>
                                </div>
                                {{-- events --}}
                                <div class="col-md-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]" id="role5"
                                            value="5">
                                        <label class="form-check-label" for="role5">Post Calendar Events</label>
                                    </div>
                                </div>
                                {{-- research --}}
                                <div class="col-md-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]" id="role6"
                                            value="6">
                                        <label class="form-check-label" for="role6">Research</label>
                                    </div>
                                </div>
                                {{-- student affairs --}}
                                <div class="col-md-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]"
                                            id="role7" value="7">
                                        <label class="form-check-label" for="role7">Student Affairs</label>
                                    </div>
                                </div>
                                {{-- Admission --}}
                                <div class="col-md-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]"
                                            id="role8" value="8">
                                        <label class="form-check-label" for="role8">Admission</label>
                                    </div>
                                </div>
                                {{-- awards and accreditation --}}
                                <div class="col-md-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]"
                                            id="role9" value="9">
                                        <label class="form-check-label" for="role9">Awards and
                                            Accreditation</label>
                                    </div>
                                </div>
                                {{-- Scholarship --}}
                                <div class="col-md-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]"
                                            id="role10" value="10">
                                        <label class="form-check-label" for="role10">Scholarship</label>
                                    </div>
                                </div>
                                {{-- Guidance --}}
                                <div class="col-md-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]"
                                            id="role11" value="11">
                                        <label class="form-check-label" for="role11">Guidance</label>
                                    </div>
                                </div>
                                {{-- Health Service --}}
                                <div class="col-md-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]"
                                            id="role12" value="12">
                                        <label class="form-check-label" for="role12">Health Service</label>
                                    </div>
                                </div>
                                {{-- Facilities --}}
                                <div class="col-md-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]"
                                            id="role13" value="13">
                                        <label class="form-check-label" for="role13">Facilities</label>
                                    </div>
                                </div>
                                {{-- Academic --}}
                                <div class="col-md-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]"
                                            id="role14" value="14">
                                        <label class="form-check-label" for="role14">Academic</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
