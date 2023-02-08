
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>popson | admin</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" type="text/css" href="./tailwind.css">

    <style type="text/css">
        input:checked ~ .dot {
          transform: translateX(100%);
          background-color: #48bb78;
        }
        input.custome-radio:checked ~ label span{
            border: none !important;
            font-weight: 700 !important;
        }
    </style>

</head>
<body class="font-poppins ">
    <div x-data="{ sidebarOpen: true }" class="lg:flex overflow-x-auto md:min-h-screen w-full">
        
        
        <main class="flex-1 ">
            
            <div class=" bg-primary-400">
                <div class="container sm:px-1 mx-auto">
                    <div class="flex justify-between">
                        <ul class="flex md:space-x-10 py-5">                                                        
                            <li class="py-3 text-center self-center">
                                <a href="#" class=" flex">                                    
                                    <span class="self-center font-poppins font-medium text-white md:text-sm text-xs uppercase ">Customers</span>
                                </a>
                            </li>
                            
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="pt-3 bg-white">
                <div class="sm:p-4 py-4">
                    <div class="container sm:px-6 px-3 mx-auto">
                        <div class="flex justify-between">
                            <a class="font-medium text-black hover:text-blue-700 justify-end" href="#">
                                <svg class="w-5 opacity-70" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg> 
                            </a>
                            <button href="javascript:void(0)" class="flex w-40 text-center z-10 rounded-full focus:outline-none py-2 uppercase border border-transparent shadow-sm text-xs font-normal text-black hover:text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 px-7 mt-5">                                        
                                <span class="text-xs self-center font-normal"> Add Customer</span>
                            </button>
                        </div>
                       
                        <h3 class="text-lg font-medium leading-6 text-gray-900 py-4">Customer List</h3>
                        <div x-data="{ expanded: false }">
                            <div class="overflow-hidden bg-opacity-50 p-5 flex bg-gray-100 bg-gray-100" x-show="expanded" x-collapse>
                                <div class="w-10/9 mx-auto">
                                    <label for="email-address" class="block text-sm font-normal text-gray-700">
                                      Customer/Company Name
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                      
                                      <input type="text" name="comp-name" id="comp-name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" >
                                    </div>
                                </div>
                                <div class="w-10/9 mx-auto">
                                    <label for="email-address" class="block text-sm font-normal text-gray-700">
                                      Email
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                      
                                      <input type="text" name="Email" id="Email" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" >
                                    </div>
                                </div>
                                <div class="w-10/9 mx-auto">
                                    <label for="email-address" class="block text-sm font-normal text-gray-700">
                                      Phone Number
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                      
                                      <input type="text" name="Phonenumber" id="Phonenumber" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" >
                                    </div>
                                </div>
                                <div class="w-10/9 mx-auto">
                                    <label for="email-address" class="block text-sm font-normal text-gray-700">
                                      Status
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                      
                                        <select name="" id="" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300">
                                            <option value="">All</option>
                                            <option value="">Active</option>
                                            <option value="">In Active</option>
                                            <option value="">Block</option>
                                            <option value="">Suspended</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-10/9 mx-auto self-center">
                                    <a href="javascript:void(0)" class="w-40 mx-auto text-center z-10 block rounded-full focus:outline-none py-2 uppercase border border-transparent shadow-sm text-xs font-normal text-white bg-primary-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 px-7 mt-5">
                                        
                                        <span class="text-xs self-center font-normal text-white"> Search</span>
                                    </a>

                                </div>
                            </div>
                            <div class="flex justify-between pt-8 bg-white pb-6 px-5">
                                <div x-data="{ dropdownOpen: false }" class="relative self-center  bottom-0 ">
                                    <a href="javascript:void(0)" @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-full focus:outline-none flex py-2 uppercase border border-transparent shadow-sm text-xs font-normal text-white bg-primary-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 px-7 ">
                                        action
                                        <svg class="h-2 w-2 self-center ml-2" width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 9L0.0717953 -3.51391e-07L13.9282 8.59975e-07L7 9Z" fill="#ffffff"/>
                                        </svg>
                                    </a>
                                    <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                                    <div x-show="dropdownOpen" class="absolute left-0 mt-2 w-48 bg-white rounded-md border z-20">
                                        <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-gray-100">
                                          In Active
                                        </a>
                                        <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-gray-100">
                                          Block
                                        </a>
                                        <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-gray-100">
                                          Send mail
                                        </a>
                                    </div>
                                </div>
                                <div class="flex space-x-6">                                   
                                    <a href="javascript:void(0)" @click="expanded = ! expanded" class="relative z-10 block focus:outline-none flex border border-transparent focus:outline-none focus:ring-0 focus:ring-0">
                                        <div class="bg-primary-600 hover:bg-indigo-700 w-7 h-7 rounded-full flex justify-center text-center mr-2" >
                                            <svg class="w-3 h-3 self-center mx-auto" width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.79913 8.93097C3.76585 8.93097 3.73257 8.9225 3.70253 8.90556C3.6406 8.87071 3.6022 8.80513 3.6022 8.73404V4.53487L0.455333 0.384939C0.410138 0.325466 0.402654 0.245413 0.435936 0.178358C0.469217 0.111303 0.537552 0.0690613 0.612288 0.0690613H8.38772C8.46256 0.0690613 8.5308 0.111402 8.56408 0.178358C8.59736 0.245315 8.58988 0.325367 8.54468 0.384939L5.39782 4.53487V7.88428C5.39782 7.95311 5.36188 8.01701 5.30299 8.05266L3.90114 8.90241C3.86992 8.92142 3.83448 8.93097 3.79913 8.93097ZM1.00871 0.462924L3.95598 4.34976C3.98198 4.38402 3.99596 4.42577 3.99596 4.4687V8.38439L5.00385 7.77341V4.4687C5.00385 4.42567 5.01794 4.38392 5.04383 4.34976L7.9913 0.462924H1.00871ZM5.20088 7.88428H5.20187H5.20088Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <span class="text-sm self-center font-normal text-black">Filter</span>
                                    </a>
                                </div>
                            </div> 
                        </div>
                               
                        <div class="shadow border-b border-gray-200 sm:rounded-lg mb-5 ">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            <input type="checkbox" class="form-checkbox text-primary-600" checked />
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Email
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Phone Numer
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Company Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        
                                      
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-2 whitespace-nowrap">
                                            <input type="checkbox" class="form-checkbox text-primary-600" checked />
                                        </td>
                                        <td class="px-6 py-2 whitespace-nowrap">
                                            <div class="text-sm font-normal text-gray-500">
                                                  Jane Cooper
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                jane.cooper@example.com
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-nowrap  ">
                                            <div class="text-sm text-gray-500">
                                                +91 9284391676
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-nowrap ">
                                            <div class="text-sm text-gray-500">
                                                Console Infotech
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-nowrap ">
                                            <div x-data="{ dropdownOpen: false }" class="relative self-center  bottom-0 ">
                                                <a href="javascript:void(0)" @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-full focus:outline-none flex py-2 uppercase border border-transparent shadow-sm text-xs font-normal text-white bg-primary-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 px-5 w-24">
                                                    ACTIVE
                                                    <svg class="h-2 w-2 self-center ml-1" width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 9L0.0717953 -3.51391e-07L13.9282 8.59975e-07L7 9Z" fill="#ffffff"/>
                                                    </svg>
                                                </a>
                                                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                                                <div x-show="dropdownOpen" class="absolute left-0 mt-2 w-48 bg-white rounded-md border z-20">
                                                    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-gray-100">
                                                      In Active
                                                    </a>
                                                    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-gray-100">
                                                      Block
                                                    </a>
                                                    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-gray-100">
                                                      Send mail
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-2 whitespace-nowrap">
                                            <input type="checkbox" class="form-checkbox text-primary-600" checked />
                                        </td>
                                        <td class="px-6 py-2 whitespace-nowrap">
                                            <div class="text-sm font-normal text-gray-500">
                                                  Jane Cooper
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                jane.cooper@example.com
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-nowrap  ">
                                            <div class="text-sm text-gray-500">
                                                +91 9284391676
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-nowrap ">
                                            <div class="text-sm text-gray-500">
                                                Console Infotech
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-nowrap ">
                                            <div x-data="{ dropdownOpen: false }" class="relative self-center  bottom-0 ">
                                                <a href="javascript:void(0)" @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-full focus:outline-none flex py-2 uppercase border border-transparent shadow-sm text-xs font-normal text-white bg-primary-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 px-5 w-24">
                                                    ACTIVE
                                                    <svg class="h-2 w-2 self-center ml-1" width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 9L0.0717953 -3.51391e-07L13.9282 8.59975e-07L7 9Z" fill="#ffffff"/>
                                                    </svg>
                                                </a>
                                                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                                                <div x-show="dropdownOpen" class="absolute left-0 mt-2 w-48 bg-white rounded-md border z-20">
                                                    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-gray-100">
                                                      In Active
                                                    </a>
                                                    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-gray-100">
                                                      Block
                                                    </a>
                                                    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-gray-100">
                                                      Send mail
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="flex justify-end">
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                              <span class="sr-only">Previous</span>
                              <!-- Heroicon name: solid/chevron-left -->
                              <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                              </svg>
                            </a>
                           
                            <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-xs font-medium">
                              1
                            </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-xs font-medium">
                              2
                            </a>
                            
                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-xs font-medium text-gray-700">
                              ...
                            </span>
                            
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-xs font-medium">
                              10
                            </a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                              <span class="sr-only">Next</span>
                             
                              <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                              </svg>
                            </a>
                          </nav>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>
    
    
</body>
</html>