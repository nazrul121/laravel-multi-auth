@extends('layouts.app')

@section('content')
   <div class="card">
        <div class="bg-dark text-white p-4 text-center">
            <h1>HR Software</h1>
            <p>Streamline Your Human Resources Processes</p>
        </div>

        <div class="container features">
            <div class="row">
                <div class="col-md-4 feature-item">
                    <i class="fas fa-users feature-icon"></i>
                    <h3 class="feature-title">Employee Management</h3>
                    <p>Efficiently manage employee information, records, and profiles.</p>
                </div>
                <div class="col-md-4 feature-item">
                    <i class="fas fa-chart-bar feature-icon"></i>
                    <h3 class="feature-title">Payroll Management</h3>
                    <p>Access insightful analytics and reports for data-driven decision-making.</p>
                </div>
                <div class="col-md-4 feature-item">
                    <i class="fas fa-cogs feature-icon"></i>
                    <h3 class="feature-title">Attendance </h3>
                    <p>Customize the software to fit your unique HR processes and workflows.</p>
                </div>
            </div>
        </div>

        <div class="cta">
            <h2>Ready to Transform Your HR Processes?</h2>
            <p>Get started with our powerful HR software today.</p>
            <a href="/login" class="btn btn-lg btn-primary cta-btn">Get Started</a>
        </div>

        <footer class="footer">
            <p>&copy; {{date('Y')}} {{request()->get('system_title')}}. All rights reserved.</p>
        </footer>
   </div>
@endsection


@push('style')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom styles -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .header {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }

        .features {
            padding: 50px 0;
            background-color: #ffffff;
        }

        .feature-item {
            text-align: center;
        }

        .feature-icon {
            font-size: 3rem;
            color: #007bff;
        }

        .feature-title {
            margin-top: 20px;
            font-size: 1.5rem;
        }

        .cta {
            background-color: #007bff;
            color: #ffffff;
            padding: 100px 0;
            text-align: center;
        }

        .cta h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .cta-btn {
            font-size: 1.5rem;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
@endpush