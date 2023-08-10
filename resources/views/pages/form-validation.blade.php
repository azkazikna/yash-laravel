@extends('layouts/master')

@section('title', 'User')

@section('vendor-style')
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

	<script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('page-script')
    <script>
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Validation</h4>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form class="needs-validation" novalidate >
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Username
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="validationCustom01"  placeholder="Enter a username.." required>
                                        <div class="invalid-feedback">
                                            Please enter a username.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom02">Email <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="validationCustom02"  placeholder="Your valid email.." required>
                                        <div class="invalid-feedback">
                                            Please enter a Email.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom03">Password
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" id="validationCustom03" placeholder="Choose a safe one.." required>
                                        <div class="invalid-feedback">
                                            Please enter a password.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom04">Suggestions <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control h-50" id="validationCustom04"  rows="5" placeholder="What would you like to see?" required></textarea>
                                        <div class="invalid-feedback">
                                            Please enter a Suggestions.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom05">Best Skill
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="default-select wide form-control" id="validationCustom05">
                                            <option  data-display="Select">Please select</option>
                                            <option value="html">HTML</option>
                                            <option value="css">CSS</option>
                                            <option value="javascript">JavaScript</option>
                                            <option value="angular">Angular</option>
                                            <option value="angular">React</option>
                                            <option value="vuejs">Vue.js</option>
                                            <option value="ruby">Ruby</option>
                                            <option value="php">PHP</option>
                                            <option value="asp">ASP.NET</option>
                                            <option value="python">Python</option>
                                            <option value="mysql">MySQL</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a one.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom06">Currency
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="validationCustom06" placeholder="$21.60" required>
                                        <div class="invalid-feedback">
                                            Please enter a Currency.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom07">Website
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="validationCustom07"  placeholder="http://example.com" required>
                                        <div class="invalid-feedback">
                                            Please enter a url.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom08">Phone (US)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="validationCustom08" placeholder="212-999-0000" required>
                                        <div class="invalid-feedback">
                                            Please enter a phone no.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom09">Digits <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="validationCustom09"  placeholder="5" required>
                                        <div class="invalid-feedback">
                                            Please enter a digits.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom10">Number <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="validationCustom10" placeholder="5.0" required>
                                        <div class="invalid-feedback">
                                            Please enter a num.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom11">Range [1, 5]
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="validationCustom11" placeholder="4" required>
                                        <div class="invalid-feedback">
                                            Please select a range.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label"><a
                                            href="javascript:void()">Terms &amp; Conditions</a> <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-8">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="validationCustom12" required>
                                          <label class="form-check-label" for="validationCustom12">
                                            Agree to terms and conditions
                                          </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-lg-8 ms-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Vertical Forms with icon</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form class="form-valide-with-icon needs-validation" novalidate>
                        <div class="mb-3">
                            <label class="text-label form-label" for="validationCustomUsername">Username</label>
                            <div class="input-group">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Enter a username.." required>
                                <div class="invalid-feedback">
                                    Please Enter a username.
                                  </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="text-label form-label" for="dz-password">Password *</label>
                            <div class="input-group transparent-append">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                <input type="password" class="form-control" id="dz-password" placeholder="Choose a safe one.." required>
                                <span class="input-group-text show-pass"> 
                                    <i class="fa fa-eye-slash"></i>
                                    <i class="fa fa-eye"></i>
                                </span>
                                <div class="invalid-feedback">
                                    Please Enter a username.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                              <label class="form-check-label" for="invalidCheck2">
                                Check Me out
                              </label>
                            </div>
                        </div>
                        <button type="submit" class="btn me-2 btn-primary">Submit</button>
                        <button type="submit" class="btn btn-danger light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection