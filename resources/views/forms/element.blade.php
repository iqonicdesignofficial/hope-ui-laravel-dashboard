<x-app-layout :assets="$assets ?? []">
<div>
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Basic Form</h4>
                    </div>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                    <form>
                        <div class="form-group">
                            <label class="form-label" for="email">Email address:</label>
                            <input type="email" class="form-control" id="email1">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="checkbox mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                <label class="form-check-label" for="flexCheckDefault3">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-danger">cancel</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Form Grid</h4>
                    </div>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                    <form>
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Input</h4>
                    </div>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                    <form>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">Input Text </label>
                            <input type="text" class="form-control" id="exampleInputText1" value="Mark Jhon" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputEmail3">Email Input</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" value="markjhon@gmail.com" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputurl">Url Input</label>
                            <input type="url" class="form-control" id="exampleInputurl" value="https://getbootstrap.com" placeholder="Enter Url">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputphone">Teliphone Input</label>
                            <input type="tel" class="form-control" id="exampleInputphone" value="1-(555)-555-5555">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputNumber1">Number Input</label>
                            <input type="number" class="form-control" id="exampleInputNumber1" value="2356">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputPassword3">Password Input</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" value="markjhon123" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputdate">Date Input</label>
                            <input type="date" class="form-control" id="exampleInputdate" value="2019-12-18">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputmonth">Month Input</label>
                            <input type="month" class="form-control" id="exampleInputmonth" value="2019-12">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputweek">Week Input</label>
                            <input type="week" class="form-control" id="exampleInputweek" value="2019-W46">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputtime">Time Input</label>
                            <input type="time" class="form-control" id="exampleInputtime" value="13:45">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputdatetime">Date and Time Input</label>
                            <input type="datetime-local" class="form-control" id="exampleInputdatetime" value="2019-12-19T13:45:00">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-danger">cancel</button>
                    </form>
                </div>
            </div>
            <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Input Size</h4>
                </div>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                <form>
                    <div class="form-group">
                        <label class="form-label" for="colFormLabelSm">Small</label>
                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="form-control-sm">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="colFormLabel">Default</label>
                        <input type="email" class="form-control" id="colFormLabel" placeholder="form-control">
                    </div>
                    <div class="form-group mb-0">
                        <label class="form-label pb-0" for="colFormLabelLg">Large</label>
                        <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="form-control-lg">
                    </div>
                </form>
            </div>
            </div>
            <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Select Size</h4>
                </div>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                <div class="form-group">
                    <label class="form-label">Small</label>
                    <select class="form-select form-select-sm mb-3 shadow-none">
                        <option selected="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Default</label>
                    <select class="form-select mb-3 shadow-none">
                        <option selected="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Large</label>
                    <select class="form-select form-select-lg shadow-none">
                        <option selected="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6">
            <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Horizontal Form</h4>
                </div>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                <form class="form-horizontal" >
                    <div class="form-group row">
                        <label class="control-label col-sm-3 align-self-center mb-0" for="email">Email:</label>
                        <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" placeholder="Enter Your  email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3 align-self-center mb-0" for="pwd1">Password:</label>
                        <div class="col-sm-9">
                        <input type="password" class="form-control" id="pwd1" placeholder="Enter Your password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-danger">cancel</button>
                    </div>
                </form>
            </div>
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Form row</h4>
                    </div>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                    <form>
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Input</h4>
                </div>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                <form>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputDisabled1">Disabled Input</label>
                        <input type="text" class="form-control" id="exampleInputDisabled1" disabled="" value="Mark Jhon">
                    </div>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group row">
                            <label class="control-label col-sm-3 align-self-center mb-0" for="email">Email:</label>
                            <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" placeholder="Enter Your  email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3 align-self-center mb-0" for="pwd1">Password:</label>
                            <div class="col-sm-9">
                            <input type="password" class="form-control" id="pwd1" placeholder="Enter Your password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                <label class="form-check-label" for="flexCheckDefault1">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-danger">cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Form row</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputReadonly">Readonly</label>
                            <input type="text" class="form-control" id="exampleInputReadonly" readonly="" value="Mark Jhon">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputcolor">Input Color </label>
                            <input type="color" class="form-control" id="exampleInputcolor" value="#50b5ff">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleFormControlSelect1">Select Input</label>
                            <select class="form-select" id="exampleFormControlSelect1">
                            <option selected="" disabled="">Select your age</option>
                            <option>0-18</option>
                            <option>18-26</option>
                            <option>26-46</option>
                            <option>46-60</option>
                            <option>Above 60</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="choices-single-default">Select Input New</label>
                            <select class="form-select" data-trigger name="choices-single-default" id="choices-single-default">
                                <option value="">This is a placeholder</option>
                                <option value="Choice 1">Choice 1</option>
                                <option value="Choice 2">Choice 2</option>
                                <option value="Choice 3">Choice 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="choices-multiple-default">Default</label>
                            <select class="form-select" data-trigger name="choices-multiple-default"  id="choices-multiple-default" multiple>
                            <option value="Choice 1" selected>Choice 1</option>
                            <option value="Choice 2">Choice 2</option>
                            <option value="Choice 3">Choice 3</option>
                            <option value="Choice 4" disabled>Choice 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleFormControlSelect2">Example multiple select</label>
                            <select multiple="" class="form-select" id="exampleFormControlSelect2">
                            <option>select-1</option>
                            <option>select-2</option>
                            <option>select-3</option>
                            <option>select-4</option>
                            <option>select-5</option>
                            <option>select-6</option>
                            <option>select-7</option>
                            <option>select-8</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="customRange1">Range Input</label>
                            <input type="range" class="form-range" id="customRange1">
                        </div>
                        <div class="form-group">
                            <div class="form-check d-block">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Default checkbox
                                </label>
                            </div>
                            <div class="form-check d-block">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                            <div class="form-check d-block">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                                <label class="form-check-label" for="flexCheckDisabled">
                                    Disabled checkbox
                                </label>
                            </div>
                            <div class="form-check d-block">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                                <label class="form-check-label" for="flexCheckCheckedDisabled">
                                    Disabled checked checkbox
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check d-block">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check d-block">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                            </div>
                            <div class="form-check d-block">
                                <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
                                <label class="form-check-label" for="flexRadioDisabled">
                                    Disabled radio
                                </label>
                            </div>
                            <div class="form-check d-block">
                                <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled>
                                <label class="form-check-label" for="flexRadioCheckedDisabled">
                                    Disabled checked radio
                                </label>
                            </div>
                            <div class="form-check form-radio">
                                <input type="radio" id="customRadio5" name="customRadio5" class="form-check-input" disabled="" checked="">
                                <label class="form-check-label" for="customRadio5"> Selected and  disabled radio</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio6"> Default radio</label>
                            </div>
                            <div class="form-group">
                                <div class="form-check d-block">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="form-check d-block">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Checked checkbox
                                    </label>
                                </div>
                                <div class="form-check d-block">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                                    <label class="form-check-label" for="flexCheckDisabled">
                                        Disabled checkbox
                                    </label>
                                </div>
                                <div class="form-check d-block">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                                    <label class="form-check-label" for="flexCheckCheckedDisabled">
                                        Disabled checked checkbox
                                    </label>
                                </div>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadio8" name="customRadio6" class="custom-control-input" checked="">
                            <label class="custom-control-label" for="customRadio8"> Selected radio</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadio9" name="customRadio7" class="custom-control-input" disabled="">
                            <label class="custom-control-label" for="customRadio9"> disabled radio</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadio10" name="customRadio8" class="custom-control-input" disabled="" checked="">
                            <label class="custom-control-label" for="customRadio10"> Selected and  disabled radio</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                            </div>
                            <div class="form-group">
                                <label for="customFile1" class="form-label custom-file-input">Choose file</label>
                                <input class="form-control" type="file" id="customFile1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="customFile" class="form-label custom-file-input">Example file input</label>
                            <input class="form-control" type="file" id="customFile">
                        </div>
                        <div class="form-group">
                            <label for="customFile" class="form-label custom-file-input">Choose file</label>
                            <input class="form-control" type="file" id="customFile">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-danger">cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
