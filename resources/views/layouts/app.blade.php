<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="container mx-auto px-4 font-sans antialiased">
    <div class="min-h-screen bg-gray-200 rounded-lg">
        @include('layouts.navigation')
        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif
        <!-- Page Content -->
        <main>
            <div class="flex">
                <!-- Sidebar -->
                <div class="w-1/5 p-2 h-screen">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-screen">
                        <div class="flex flex-col space-y-2 p-2">
                            <a href="{{ route('transaction.index') }}" class="flex btn">
                                <img src="{{ asset('images/transaction.png') }}" alt="Transaction Logo" class="w-6 h-6 mr-2">
                                Transactions
                            </a>
                            <a href="{{ route('customer.index') }}" class="flex btn">
                                <img src="{{ asset('images/customer.png') }}" alt="Customer Logo" class="w-6 h-6 mr-2">
                                Customers
                            </a>
                            <a href="{{ route('employee.index') }}" class="flex btn">
                                <img src="{{ asset('images/employee.png') }}" alt="Employee Logo" class="w-6 h-6 mr-2">
                                Employees
                            </a>
                            <a href="{{ route('payment.index') }}" class="flex btn">
                                <img src="{{ asset('images/payment.png') }}" alt="Payment Logo" class="w-6 h-6 mr-2">
                                Payments
                            </a>
                            <a href="{{ route('service.index') }}" class="flex btn">
                                <img src="{{ asset('images/customer-service.png') }}" alt="Service Logo" class="w-6 h-6 mr-2">
                                Services
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="w-4/5 p-2">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>
</body>

</html>