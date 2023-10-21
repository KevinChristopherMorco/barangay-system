<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="tab-container p-10">
        <div class="tab-link-container flex">
            <x-tab-link>
                {{ __('Pending') }}
            </x-tab-link>
            <x-tab-link>
                {{ __('Approved') }}
            </x-tab-link>
        </div>
        <x-tab-content>
            <div class="flex justify-center items-center ">
                <i class="fa-regular fa-clock fa-bounce fa-2x mr-2 text-orange-600"></i>
                <p class="text-lg"> {{ __('Pending Request') }} </p>
            </div>
            <div class="flex justify-center py-2">
                <p class="text-sm"><span class="font-bold">Note: </span>{{ __('Pending requests are to be reviewed by an
                    official, please wait patiently.') }}</p>
            </div>
        </x-tab-content>
        <x-tab-content>
            <div class="flex justify-center items-center ">
                <i class="fa-regular fa-square-check fa-bounce fa-2x mr-2 text-orange-600"></i>
                <p class="text-lg"> {{ __('Approved Request') }} </p>
            </div>
            <div class="flex justify-center py-2">
                <p class="text-sm"><span class="font-bold">Note: </span>{{ __('Approved requests are reviewed
                    successfully by an official, you may now get your copy at the barangay office ') }}</p>
            </div>
        </x-tab-content>
    </div>
</x-app-layout>

<script>
    const link = document.querySelectorAll('.tab-link')
const content = document.querySelectorAll('.tab-content')

content.forEach((contentEl, i) => {
    if (i !== 0) {
        contentEl.classList.add('hidden');
    }
})
link.forEach((linkEl, i) => {
    if (i===0){
        linkEl.classList.add('tab-link--active')
    }
    linkEl.addEventListener('click', (e) => {
        link.forEach((el) => {
            el.classList.remove('tab-link--active');
        });
        linkEl.classList.add('tab-link--active');

        content.forEach((contentEl, index) => {
            if (i === index) {
                contentEl.classList.remove('hidden');
            } else {
                contentEl.classList.add('hidden');
            }
        });
        
    })
})

</script>