const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', ...defaultTheme.fontFamily.sans],
                abril: ['Abril Fatface', 'cursive'],
            },
            fontSize: {
                '2xs': '0.6rem',
                '10xl': '10rem',
                '12xl': '14rem',
            },
            colors: {
                tdTeal: {
                    DEFAULT: '#1D5E5E',
                    dark: '#124040',
                }
            },
            gridTemplateColumns: {
                // Simple 16 column grid
                '13': 'repeat(16, minmax(0, 1fr))',
                '14': 'repeat(16, minmax(0, 1fr))',
                '15': 'repeat(16, minmax(0, 1fr))',
                '16': 'repeat(16, minmax(0, 1fr))',
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};