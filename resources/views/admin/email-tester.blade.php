@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Email Tester</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.email-tester.send') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Test Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="John" required>
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="Doe" required>
                        </div>

                        <div class="form-group">
                            <label for="reference_number">Reference Number</label>
                            <input type="text" class="form-control" id="reference_number" name="reference_number" value="TEST-123456" required>
                        </div>

                        <div class="form-group">
                            <label for="appointment_date">Appointment Date</label>
                            <input type="date" class="form-control" id="appointment_date" name="appointment_date" value="{{ date('Y-m-d') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="appointment_time">Appointment Time</label>
                            <input type="time" class="form-control" id="appointment_time" name="appointment_time" value="09:00" required>
                        </div>

                        <div class="form-group">
                            <label for="appointment_type">Appointment Type</label>
                            <select class="form-control" id="appointment_type" name="appointment_type" required>
                                <option value="New">New</option>
                                <option value="Renewal">Renewal</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="document_type">Document Type</label>
                            <select class="form-control" id="document_type" name="document_type" required>
                                <option value="Birth Certificate">Birth Certificate</option>
                                <option value="Marriage Certificate">Marriage Certificate</option>
                                <option value="Death Certificate">Death Certificate</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Send Test Email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 