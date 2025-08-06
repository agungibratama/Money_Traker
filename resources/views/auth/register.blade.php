<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body>
    
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" class="mx-auto h-10 w-auto" />
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign up to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="{{ route('register.store') }}" method="POST" class="space-y-6">
        @csrf
      <div>
        <label for="name" class="block text-sm font-medium text-gray-900">Full Name <span class="text-red-500">*</span></label>
        <div class="mt-2">
          <input id="name" type="text" name="name" required value="{{ old('name') }}" autocomplete="off" placeholder="Input your full name"  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm"/>
          @error('name')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
          @enderror
        </div>
      </div>
      
      <div>
        <label for="email" class="block text-sm font-medium text-gray-900">Email address <span class="text-red-500">*</span></label>
        <div class="mt-2">
          <input id="email" type="email" name="email" required value="{{ old('email') }}" autocomplete="off" placeholder="Input your email"  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm"/>
          @error('email')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium text-gray-900">Password <span class="text-red-500">*</span></label>
        </div>
        <div class="mt-2">
          <input id="password" type="password" name="password" required     autocomplete="off" placeholder="Input your password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm"/>
          @error('password')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
          @enderror
        </div>
      </div>


      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Account</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Already have an account?
      <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Login</a>
    </p>
  </div>
</div>



</body>
</html>