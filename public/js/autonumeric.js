document.addEventListener('DOMContentLoaded', function() {
    // Initialize AutoNumeric for elements with the 'autonumeric' class
    const elements = document.getElementsByClassName('autonumeric');
    for (let i = 0; i < elements.length; i++) {
        new AutoNumeric(elements[i], {
            digitGroupSeparator: ',',
            decimalCharacter: '.',
            suffixText: '', // Ensures no suffix text is shown
            currencySymbol: '', // Ensures no currency symbol is shown
            showWarnings: false, // Optionally, hide warnings
        });
    }
});