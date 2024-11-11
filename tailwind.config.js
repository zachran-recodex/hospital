import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'picton-blue': {
                    '50': '#f1f9fe',
                    '100': '#e2f2fc',
                    '200': '#bfe5f8',
                    '300': '#86d1f3',
                    '400': '#46baea',
                    '500': '#27a9e1',
                    '600': '#1181b8',
                    '700': '#0f6795',
                    '800': '#10577c',
                    '900': '#134967',
                    '950': '#0d2f44',
                },
                'chateau-green': {
                    '50': '#f1fcf3',
                    '100': '#defae5',
                    '200': '#bff3cb',
                    '300': '#8ce9a4',
                    '400': '#53d574',
                    '500': '#28ab4a',
                    '600': '#1e9b3e',
                    '700': '#1b7a35',
                    '800': '#1b602e',
                    '900': '#184f28',
                    '950': '#072c12',
                },
            },
        },
    },

    plugins: [
        forms,
        plugin(function({ addUtilities }) {
            addUtilities({
                '.py-main': {
                        paddingTop: '2rem',
                        paddingBottom: '2rem',
                    '@screen sm': {
                        paddingTop: '3rem',
                        paddingBottom: '3rem',
                    },
                    '@screen lg': {
                        paddingTop: '4rem',
                        paddingBottom: '4rem',
                    }
                },
                '.pt-main': {
                        paddingTop: '2rem',
                    '@screen sm': {
                        paddingTop: '3rem',
                    },
                    '@screen lg': {
                        paddingTop: '4rem',
                    }
                },
                '.pb-main': {
                        paddingBottom: '2rem',
                    '@screen sm': {
                        paddingBottom: '3rem',
                    },
                    '@screen lg': {
                        paddingBottom: '4rem',
                    }
                },
                '.container-main': {
                    '@apply container mx-auto px-4 sm:px-6 lg:px-8': {},
                },
            });
        })
    ],
};
