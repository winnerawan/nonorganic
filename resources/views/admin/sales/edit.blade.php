
@extends('admin.template')

@section('content')
    <!-- Striped label form layout section start -->
    <section id="striped-label-form-layouts">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="striped-label-layout-basic">Transaksi Penjualan</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="card-text">
                                {{--<p>Add <code>.striped-labels</code> to form tag to add striped--}}
                                    {{--labels. In this example <code>.form-horizontal</code> and--}}
                                    {{--<code>.form-bordered</code> is used to show the striped labels--}}
                                    {{--functionality.--}}
                                {{--</p>--}}
                            </div>
                            <form class="form form-horizontal striped-labels form-bordered">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="la la-user"></i> Personal Info</h4>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1"> Nama</label>
                                        <div class="col-md-9">
                                            <input type="text" id="projectinput1" class="form-control" placeholder="First Name"
                                                   name="fname">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">Last Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="projectinput2" class="form-control" placeholder="Last Name"
                                                   name="lname">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
                                        <div class="col-md-9">
                                            <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="projectinput4">Contact Number</label>
                                        <div class="col-md-9">
                                            <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                                        </div>
                                    </div>
                                    <h4 class="form-section"><i class="la la-clipboard"></i> Requirements</h4>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput5">Company</label>
                                        <div class="col-md-9">
                                            <input type="text" id="projectinput5" class="form-control" placeholder="Company Name"
                                                   name="company">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput6">Interested in</label>
                                        <div class="col-md-9">
                                            <select id="projectinput6" name="interested" class="form-control">
                                                <option value="none" selected="" disabled="">Interested in</option>
                                                <option value="design">design</option>
                                                <option value="development">development</option>
                                                <option value="illustration">illustration</option>
                                                <option value="branding">branding</option>
                                                <option value="video">video</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput7">Budget</label>
                                        <div class="col-md-9">
                                            <select id="projectinput7" name="budget" class="form-control">
                                                <option value="0" selected="" disabled="">Budget</option>
                                                <option value="less than 5000$">less than 5000$</option>
                                                <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                <option value="more than 20000$">more than 20000$</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Select File</label>
                                        <div class="col-md-9">
                                            <label id="projectinput8" class="file center-block">
                                                <input type="file" id="file">
                                                <span class="file-custom"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="projectinput9">About Project</label>
                                        <div class="col-md-9">
                                            <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <i class="la la-remove"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="striped-label-layout-icons">Timesheet</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Add <code>.striped-labels</code> to form tag to add striped
                                    labels. In this example icons are used with form controls
                                    to show the striped labels functionality.</p>
                            </div>
                            <form class="form form-horizontal striped-labels form-bordered">
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="timesheetinput1">Employee Name</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="timesheetinput1" class="form-control" placeholder="employee name"
                                                       name="employeename">
                                                <div class="form-control-position">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="timesheetinput2">Project Name</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="timesheetinput2" class="form-control" placeholder="project name"
                                                       name="projectname">
                                                <div class="form-control-position">
                                                    <i class="la la-briefcase"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="timesheetinput3">Date</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="date" id="timesheetinput3" class="form-control" name="date">
                                                <div class="form-control-position">
                                                    <i class="la la-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Rate Per Hour</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Rate Per Hour" aria-label="Amount (to the nearest dollar)"
                                                       name="rateperhour">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="timesheetinput5">Start Time</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                                                <div class="form-control-position">
                                                    <i class="la la-clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="timesheetinput6">End Time</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                                                <div class="form-control-position">
                                                    <i class="la la-clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control" for="timesheetinput7">Notes</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <textarea id="timesheetinput7" rows="5" class="form-control" name="notes" placeholder="notes"></textarea>
                                                <div class="form-control-position">
                                                    <i class="la la-file"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions right">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <i class="la la-remove"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="striped-label-layout-card-center">Event Registration</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Add <code>.striped-labels</code> to form tag to add striped
                                    labels. In this example centered card is used to show the
                                    striped labels functionality.</p>
                            </div>
                            <form class="form form-horizontal striped-labels">
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="eventRegInput1">Full Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="fullname">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="eventRegInput2">Title</label>
                                        <div class="col-md-9">
                                            <input type="text" id="eventRegInput2" class="form-control" placeholder="title" name="title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="eventRegInput3">Company</label>
                                        <div class="col-md-9">
                                            <input type="text" id="eventRegInput3" class="form-control" placeholder="company"
                                                   name="company">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="eventRegInput4">Email</label>
                                        <div class="col-md-9">
                                            <input type="email" id="eventRegInput4" class="form-control" placeholder="email"
                                                   name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="eventRegInput5">Contact Number</label>
                                        <div class="col-md-9">
                                            <input type="tel" id="eventRegInput5" class="form-control" name="contact" placeholder="contact number">
                                        </div>
                                    </div>
                                    <div class="form-group row last">
                                        <label class="col-md-3 label-control">Existing Customer</label>
                                        <div class="col-md-9">
                                            <div class="input-group p-1">
                                                <div class="d-inline-block custom-control custom-radio mr-1">
                                                    <input type="radio" name="customer1" class="custom-control-input" checked id="yes">
                                                    <label class="custom-control-label" for="yes">Yes</label>
                                                </div>
                                                <div class="d-inline-block custom-control custom-radio">
                                                    <input type="radio" name="customer1" class="custom-control-input" id="no">
                                                    <label class="custom-control-label" for="no">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions center">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <i class="la la-remove"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Striped label form layout section end -->

@endsection
