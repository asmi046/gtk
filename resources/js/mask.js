import {Maskito} from '@maskito/core';

document.addEventListener('DOMContentLoaded', () => {
    console.log('Maskito loaded');
    const phoneInputs = document.querySelectorAll('.phone-mask');

    if (phoneInputs.length > 0) {
        phoneInputs.forEach(input => {
            new Maskito(input, {
                mask: ['+', '7', ' ', '(', /\d/, /\d/, /\d/, ')', ' ', /\d/, /\d/, /\d/, '-', /\d/, /\d/, '-', /\d/, /\d/],
            });
        });
    }
});
