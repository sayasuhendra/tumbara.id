<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Title};


new
#[Title('Home')]

class extends Component {


}; ?>

<div>
    <div class="pt-[106px]">
        <div class="-mt-[120px] flex-grow overflow-x-hidden" >
                <div class="relative px-4 pt-32 pb-64 bg-center bg-no-repeat bg-cover bg-tumbara-office md:py-64">
                    <span class="absolute inset-0 bg-black/80"></span>
                    <img src="{{ asset('storage/images/galery/tumbara-beef.png') }}" alt=""
                        class="absolute left-0 hidden w-40 top-24 md:block xl:w-80" />
                    <img src="{{ asset('storage/images/product/jeruk.png') }}" alt=""
                        class="absolute bottom-0 right-0 hidden w-40 md:block xl:w-80" />
                    <div class="relative mx-auto max-w-[800px] text-center text-white">
                        <h2 class="text-4xl font-black uppercase md:text-6xl md:leading-[75px]">
                            <span>PT Tumbara</span>
                        </h2>
                        <h2 class="text-2xl md:text-4xl md:leading-[75px]">
                            <span>Rooted in Rasa, Shared with the World</span>
                        </h2>
                        <p class="py-6 mx-auto text-xl font-semibold xl:w-3/4">
                            Distributor Dan Penyedia Produk Pangan Segar Beku <br /> (Seafood, Daging, Buah Dan Sayuran)
                        </p>
                        <a type="button" href="https://wa.me/{{  __('contact.whatsapp') }}"
                            class="text-white px-5 py-2.5 text-center inline-flex items-center me-2 btn">
                            <img src="{{ url("/storage/images/whatsapp.webp") }}" alt="Whatsapp Icon" class="w-6 me-2">
                            {{ __('contact.header') }}
                        </a>
                    </div>
                </div>
                @include('livewire.why-us')
                @include('livewire.home-customer')
                {{-- @include('livewire.home-galery') --}}
                {{-- @include('livewire.home-contact') --}}
        </div>
    </div>
    <style>
        .text-border-gray {
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: #7780a1;
        }

        .text-border-white {
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: #ffffff;
        }

    </style>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script>
    
    const filters = document.querySelectorAll('.filter');

    filters.forEach((filter) => {
        filter.addEventListener('click', function() {
            let selectedFilter = filter.getAttribute('data-filter');
            let itemsToHide = document.querySelectorAll(
                `.projects .project:not([data-filter='${selectedFilter}'])`);
            let itemsToShow = document.querySelectorAll(`.projects [data-filter='${selectedFilter}']`);

            if (selectedFilter == 'all') {
                itemsToHide = [];
                itemsToShow = document.querySelectorAll('.projects [data-filter]');
            }

            filterMenu = document.querySelectorAll('.filters li.filter');
            filterMenu.forEach((el) => {
                el.classList.remove('active');
            });
            filter.classList.add('active');

            itemsToHide.forEach((el) => {
                el.classList.add('hidden');
                el.classList.remove('block');
            });

            itemsToShow.forEach((el) => {
                el.classList.remove('hidden');
                el.classList.add('block');
            });
        });
    });

    var swiper = new Swiper('.LogoSlider', {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 30,
    speed: 3000,
    autoplay: {
    delay: 0,
    disableOnInteraction: false,
    },
    breakpoints: {
    640: {
    slidesPerView: 3,
    },
    1024: {
    slidesPerView: 4,
    },
    1142: {
    slidesPerView: 7,
    },
    },
    });

    var swiper = new Swiper('.LogoKotakSlider', {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 30,
    speed: 3000,
    autoplay: {
    delay: 0,
    disableOnInteraction: false,
    },
    breakpoints: {
    640: {
    slidesPerView: 3,
    },
    1024: {
    slidesPerView: 4,
    },
    1142: {
    slidesPerView: 7,
    },
    },
    });

    var teamSwiper = new Swiper('.team-member', {
    loop: true,
    slidesPerView: '4',
    spaceBetween: 30,
    autoplay: {
    delay: 3000,
    disableOnInteraction: false,
    },
    breakpoints: {
    320: {
    slidesPerView: 1,
    },
    600: {
    slidesPerView: 2,
    },
    1000: {
    slidesPerView: 3,
    },
    1600: {
    slidesPerView: 4,
    },
    },
    navigation: {
    nextEl: '.swiper-button-next1',
    prevEl: '.swiper-button-prev2',
    },
    });
</script>
</div>
