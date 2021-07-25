<button {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-pink-600 border border-transparent rounded-md font-semibold text-sm text-white capitalize tracking-widest hover:bg-pink-500 active:bg-pink-700 focus:outline-none focus:border-pink-700 focus:ring ring-red-50 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
