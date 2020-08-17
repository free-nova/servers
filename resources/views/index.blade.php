@extends('layouts.app')

@section('content')
    <x-header/>
    <div class="flex flex-col min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="w-2/3 mt-24 mx-auto">
            <livewire:domains />
        </div>
    </div>
@endsection
