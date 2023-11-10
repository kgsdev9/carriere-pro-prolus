<div>


<section class="relative table w-full py-20 bg-[url('../../assets/images/hero/bg.html')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-emerald-900/90"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Connexion</h3>

        </div><!--end grid-->
    </div><!--end container-->


</section>


<section class="relative bg-slate-50 dark:bg-slate-800 lg:py-24 py-16">
    <div class="container">
        <div class="lg:flex justify-center">
            <div class="lg:w-2/3">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                    <form wire:submit.prevent="login">
                        <div>
                            @if (session()->has('error'))

                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                    <strong class="font-bold">Oups !</strong>
                                    <span class="block sm:inline"> {{ session('error') }}.</span>
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                      <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                    </span>
                                  </div>
                            @endif
                        </div>
                        <div class="grid grid-cols-1 ">
                            <h5 class="text-lg font-semibold ">Espace de connexion</h5>
                        </div>

                        <div class="grid grid-cols-12 gap-4 mt-4">
                            <div class="col-span-12 ltr:text-left rtl:text-right">
                                <label class="font-semibold" for="RegisterName">Entrer votre adresse E-mail</label>
                                <input id="RegisterName" type="text" wire:model="email" class="form-input border border-slate-100 dark:border-slate-800 mt-1" placeholder="Entrer votre email ">
                            </div>

                            <div class="col-span-12 ltr:text-left rtl:text-right">
                                <label for="comments" class="font-semibold">Mot de passe :</label>
                                <input  type="password" wire:model="password"  class="form-input border border-slate-100 dark:border-slate-800 mt-1" placeholder="Mot de passe">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-4 mt-4">
                            <div>
                                <button type="submit" id="submit" name="send" class="btn rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white">Connexion</button>
                            </div>
                        </div>

                    </form><!--end form-->
                </div>
            </div>
        </div><!--end flex-->
    </div><!--end container-->
</section>
</div>


