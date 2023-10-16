
@if(Auth::user())
@props(['disabled' => false, 'user'])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-orange-500 dark:focus:border-orange-600 focus:ring-orange-500 dark:focus:ring-orange-600 rounded-md shadow-sm']) !!}>
    <option value="" selected disabled>Select a Sitio</option>
     <option value="Batisan" {{ old('sitio', $user->sitio) === 'Batisan' ? 'selected' : '' }}>Batisan</option>
        <option value="Bayside" {{ old('sitio', $user->sitio) === 'Bayside' ? 'selected' : '' }}>Bayside</option>
        <option value="Bukana" {{ old('sitio', $user->sitio) === 'Bukana' ? 'selected' : '' }}>Bukana</option>
        <option value="Ilaya" {{ old('sitio', $user->sitio) === 'Ilaya' ? 'selected' : '' }}>Ilaya</option>
        <option value="Manggahan" {{ old('sitio', $user->sitio) === 'Manggahan' ? 'selected' : '' }}>Manggahan</option>
        <option value="Silangan" {{ old('sitio', $user->sitio) === 'Silangan' ? 'selected' : '' }}>Silangan</option>
</select>
@else
@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-orange-500 dark:focus:border-orange-600 focus:ring-orange-500 dark:focus:ring-orange-600 rounded-md shadow-sm']) !!}>
    <option value="" selected disabled>Select a Sitio</option>
    <option value="Batisan">Batisan</option>
    <option value="Bayside">Bayside</option>
    <option value="Bukana">Bukana</option>
    <option value="Ilaya">Ilaya</option>
    <option value="Manggahan">Manggahan</option>
    <option value="Silangan">Silangan</option>
</select>
@endif



