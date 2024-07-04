@extends('main')
@section('otherContent')
    <form action="{{route('user.store')}}"  method="POST" class="max-w-sm mx-auto">
        @csrf

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
            <input type="text" name="name" value="{{old('name')}}" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your name" />
            @error('name')<p class="text-red-600">{{$message}}</p>@enderror
        </div>

        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="text" name="email" value="{{old('email')}}" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" />
            @error('email')<p class="text-red-600">{{$message}}</p>@enderror
        </div>

        <div class="mb-5">
            <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Role</label>
            <select name="role" id="">
                <option value="admin">admin</option>
                <option selected value="user">user</option>
                <option value="viewer">viewer</option>
                <option value="manager">manager</option>
            </select>
            @error('role')<p class="text-red-600">{{$message}}</p>@enderror
        </div>

        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
            <input type="text" name="password" value="{{old('password')}}" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            @error('password')<p class="text-red-600">{{$message}}</p>@enderror
        </div>

        <div class="mb-5">
            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
            <input type="text" name="password_confirmation" value="{{old('password_confirmation')}}" id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            @error('password_confirmation')<p class="text-red-600">{{$message}}</p>@enderror
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
@endsection
