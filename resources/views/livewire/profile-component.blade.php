<div>
    <section class="relative lg:mt-24 mt-[74px] pb-16">
        <div class="lg:container container-fluid">
            <div class="profile-banner relative text-transparent">
                <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)">
                <div class="relative shrink-0">
                    <img src="assets/images/hero/bg5.jpg" class="h-64 w-full object-cover lg:rounded-xl shadow dark:shadow-gray-700" id="profile-banner" alt="">
                    <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                </div>
            </div>
            <!-- <div class="relative shrink-0">
                <img src="assets/images/hero/bg5.jpg" class="h-64 w-full object-cover lg:rounded-xl shadow dark:shadow-gray-700" alt="">
            </div> -->

            <div class="md:flex mx-4 -mt-12">
                <div class="md:w-full">
                    <div class="relative flex items-end">
                        <div class="profile-pic text-center">
                            <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)">
                            <div>
                                <div class="relative h-28 w-28 max-w-[112px] max-h-[112px] mx-auto">
                                    <img src="assets/images/team/01.jpg" class="rounded-full shadow dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                                    <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                </div>
                            </div>
                        </div>

                        <div class="ms-4 mt-16">
                            <h5 class="text-lg font-semibold">{{Auth::user()->name}}</h5>
                            <p class="text-slate-400">{{$informationUser->specialite->specialite ?? ''}}</p>
                            <p>{{$informationUser->speatch ?? '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end -->

        <div class="container mt-16">
            <div class="grid grid-cols-1 gap-[30px]">
                <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                    <h5 class="text-lg font-semibold mb-4">Mon profile :</h5>
                    <form wire:submit.prevent="updateProfile">
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
                            <div>
                                <label class="form-label font-medium">Nom  : <span class="text-red-600">*</span></label>
                                <input type="text" class="form-input border border-slate-100 dark:border-slate-800 mt-2" wire:model="nom"  >
                                @error('nom') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="form-label font-medium">Prénom : <span class="text-red-600">*</span></label>
                                <input type="text" class="form-input border border-slate-100 dark:border-slate-800 mt-2"  wire:model="prenom">
                            </div>
                            <div>
                                <label class="form-label font-medium">Email : <span class="text-red-600">*</span></label>
                                <input type="email" class="form-input border border-slate-100 dark:border-slate-800 mt-2" wire:model="email">
                            </div>
                            <div>
                                <label class="form-label font-medium">Poste:</label>
                                <select wire:model="specialite_id" class="form-select form-input border border-slate-100 dark:border-slate-800 block w-full mt-2">
                                    @foreach ($specialite as $poste)
                                        <option value="{{$poste->id}}">{{$poste->specialite}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div>
                                <label class="form-label font-medium">Pays :</label>
                                <input type="text" class="form-input border border-slate-100 dark:border-slate-800 mt-2" wire:model="pays">
                            </div>
                            <div>
                                <label class="form-label font-medium" for="multiple_files">Ville:</label>
                                <input class="relative form-input border border-slate-100 dark:border-slate-800 file:h-10 file:-mx-3 file:-my-2 file:cursor-pointer file:rounded-none file:border-0 file:px-3 file:text-neutral-700 bg-clip-padding px-3 py-1.5 file:me-3 mt-2"  type="text" wire:model="ville">
                            </div>
                        </div><!--end grid-->

                        <div class="grid grid-cols-1">
                            <div class="mt-5">
                                <label class="form-label font-medium">Intro : </label>
                                <textarea  class="form-input border border-slate-100 dark:border-slate-800 mt-2 textarea" wire:model="speatch"></textarea>
                            </div>
                        </div><!--end row-->

                         <button class="btn bg-emerald-600 hover:bg-emerald-700 text-white rounded-md mt-5" type="submit">Sauvegarder les modifications </button>

                    </form><!--end form-->
                </div>

                {{-- <div class="d-flex" id="reserve-form">
                    <div class="md:w-5/6 mx-auto">
                        <div class="lg:col-span-12 mt-8">
                            <div class="bg-white dark:bg-slate-900 border-0 shadow rounded-md p-3">
                                <form action="#">
                                    <div >
                                        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                            <div class="filter-search-form relative filter-border">
                                                <input type="text" class="relative form-input border border-slate-100 dark:border-slate-800 file:h-10 file:-mx-3 file:-my-2 file:cursor-pointer file:rounded-none file:border-0 file:px-3 file:text-neutral-700 bg-clip-padding px-3 py-1.5 file:me-3 mt-2" placeholder="Titre du poste">
                                            </div>

                                            <div class="filter-search-form relative filter-border">

                                                <input type="text" class="relative form-input border border-slate-100 dark:border-slate-800 file:h-10 file:-mx-3 file:-my-2 file:cursor-pointer file:rounded-none file:border-0 file:px-3 file:text-neutral-700 bg-clip-padding px-2 py-1.5 file:me-3 mt-2">
                                            </div>

                                            <div class="filter-search-form relative filter-border">

                                                <input type="text" class="relative form-input border border-slate-100 dark:border-slate-800 file:h-10 file:-mx-3 file:-my-2 file:cursor-pointer file:rounded-none file:border-0 file:px-3 file:text-neutral-700 bg-clip-padding px-3 py-1.5 file:me-3 mt-2">
                                            </div>

                                            <div class="filter-search-form relative filter-border">

                                               <textarea name="" class="form-input border border-slate-100 dark:border-slate-800 mt-2 textarea" id="" cols="30" rows="10"></textarea>
                                            </div>

                                            <input type="submit" id="search" name="search" style="height: 60px;" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white searchbtn submit-btn w-100" value="Ajouter">
                                        </div><!--end grid-->
                                    </div><!--end container-->
                                </form>
                            </div>
                        </div><!--ed col-->
                    </div>
                </div> --}}

                {{-- <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                    <h5 class="text-lg font-semibold mb-4">Social Media :</h5>

                    <div class="md:flex">
                        <div class="md:w-1/3">
                            <span class="font-medium">Twitter</span>
                        </div>

                        <div class="md:w-2/3 mt-4 md:mt-0">
                            <form>
                                <div class="form-icon relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter w-4 h-4 absolute top-5 start-4"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                                    <input type="text" class="form-input border border-slate-100 dark:border-slate-800 mt-2 ps-12" placeholder="Twitter Profile Name" id="twitter_name" name="name" required="">
                                </div>
                            </form>

                            <p class="text-slate-400 mt-1">Add your Twitter username (e.g. jennyhot).</p>
                        </div>
                    </div>

                    <div class="md:flex mt-8">
                        <div class="md:w-1/3">
                            <span class="font-medium">Facebook</span>
                        </div>

                        <div class="md:w-2/3 mt-4 md:mt-0">
                            <form>
                                <div class="form-icon relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook w-4 h-4 absolute top-5 start-4"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                                    <input type="text" class="form-input border border-slate-100 dark:border-slate-800 mt-2 ps-12" placeholder="Facebook Profile Name" id="facebook_name" name="name" required="">
                                </div>
                            </form>

                            <p class="text-slate-400 mt-1">Add your Facebook username (e.g. jennyhot).</p>
                        </div>
                    </div>

                    <div class="md:flex mt-8">
                        <div class="md:w-1/3">
                            <span class="font-medium">Instagram</span>
                        </div>

                        <div class="md:w-2/3 mt-4 md:mt-0">
                            <form>
                                <div class="form-icon relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram w-4 h-4 absolute top-5 start-4"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                    <input type="text" class="form-input border border-slate-100 dark:border-slate-800 mt-2 ps-12" placeholder="Instagram Profile Name" id="insta_name" name="name" required="">
                                </div>
                            </form>

                            <p class="text-slate-400 mt-1">Add your Instagram username (e.g. jennyhot).</p>
                        </div>
                    </div>

                    <div class="md:flex mt-8">
                        <div class="md:w-1/3">
                            <span class="font-medium">Linkedin</span>
                        </div>

                        <div class="md:w-2/3 mt-4 md:mt-0">
                            <form>
                                <div class="form-icon relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin w-4 h-4 absolute top-5 start-4"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                                    <input type="text" class="form-input border border-slate-100 dark:border-slate-800 mt-2 ps-12" placeholder="Linkedin Profile Name" id="linkedin_name" name="name" required="">
                                </div>
                            </form>

                            <p class="text-slate-400 mt-1">Add your Linkedin username.</p>
                        </div>
                    </div>

                    <div class="md:flex mt-8">
                        <div class="md:w-1/3">
                            <span class="font-medium">Youtube</span>
                        </div>

                        <div class="md:w-2/3 mt-4 md:mt-0">
                            <form>
                                <div class="form-icon relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube w-4 h-4 absolute top-5 start-4"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                                    <input type="url" class="form-input border border-slate-100 dark:border-slate-800 mt-2 ps-12" placeholder="Youtube url" id="you_url" name="url" required="">
                                </div>
                            </form>

                            <p class="text-slate-400 mt-1">Add your Youtube url.</p>
                        </div>
                    </div>

                    <div class="md:flex">
                        <div class="md:w-1/3">
                            <input type="submit" id="submit" name="send" class="btn bg-emerald-600 hover:bg-emerald-700 text-white rounded-md mt-5" value="Save Changes">
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                    <h5 class="text-lg font-semibold mb-5">Account Notifications :</h5>

                    <div class="flex justify-between pb-4">
                        <h6 class="mb-0 font-medium">When someone mentions me</h6>
                        <div class="">
                            <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50" type="checkbox" value="" id="noti1">
                            <label class="form-check-label" for="noti1"></label>
                        </div>
                    </div>
                    <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                        <h6 class="mb-0 font-medium">When someone follows me</h6>
                        <div class="">
                            <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50" type="checkbox" value="" checked="" id="noti2">
                            <label class="form-check-label" for="noti2"></label>
                        </div>
                    </div>
                    <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                        <h6 class="mb-0 font-medium">When shares my activity</h6>
                        <div class="">
                            <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50" type="checkbox" value="" id="noti3">
                            <label class="form-check-label" for="noti3"></label>
                        </div>
                    </div>
                    <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                        <h6 class="mb-0 font-medium">When someone messages me</h6>
                        <div class="">
                            <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50" type="checkbox" value="" id="noti4">
                            <label class="form-check-label" for="noti4"></label>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                    <h5 class="text-lg font-semibold mb-5">Marketing Notifications :</h5>

                    <div class="flex justify-between pb-4">
                        <h6 class="mb-0 font-medium">There is a sale or promotion</h6>
                        <div class="">
                            <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50" type="checkbox" value="" id="noti5">
                            <label class="form-check-label" for="noti5"></label>
                        </div>
                    </div>
                    <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                        <h6 class="mb-0 font-medium">Company news</h6>
                        <div class="">
                            <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50" type="checkbox" value="" id="noti6">
                            <label class="form-check-label" for="noti6"></label>
                        </div>
                    </div>
                    <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                        <h6 class="mb-0 font-medium">Weekly jobs</h6>
                        <div class="">
                            <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50" type="checkbox" value="" checked="" id="noti7">
                            <label class="form-check-label" for="noti7"></label>
                        </div>
                    </div>
                    <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                        <h6 class="mb-0 font-medium">Unsubscribe News</h6>
                        <div class="">
                            <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50" type="checkbox" value="" checked="" id="noti8">
                            <label class="form-check-label" for="noti8"></label>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                    <h5 class="text-lg font-semibold mb-5 text-red-600">Delete Account :</h5>

                    <p class="text-slate-400 mb-4">Do you want to delete the account? Please press below "Delete" button</p>

                    <a href="#" class="btn bg-red-600 hover:bg-red-700 text-white rounded-md">Delete</a>
                </div> --}}
            </div>
        </div>
    </section>
</div>
