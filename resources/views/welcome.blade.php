<x-app-layout title="Welcome">
    
    {{-- Home page --}}
    @include('pages.home')

    {{-- about page--}}
    @include('pages.about')

    {{-- services page--}}
    @include('pages.services')

    {{-- hire page --}}
    @include('pages.hire')

    {{-- portfolio page --}}
    @include('pages.portfolio')

    {{-- case studies--}}
    @include('pages.case-studies')

    {{-- contact us page --}}
    @include('pages.contact')

</x-app-layout>
