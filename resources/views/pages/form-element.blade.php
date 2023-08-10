@extends('layouts/master')

@section('title', 'User')

@section('vendor-style')
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
@endsection

@section('page-script')
@endsection

@section('content')
<div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Style</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control input-default " placeholder="input-default">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" placeholder="input-rounded">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Checkbox</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4 col-xxl-6 col-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                            <label class="form-check-label" for="customCheckBox1">Checkbox 1</label>
                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-6 col-6">
                        <div class="form-check custom-checkbox mb-3 checkbox-info">
                            <input type="checkbox" class="form-check-input" checked id="customCheckBox2" required>
                            <label class="form-check-label" for="customCheckBox2">Checkbox 2</label>
                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-6 col-6">
                        <div class="form-check custom-checkbox mb-3 checkbox-success">
                            <input type="checkbox" class="form-check-input" checked id="customCheckBox3" required>
                            <label class="form-check-label" for="customCheckBox3">Checkbox 3</label>
                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-6 col-6">
                        <div class="form-check custom-checkbox mb-3 checkbox-warning">
                            <input type="checkbox" class="form-check-input" checked id="customCheckBox4" required>
                            <label class="form-check-label" for="customCheckBox4">Checkbox 4</label>
                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-6 col-6">
                        <div class="form-check custom-checkbox mb-3 checkbox-danger">
                            <input type="checkbox" class="form-check-input" checked id="customCheckBox5" required>
                            <label class="form-check-label" for="customCheckBox5">Checkbox 5</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-check custom-checkbox mb-3 check-xs">
                            <input type="checkbox" class="form-check-input" checked id="customCheckBox6" required>
                            <label class="form-check-label" for="customCheckBox6"></label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check custom-checkbox mb-3 checkbox-info">
                            <input type="checkbox" class="form-check-input" checked id="customCheckBox7" required>
                            <label class="form-check-label" for="customCheckBox7"></label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check custom-checkbox mb-3 checkbox-success check-lg">
                            <input type="checkbox" class="form-check-input" checked id="customCheckBox8" required>
                            <label class="form-check-label" for="customCheckBox8"></label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check custom-checkbox mb-3 checkbox-warning check-xl">
                            <input type="checkbox" class="form-check-input" checked id="customCheckBox9" required>
                            <label class="form-check-label" for="customCheckBox9"></label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Textarea</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="mb-3">
                            <textarea class="form-txtarea form-control" rows="8" id="comment"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Size</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="mb-3">
                            <input class="form-control form-control-lg" type="text" placeholder="form-control-lg">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                        <div class="mb-3">
                            <input class="form-control form-control-sm" type="text" placeholder="form-control-sm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Select Size</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <select class="default-select form-control wide mb-3 form-control-lg">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                        <select class="default-select form-control wide mb-3">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                        <select class="default-select form-control wide form-control-sm ">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Select List</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Select list (select one):</label>
                            <select class="default-select  form-control wide" >
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <select multiple class="default-select form-control wide mt-3" >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Horizontal Form</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="1234 Main St">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label>City</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label">State</label>
                                <select id="inputState" class="default-select form-control wide">
                                    <option selected>Choose...</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label">Zip</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Vertical Form</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <fieldset class="mb-3">
                            <div class="row">
                                <label class="col-form-label col-sm-3 pt-0">Radios</label>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                                        <label class="form-check-label">
                                            First radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                        <label class="form-check-label">
                                            Second radio
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="gridRadios" value="option3" disabled>
                                        <label class="form-check-label">
                                            Third disabled radio
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="mb-3 row">
                            <div class="col-sm-3">Checkbox</div>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        Example checkbox
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Checkboxes</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="mb-3">
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="check1" value="" checked>
                                <label class="form-check-label" for="check1">Option 1</label>
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="check2" value="">
                                <label class="form-check-label" for="check2">Option 2</label>
                            </div>
                            <div class="form-check disabled">
                                <input type="checkbox" class="form-check-input" id="check3" value="" disabled>
                                <label class="form-check-label" for="check3">Disabled</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Inline Checkboxes</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value=""
                                        checked>Option 1
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Option 2
                                </label>
                            </div>
                            <div class="form-check form-check-inline disabled">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value=""
                                        disabled>Disabled
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Radio Buttons</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="row">
                            <div class="col-xl-4 col-xxl-6 col-6">
                                <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                    <input type="radio" class="form-check-input" id="customRadioBox1" name="optradioCustom">
                                    <label class="form-check-label" for="customRadioBox1">Checkbox 1</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-xxl-6 col-6">
                                <div class="form-check custom-checkbox mb-3 checkbox-secondary">
                                    <input type="radio" class="form-check-input" id="customRadioBox2" name="optradioCustom">
                                    <label class="form-check-label" for="customRadioBox2">Checkbox 2</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-xxl-6 col-6">
                                <div class="form-check custom-checkbox mb-3 checkbox-info">
                                    <input type="radio" class="form-check-input" id="customRadioBox3" name="optradioCustom">
                                    <label class="form-check-label" for="customRadioBox3">Checkbox 2</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-xxl-6 col-6">
                                <div class="form-check custom-checkbox mb-3 checkbox-success">
                                    <input type="radio" class="form-check-input" id="customRadioBox4" name="optradioCustom">
                                    <label class="form-check-label" for="customRadioBox4">Checkbox 3</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-xxl-6 col-6">
                                <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                    <input type="radio" class="form-check-input" id="customRadioBox5" name="optradioCustom">
                                    <label class="form-check-label" for="customRadioBox5">Checkbox 4</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-xxl-6 col-6">
                                <div class="form-check custom-checkbox mb-3 checkbox-danger">
                                    <input type="radio" class="form-check-input" id="customRadioBox6" name="optradioCustom">
                                    <label class="form-check-label" for="customRadioBox6">Checkbox 5</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Inline Radio </h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="mb-3 mb-0">
                            <div class="form-check custom-checkbox mb-2">
                                <input type="radio" class="form-check-input" id="customRadioBox7" name="optradioCustom1">
                                <label class="form-check-label" for="customRadioBox7">Checkbox 1</label>
                            </div>
                            <div class="form-check custom-checkbox mb-2">
                                <input type="radio" class="form-check-input" id="customRadioBox8" name="optradioCustom1">
                                <label class="form-check-label" for="customRadioBox8">Checkbox 1</label>
                            </div>
                            <div class="form-check custom-checkbox mb-2">
                                <input type="radio" class="form-check-input" id="customRadioBox9" name="optradioCustom1">
                                <label class="form-check-label" for="customRadioBox9">Checkbox 1</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Readonly</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" value="email@example.com">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Inline Form</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form class="d-flex align-items-center flex-wrap flex-sm-nowrap">
                        <div class="mb-3 mb-2">
                            <label class="sr-only">Email</label>
                            <input type="text" readonly class="form-control-plaintext" value="email@example.com">
                        </div>
                        <div class="mb-3 mt-2 mx-sm-2">
                            <label class="sr-only">Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Row</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Label Size</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-sm" placeholder="col-form-label-sm">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" placeholder="col-form-label">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-lg" placeholder="col-form-label-lg">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Column size</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="row">
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                            <div class="col mt-2 mt-sm-0">
                                <input type="text" class="form-control" placeholder="State">
                            </div>
                            <div class="col mt-2 mt-sm-0">
                                <input type="text" class="form-control" placeholder="Zip">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Auto-sizing</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <label class="sr-only">Name</label>
                                <input type="text" class="form-control mb-2" placeholder="Jane Doe">
                            </div>
                            <div class="col-auto">
                                <label class="sr-only">Username</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-text">@</div>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Custom Select</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="row align-items-center">
                            <div class="col-auto my-1">
                                <label class="me-sm-2">Preference</label>
                                <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Disabled forms</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <fieldset disabled>
                            <div class="mb-3">
                                <label class="form-label">Disabled input</label>
                                <input type="text" class="form-control" placeholder="Disabled input">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Disabled select menu</label>
                                <select class="form-control ">
                                    <option>Disabled select</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" disabled>
                                <label class="form-check-label">
                                    Can't check this
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 text-white">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Group</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="#">
                        <div class="input-group mb-3 input-warning-o">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group mb-3 input-success-o">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group mb-3 input-primary">
                            <input type="text" class="form-control" placeholder="Recipient's username">
                            <span class="input-group-text border-0">@example.com</span>
                        </div>

                        <label>Your vanity URL</label>
                        <div class="input-group mb-3  input-success">
                            <span class="input-group-text border-0">https://example.com</span>
                            <input type="text" class="form-control">
                        </div>

                        <div class="input-group mb-3  input-info">
                            <span class="input-group-text border-0">$</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text border-0">.00</span>
                        </div>

                        <div class="input-group   input-danger">
                            <span class="input-group-text border-0">With textarea</span>
                            <textarea class="form-control"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Group Size</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="#">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text">Small</span>
                            <input type="text" class="form-control">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Default</span>
                            <input type="text" class="form-control">
                        </div>

                        <div class="input-group input-group-lg">
                            <span class="input-group-text">Large</span>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Checkboxes and radios</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="#">
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input">
                                </div>
                            </div>
                            <input type="text" class="form-control">
                        </div>

                        <div class="input-group">
                            <div class="input-group-text">
                                <div class="form-check custom-checkbox">
                                    <input type="radio" class="form-check-input">
                                </div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Multiple inputs</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="#">
                        <div class="input-group">
                            <span class="input-group-text">First and last name</span>
                            <input type="text" class="form-control">
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Multiple addons</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="#">
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                            <input type="text" class="form-control">
                        </div>

                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Button addons</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="#">
                        <div class="input-group mb-3">
                            <button class="btn btn-primary" type="button">Button</button>
                            <input type="text" class="form-control">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control">
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>

                        <div class="input-group mb-3">
                            <button class="btn btn-primary" type="button">Button</button>
                            <button class="btn btn-primary" type="button">Button</button>
                            <input type="text" class="form-control">
                        </div>

                        <div class="input-group">
                            <input type="text" class="form-control">
                            <button class="btn btn-primary" type="button">Button</button>
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Buttons with dropdowns</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="#">
                        <div class="input-group mb-3">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropdown</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                            <input type="text" class="form-control">
                        </div>

                        <div class="input-group">
                            <input type="text" class="form-control">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropdown</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Segmented buttons</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="#">
                        <div class="input-group mb-3">
                            <button type="button" class="btn btn-primary">Action</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                            <input type="text" class="form-control">
                        </div>

                        <div class="input-group">
                            <input type="text" class="form-control">
                            <button type="button" class="btn btn-primary">Action</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Custom select</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="#">
                        <div class="input-group mb-3">
                            <label class="input-group-text mb-0">Options</label>
                            <select class="default-select  form-control wide">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <select class="default-select form-control wide bleft">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label class="input-group-text  mb-0">Options</label>
                        </div>

                        <div class="input-group mb-3">
                            <button class="btn btn-primary" type="button">Button</button>
                            <select class="default-select form-control wide">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="input-group">
                            <select class="default-select form-control wide bleft">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Custom file input</h4>
            </div>
            <div class="card-body">
                <div class="mb-3">
                  <label for="formFile" class="form-label">Default file input example</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                  <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                  <input class="form-control" type="file" id="formFileMultiple" multiple="">
                </div>
                <div class="mb-3">
                  <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                  <input class="form-control" type="file" id="formFileDisabled" disabled="">
                </div>
                <div class="mb-3">
                  <label for="formFileSm" class="form-label">Small file input example</label>
                  <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div>
                <div>
                  <label for="formFileLg" class="form-label">Large file input example</label>
                  <input class="form-control form-control-lg" id="formFileLg" type="file">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection