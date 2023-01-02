@extends('layouts.app')

@section('content')
    <section class="h-screen lg:p-24">
        <div class="px-6 h-full text-gray-800">
            <div
                class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6"
            >
                <div
                    class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0"
                >
                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="w-full"
                        alt="Sample image"
                    />
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    <form method="POST" action="{{ route('auth.register') }}">
                        @csrf
                        <div class="mb-6 w-full justify-content-center items-center">
                            <h2 class="text-3xl text-center">Register</h2>
                        </div>

                        <!-- Name input -->
                        <div class="mb-10 relative">
                            <input
                                type="text"
                                name="name"
                                class="peer placeholder-transparent form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput2"
                                placeholder="Name"
                            />
                            <label
                                class="peer-placeholder-shown:text-base text-sm peer-placeholder-shown:top-3 absolute -top-6 left-0 transition-all"
                                for="name">
                                <span class="h-full w-full flex items-center pl-4 text-primary-gray text-md">Your Name</span>
                            </label>
                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Email input -->
                        <div class="mb-10 relative">
                            <input
                                type="text"
                                name="email"
                                class="peer placeholder-transparent form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput2"
                                placeholder="Email address"
                            />
                            <label
                                class="peer-placeholder-shown:text-base text-sm peer-placeholder-shown:top-3 absolute -top-6 left-0 transition-all"
                                for="email">
                                <span class="h-full w-full flex items-center pl-4 text-primary-gray text-md">Email Address</span>
                            </label>
                            @error('email')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="mb-10 relative">
                            <input
                                type="password"
                                name="password"
                                class="peer placeholder-transparent form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput3"
                                placeholder="Password"
                            />
                            <label
                                class="peer-placeholder-shown:text-base text-sm peer-placeholder-shown:top-3 absolute -top-6 left-0 transition-all"
                                for="password">
                                <span class="h-full w-full flex items-center pl-4 text-primary-gray text-md">Password</span>
                            </label>
                            @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Confirm Password input -->
                        <div class="mb-6 relative">
                            <input
                                type="password"
                                name="password_confirmation"
                                class="peer placeholder-transparent form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput4"
                                placeholder="Confirm Password"
                            />
                            <label
                                class="peer-placeholder-shown:text-base text-sm peer-placeholder-shown:top-3 absolute -top-6 left-0 transition-all"
                                for="password_confirmation">
                                <span class="h-full w-full flex items-center pl-4 text-primary-gray text-md">Confirm Password</span>
                            </label>
                        </div>


                        <div class="text-center lg:text-left">
                            <button
                                type="submit"
                                class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                            >
                                Register
                            </button>
                            <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                                Already have an account?
                                <a
                                    href="{{ route('login') }}"
                                    class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out"
                                >Login</a
                                >
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
