{{--
@extends('layouts.base')


    @section('childContent')

        @include('layouts.partials.header')
        @yield('content')

    <footer></footer>
    @endsection --}}
@props(['title' => ''])

<x-base-layout :$title>
    <x-layouts.header />
    {{ $slot }}
</x-base-layout>
