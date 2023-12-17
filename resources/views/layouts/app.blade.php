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
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
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
                <div class="w-1/5 bg-gray-200 p-2 h-screen">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-screen">
                        <div class="flex flex-col space-y-2 p-2">
                            <a href="{{ route('transaction.index') }}" class="btn">Transactions</a>
                            <a href="{{ route('customer.index') }}" class="btn">Customers</a>
                            <a href="{{ route('employee.index') }}" class="btn">Employees</a>
                            <a href="{{ route('payment.index') }}" class="btn">Payments</a>
                            <a href="{{ route('service.index') }}" class="btn">Services</a>
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
