@props(['disabled' => false, 'user'])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700
    dark:bg-gray-900 dark:text-gray-300 focus:border-orange-500 dark:focus:border-orange-600 focus:ring-orange-500
    dark:focus:ring-orange-600 rounded-md shadow-sm']) !!}>
    <option value="" selected disabled>Select a Purpose</option>
    <option value="Business Registration">Business Registration</option>
    <option value="Documentary Requirement">Documentary Requirement</option>
    <option value="Employment">Employment Requirement
    </option>
    <option value="ID Requirement">ID
        Requirement</option>
    <option value="Residency">Proof of Residency</option>
    <option value="Solicitation Requirement">Solicitation Requirement</option>
    <option value="Travel Requirement">Travel Requirement</option>
</select>