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
                <a href="{{route('users')}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">
                    Users
                </a>
                </div>
            </li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="container-flex px-6">
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            FIRSTNAME
                        </th>
                        <th scope="col" class="py-3 px-6">
                            LASTNAME
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Fullname
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Email
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $tableUser)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="py-4 px-6">
                                {{$tableUser->firstName}}
                            </td>
                            <td class="py-4 px-6">
                                {{$tableUser->lastName}}
                            </td>
                            <td class="py-4 px-6">
                                {{$tableUser->fullName}}
                            </td>
                            <td class="py-4 px-6">
                                {{$tableUser->email}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <nav class="py-3 px-2">
                {{ $users->links() }}
            </nav>
        </div>
    </div>
@endsection