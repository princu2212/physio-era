@extends('backend.layout.app')
@section('title')
    Edit | Appointment
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Appointment</h4>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input name="name" value="{{ $appointment->name }}" class="form-control"
                                        type="text">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" value="{{ $appointment->email }}" class="form-control"
                                        type="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Phone No.</label>
                                <div class="col-sm-10">
                                    <input name="phone" value="{{ $appointment->phone }}" class="form-control"
                                        type="text">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input name="date" value="{{ $appointment->date }}" class="form-control"
                                        type="text">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="type" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="type">
                                        <option selected disabled>Choose...</option>
                                        <option value="General Checkup"
                                            {{ $appointment->type == 'general_checkup' ? 'selected' : '' }}>General Checkup
                                        </option>
                                        <option value="Chronic Back Pain"
                                            {{ $appointment->type == 'chronic_back_pain' ? 'selected' : '' }}>Chronic Back
                                            Pain
                                        </option>
                                        <option value="Neck/Cervical Pain"
                                            {{ $appointment->type == 'neck_cervical_pain' ? 'selected' : '' }}>Neck/Cervical
                                            Pain
                                        </option>
                                        <option value="Sports Injury"
                                            {{ $appointment->type == 'sports_injury' ? 'selected' : '' }}>Sports Injury
                                        </option>
                                        <option value="Post Accident Physiotherapy"
                                            {{ $appointment->type == 'post_accident_physiotherapy' ? 'selected' : '' }}>Post
                                            Accident Physiotherapy
                                        </option>
                                        <option value="Paralysis Physiotherapy"
                                            {{ $appointment->type == 'paralysis_physiotherapy' ? 'selected' : '' }}>
                                            Paralysis
                                            Physiotherapy
                                        </option>
                                        <option value="Slipped Disc"
                                            {{ $appointment->type == 'slipped_disc' ? 'selected' : '' }}>Slipped Disc
                                        </option>
                                        <option value="Frozen Shoulder"
                                            {{ $appointment->type == 'frozen_shoulder' ? 'selected' : '' }}>Frozen Shoulder
                                        </option>
                                        <option value="Para/Quadri Plegia"
                                            {{ $appointment->type == 'para_quadri_plegia' ? 'selected' : '' }}>Para/Quadri
                                            Plegia
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="comment">{{ $appointment->comment }}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
