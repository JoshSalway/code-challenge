<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-8 w-1/3">
                <label for="contacts" class="block text-sm font-medium leading-5 text-gray-700">Search Contacts</label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <div class="relative flex items-stretch flex-grow focus-within:z-10">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <!-- Heroicon name: users -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                            </svg>
                        </div>
                        <input id="contacts" class="form-input block w-full rounded-none rounded-l-md pl-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5" placeholder="John Doe">
                    </div>
                    <button class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-r-md text-gray-700 bg-gray-50 hover:text-gray-500 hover:bg-white focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        <span class="ml-2">Search</span>
                    </button>
                </div>
            </div>


            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 overflow-x-scroll">
                                    <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Name / Email
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Position / Company
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Phone Numbers
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            DOB
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @if($contacts)
                                            @foreach($contacts as $contact)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                                        <div class="text-sm leading-5 font-medium text-gray-900">
                                                            {{ $contact->first_name ? $contact->first_name : '' }} {{ $contact->last_name ? $contact->last_name : '' }}
                                                        </div>
                                                        <div class="text-sm leading-5 text-gray-500">
                                                            {{ $contact->email ? $contact->email : '' }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                                        <div class="text-sm leading-5 font-medium text-gray-900">
                                                            {{ $contact->position ? $contact->position : '' }}
                                                        </div>
                                                        <div class="text-sm leading-5 text-gray-500">
                                                            {{ $contact->company_name ? $contact->company_name : '' }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                        {{ $contact->phone_number ? $contact->phone_number : '' }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                        {{ $contact->date_of_birth ? $contact->date_of_birth : '' }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                        <a href="#" class="text-blue-600 hover:text-blue-900">Edit</a>
                                                        <a href="#" class="text-red-600 hover:text-red-900 ml-2">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        @else
                                            <tr>
                                                <td colspan="5" class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900 text-center">
                                                    No contacts exist or match!
                                                </td>
                                            </tr>
                                        @endif

                                    </tbody>
                                </table>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                @if ($contacts)
                    {{ $contacts->links() }}
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
