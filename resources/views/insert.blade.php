
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
            
           
            <div class="pt-3 bg-white">
                <div class="sm:p-4 py-4">
                    <div class="container sm:px-6 px-3 mx-auto">                        
                        <div class="pt-3">
                            <div class="sm:p-4 py-4">
                                <div class="container sm:px-6 px-3 mx-auto">
                                    <a class="font-medium text-black hover:text-blue-700 " href="manage-user.html">
                                        <svg class="w-5 opacity-70" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                        </svg> 
                                    </a>
                                    <div class="md:grid md:grid-cols-3 md:gap-6 my-6">
                                        <div class="md:col-span-1">
                                          <div class="px-4 sm:px-0">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">Add Customer</h3>
                                            <p class="mt-1 text-sm text-gray-600">
                                              Use a permanent address where you can receive mail.
                                            </p>
                                          </div>
                                        </div>
                                        <div class="mt-5 md:mt-0 md:col-span-2">
                                          <form action="#" method="POST">
                                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                              <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                                <div class="grid grid-cols-3 gap-6">
                                                  <div class="col-span-3 sm:col-span-2">
                                                    <label for="company-website" class="block text-sm font-medium text-gray-700">
                                                      Name
                                                    </label>
                                                    <div class="mt-1 flex rounded-md shadow-sm">
                                                      
                                                      <input type="text" name="company-website" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" >
                                                    </div>
                                                  </div>
                                                  <div class="col-span-3 sm:col-span-2">
                                                    <label for="email-address" class="block text-sm font-medium text-gray-700">
                                                      Email address
                                                    </label>
                                                    <div class="mt-1 flex rounded-md shadow-sm">
                                                      
                                                      <input type="text" name="email-address" id="email-address" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" >
                                                    </div>
                                                  </div>
                                                  <div class="col-span-3 sm:col-span-2">
                                                    <label for="contact" class="block text-sm font-medium text-gray-700">
                                                      Contact Number
                                                    </label>
                                                    <div class="mt-1 flex rounded-md shadow-sm">
                                                      
                                                      <input type="text" name="contact" id="contact" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" >
                                                    </div>
                                                  </div>
                                                    <div class="col-span-3 sm:col-span-3">
                                                                                        
                                                            <label for="contact" class="block text-sm font-medium text-gray-700 self-center w-1/4">
                                                              Permission
                                                            </label>
                                                            <div class="md:flex justify-start w-full md:space-x-10 w-3/4">
                                                                <ul class="md:w-1/3">
                                                                    <li class="flex justify-between">
                                                                        <div class="flex">
                                                                            <div class="font-normal text-primary-400 text-sm self-center ">Manage Users</div>
                                                                            
                                                                        </div>
                                                                        <label for="toggle1" class="flex items-center cursor-pointer">
                                                                            <div class="relative">
                                                                                <input type="checkbox" id="toggle1" class="sr-only">
                                                                                  <div class="block bg-primary-700 bg-opacity-30 w-10 h-6 rounded-full"></div>
                                                                                  <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition"></div>
                                                                            </div>
                                                                        </label>
                                                                        
                                                                    </li>
                                                                    <li class="flex justify-between">
                                                                        <div class="flex">
                                                                            <div class="font-normal text-primary-400 text-sm self-center">Create Support Tickets</div>
                                                                            
                                                                        </div>
                                                                        <label for="toggle2" class="flex items-center cursor-pointer">
                                                                            <div class="relative">
                                                                                <input type="checkbox" id="toggle2" class="sr-only">
                                                                                  <div class="block bg-primary-700 bg-opacity-30 w-10 h-6 rounded-full"></div>
                                                                                  <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition"></div>
                                                                            </div>
                                                                        </label>
                                                                        
                                                                    </li>
                                                                </ul>
                                                                <ul class="md:w-1/3">
                                                                    <li class="flex justify-between">
                                                                        <div class="flex">
                                                                            <div class="font-normal text-primary-400 text-sm self-center">Create Support Tickets</div>
                                                                            
                                                                        </div>
                                                                        <label for="toggle3" class="flex items-center cursor-pointer">
                                                                            <div class="relative">
                                                                                <input type="checkbox" id="toggle3" class="sr-only">
                                                                                  <div class="block bg-primary-700 bg-opacity-30 w-10 h-6 rounded-full"></div>
                                                                                  <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition"></div>
                                                                            </div>
                                                                        </label>
                                                                        
                                                                    </li>
                                                                    <li class="flex justify-between">
                                                                        <div class="flex">
                                                                            <div class="font-normal text-primary-400 text-sm self-center">Create Support Tickets</div>
                                                                            
                                                                        </div>
                                                                        <label for="toggle4" class="flex items-center cursor-pointer">
                                                                            <div class="relative">
                                                                                <input type="checkbox" id="toggle4" class="sr-only">
                                                                                  <div class="block bg-primary-700 bg-opacity-30 w-10 h-6 rounded-full"></div>
                                                                                  <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition"></div>
                                                                            </div>
                                                                        </label>
                                                                        
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        
                                                    </div>
                                                </div>
            
                                                
                                              </div>
                                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 flex space-x-6 justify-start">
                                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                      Save
                                                    </button>                                       
                                                </div>
                                            </div>
                                          </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                                                          
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>
    
    
</body>
</html>