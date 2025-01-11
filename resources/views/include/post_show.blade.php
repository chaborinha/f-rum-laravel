@section('styles')
    <style>
        .form-control {
            font-size: 1.1rem;
            border-radius: 12px;
            border: 1px solid #00bcd4;
            padding: 15px;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #007c8a;
            box-shadow: 0 0 5px rgba(0, 124, 138, 0.5);
            background-color: #fff;
        }

        .btn-gradient {
            background: linear-gradient(45deg, #007c8a, #00bcd4);
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 12px;
            padding: 15px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-gradient:hover {
            background: linear-gradient(45deg, #00bcd4, #007c8a);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .alert-danger {
            border-radius: 8px;
            background-color: #f8d7da;
            color: #721c24;
        }

        textarea.form-control {
            font-size: 1.1rem;
            border-radius: 12px;
            border: 1px solid #00bcd4;
            padding: 12px;
            background-color: #f9f9f9;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        textarea.form-control:focus {
            border-color: #007c8a;
            box-shadow: 0 0 5px rgba(0, 124, 138, 0.5);
            background-color: #fff;
        }

        .mt-3 {
            margin-top: 1rem;
        }
    </style>
@endsection
