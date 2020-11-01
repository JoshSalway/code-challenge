<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if ($errors->any())
                <div class="rounded-md bg-red-50 p-4 mb-8">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <!-- Heroicon name: x-circle -->
                            <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm leading-5 font-medium text-red-800">
                                There were {{ $errors->count() }} errors with your submission
                            </h3>
                            <div class="mt-2 text-sm leading-5 text-red-700">
                                <ul class="list-disc pl-5">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <form action="{{ route('contacts.store') }}" method="POST">
                @csrf

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Create a Contact
                        </h3>
                    </div>
                    <div class="mt-6 sm:mt-5">
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                First name
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                    <input id="first_name" name="first_name" value="{{ old('first_name') }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="last_name" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Last name
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                    <input id="last_name" name="last_name" value="{{ old('last_name') }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="date_of_birth" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Date of Birth
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                    <input id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" type="date" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="company_name" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Company Name
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                    <input id="company_name" name="company_name" value="{{ old('company_name') }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                            </div>
                        </div>


                        <div class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="position" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Position
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                    <input id="position" name="position" value="{{ old('position') }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="email" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Email
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                    <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="phone_number" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Phone Number
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                    <input id="phone_number" name="phone_number" value="{{ old('phone_number') }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mt-8 border-t border-gray-200 pt-5">
                        <div class="flex justify-end">
                            <span class="inline-flex rounded-md shadow-sm">
                                <a href={{ route('contacts.index') }} type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                    Cancel
                                </a>
                            </span>
                            <span class="ml-3 inline-flex rounded-md shadow-sm">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                                    Create
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
