@extends('layouts.app')

@section('breadcrumb')
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{route('dashboard')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                Dashboard
                </a>
            </li>
            <li>
                <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="{{route('dashboard')}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">
                    Home
                </a>
                </div>
            </li>
        </ol>
    </nav>
@endsection

@section('content')     
    <!-- Projects -->
    <div class="flex-none w-full max-w-full px-6 mt-6">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                <h6 class="mb-1">Projects</h6>
                <p class="leading-normal text-sm">Development Projects</p>
            </div>
            <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                    <!-- Project 1 -->
                    <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                        <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                            <div class="relative">
                                <a class="block shadow-xl rounded-2xl">
                                <img src="{{ asset('assets/img/comingsoon.jpg') }}" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                                </a>
                            </div>
    
                            <div class="flex-auto px-1 pt-6">
                                <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">
                                    Project #1
                                </p>
                                <h5>Coming Soon</h5>
                                <p class="mb-6 leading-normal text-sm">Will be Coming soon</p>
                                <div class="flex items-center justify-between">
                                    <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-gray-500 text-gray-500 hover:border-gray-500 hover:bg-transparent hover:text-gray-500 hover:opacity-75 hover:shadow-none active:bg-gray-500 active:text-white active:hover:bg-transparent active:hover:text-gray-500">View Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project 2 -->
                    <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                        <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                            <div class="relative">
                                <a class="block shadow-xl rounded-2xl">
                                <img src="{{ asset('assets/img/comingsoon.jpg') }}" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                                </a>
                            </div>
    
                            <div class="flex-auto px-1 pt-6">
                                <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">
                                    Project #2
                                </p>
                                <h5>Coming Soon</h5>
                                <p class="mb-6 leading-normal text-sm">Will be Coming soon</p>
                                <div class="flex items-center justify-between">
                                    <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-gray-500 text-gray-500 hover:border-gray-500 hover:bg-transparent hover:text-gray-500 hover:opacity-75 hover:shadow-none active:bg-gray-500 active:text-white active:hover:bg-transparent active:hover:text-gray-500">View Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project 3 -->
                    <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                        <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                            <div class="relative">
                                <a class="block shadow-xl rounded-2xl">
                                <img src="{{ asset('assets/img/comingsoon.jpg') }}" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                                </a>
                            </div>
    
                            <div class="flex-auto px-1 pt-6">
                                <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">
                                    Project #3
                                </p>
                                <h5>Coming Soon</h5>
                                <p class="mb-6 leading-normal text-sm">Will be Coming soon</p>
                                <div class="flex items-center justify-between">
                                    <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-gray-500 text-gray-500 hover:border-gray-500 hover:bg-transparent hover:text-gray-500 hover:opacity-75 hover:shadow-none active:bg-gray-500 active:text-white active:hover:bg-transparent active:hover:text-gray-500">View Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project 4 -->
                    <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                        <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                            <div class="relative">
                                <a class="block shadow-xl rounded-2xl">
                                <img src="{{ asset('assets/img/comingsoon.jpg') }}" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                                </a>
                            </div>
    
                            <div class="flex-auto px-1 pt-6">
                                <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">
                                    Project #4
                                </p>
                                <h5>Coming Soon</h5>
                                <p class="mb-6 leading-normal text-sm">Will be Coming soon</p>
                                <div class="flex items-center justify-between">
                                    <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-gray-500 text-gray-500 hover:border-gray-500 hover:bg-transparent hover:text-gray-500 hover:opacity-75 hover:shadow-none active:bg-gray-500 active:text-white active:hover:bg-transparent active:hover:text-gray-500">View Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection