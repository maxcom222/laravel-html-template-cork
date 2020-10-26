@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing">
        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <div class="calendar-upper-section">
                            <div class="row">
                                <div class="col-md-8 col-12">
                                    <div class="labels">
                                        <p class="label label-primary">Work</p>
                                        <p class="label label-warning">Travel</p>
                                        <p class="label label-success">Personal</p>
                                        <p class="label label-danger">Important</p>
                                    </div>
                                </div>                                                
                                <div class="col-md-4 col-12">
                                    <form action="javascript:void(0);" class="form-horizontal mt-md-0 mt-3 text-md-right text-center">
                                        <button id="myBtn" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar mr-2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> Add Event</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>

            <!-- The Modal -->
            <div id="addEventsModal" class="modal animated fadeIn">

                <div class="modal-dialog modal-dialog-centered">
                    
                    <!-- Modal content -->
                    <div class="modal-content">

                        <div class="modal-body">

                            <span class="close">&times;</span>

                            <div class="add-edit-event-box">
                                <div class="add-edit-event-content">
                                    <h5 class="add-event-title modal-title">Add Events</h5>
                                    <h5 class="edit-event-title modal-title">Edit Events</h5>

                                    <form class="">

                                        <div class="row">

                                            <div class="col-md-12">
                                                <label for="start-date" class="">Event Title:</label>
                                                <div class="d-flex event-title">
                                                    <input id="write-e" type="text" placeholder="Enter Title" class="form-control" name="task">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="form-group start-date">
                                                    <label for="start-date" class="">From:</label>
                                                    <div class="d-flex">
                                                        <input id="start-date" placeholder="Start Date" class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="form-group end-date">
                                                    <label for="end-date" class="">To:</label>
                                                    <div class="d-flex">
                                                        <input id="end-date" placeholder="End Date" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="start-date" class="">Event Description:</label>
                                                <div class="d-flex event-description">
                                                    <textarea id="taskdescription" placeholder="Enter Description" rows="3" class="form-control" name="taskdescription"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="event-badge">
                                                    <p class="">Badge:</p>

                                                    <div class="d-sm-flex d-block">
                                                        <div class="n-chk">
                                                            <label class="new-control new-radio radio-primary">
                                                                <input type="radio" class="new-control-input" name="marker" value="bg-primary">
                                                                <span class="new-control-indicator"></span>Work
                                                            </label>
                                                        </div>

                                                        <div class="n-chk">
                                                            <label class="new-control new-radio radio-warning">
                                                                <input type="radio" class="new-control-input" name="marker" value="bg-warning">
                                                                <span class="new-control-indicator"></span>Travel
                                                            </label>
                                                        </div>

                                                        <div class="n-chk">
                                                            <label class="new-control new-radio radio-success">
                                                                <input type="radio" class="new-control-input" name="marker" value="bg-success">
                                                                <span class="new-control-indicator"></span>Personal
                                                            </label>
                                                        </div>

                                                        <div class="n-chk">
                                                            <label class="new-control new-radio radio-danger">
                                                                <input type="radio" class="new-control-input" name="marker" value="bg-danger">
                                                                <span class="new-control-indicator"></span>Important
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button id="discard" class="btn" data-dismiss="modal">Discard</button>
                            <button id="add-e" class="btn">Add Task</button>
                            <button id="edit-event" class="btn">Save</button>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection