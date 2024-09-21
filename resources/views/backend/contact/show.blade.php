@extends('backend.layout.app')
@section('title')
    Manage | Contact
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Manage | Contact</h4>
                            <form method="post" action="{{ route('contact.update', $contact->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" value="{{ $contact->email }}" class="form-control"
                                            type="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Phone No.</label>
                                    <div class="col-sm-10">
                                        <input name="phone" value="{{ $contact->phone }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input name="address" value="{{ $contact->address }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Whatsapp</label>
                                    <div class="col-sm-10">
                                        <input name="whatsapp" value="{{ $contact->whatsapp }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Instagram</label>
                                    <div class="col-sm-10">
                                        <input name="instagram" value="{{ $contact->instagram }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <input name="facebook" value="{{ $contact->facebook }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Timing</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="timing">{{ $contact->timing }}</textarea>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update">

                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
