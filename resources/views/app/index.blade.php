<x-layout.app>
    @push('title', 'Virtual World, Avatar Chat, and Pixel Art')
    
    <section class="max-w-[1200px] mx-auto">
        <x-app.navigation />
        
        <div class="bg-[var(--content)] border border-black shadow-content rounded-xl p-4">
            <div class="w-full h-[132px] bg-[#ffc] border border-black rounded-xl p-0.5">
                <div class="h-full relative rounded-xl pb-2 overflow-hidden">
                    <img class="min-w-[1200px] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" src="{{ Vite::asset('resources/img/header.png') }}" alt="">
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 pt-2">
                    <div class="flex flex-col gap-2">
                        <div>
                            <h1 class="font-semibold text-white text-xl uppercase" style="text-shadow:0px 1px 1px #000000;">Welcome to Habbo!</h1>
                            <p>
                                Habbo is a virtual Hotel where you can hang out with your friends, meet new ones, create and decorate your own personal space, and take part in a wide variety of activities and competitions.
                            </p>
                        </div>
                        <hr class="border-[var(--content-border)]">
                        <div>
                            <h1 class="font-semibold text-white text-xl uppercase" style="text-shadow:0px 1px 1px #000000;">More than just a game...</h1>
                            <p>
                                Habbo is also the place where you can build your own Guest Room and invite your friends round for a chat! There are loads of Furni items for you to choose from and decorate your Guest Room with as the Furni Guide will show.
                            </p>
                        </div>
                        <hr class="border-[var(--content-border)]">
                        <div>
                            <h1 class="font-semibold text-white text-xl uppercase" style="text-shadow:0px 1px 1px #000000;">Help and safety</h1>
                            <p>
                                If you are worried about something - maybe you've just seen someone break the Habbo Way - you can ‘Call For Help’, by clicking on the blue question mark in the bottom right corner of your screen when you're logged into Habbo. A Moderator will then either send you a message or come and assist you.
                            </p>
                            <br>
                            <p>
                                The 'Call for Help' is Habbo's '999' service - please only use it in emergencies.
                            </p>
                        </div>
                        <hr class="border-[var(--content-border)]">
                        <div>
                            <h1 class="font-semibold text-white text-xl uppercase" style="text-shadow:0px 1px 1px #000000;">How to play</h1>
                            <p>
                                On <span class="underline">April 09, 2019</span> the support of Shockwave was discontinued and removed from our browsers, which is why you have to use our client to play Habbo.
                            </p>
                            <br>
                            <p>
                                Should we be able to emulate Shockwave in the browser in the future, we will add this as an alternative and announce it <a class="text-blue-600 hover:text-blue-800 underline" href="{{ route('app.articles') }}">here</a>!
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="bg-[#f3c900] border border-black shadow-content rounded-xl p-3">
                            <div class="text-center">
                                <p class="font-semibold text-[var(--text-red-dark)]">Notice</p>
                            </div>
                            <p>
                                The project to bring this old hotel back to life began on <span class="underline">June 07, 2024</span>. With this project we want to give people the same experience and fun that we had together in 2007!
                            </p>
                        </div>

                        <div class="bg-[#f2d673] border border-black shadow-content rounded-xl p-3">
                            <div class="text-center">
                                <p class="font-semibold text-[var(--text-red-dark)]">Plan International</p>
                            </div>
                            <p>
                                Help children all over the world with just a few euros through Plan International.
                            </p>
                            <br>
                            <p>
                                Habbo.pm would like to give you the chance to do something good with your money. Send us proof of a successful donation by email and tell us your username to receive digital gifts at the hotel!
                            </p>
                            <br>
                            <p>
                                <a class="text-blue-600 hover:text-blue-800 underline" href="https://plan-international.org/" target="_blank">Use this link</a> to find out more and make a donation.
                            </p>
                            <p class="text-xs">
                                Habbo.pm is not in a partnership or benefits from a donation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.app>