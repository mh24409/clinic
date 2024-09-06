/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.css",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                primary: '#48cae4',
                secondary: '#023e8a',
                accent: '#ffb703',
            },
            borderRadius: {
                'main': '5px',
            },
            height: {
                'small-img': '24px',
                'small-img-3x': '62px',
            },
            width: {
                'small-img': '24px',
                'small-img-3x': '62px',
            }
        },
    },
    plugins: [
        require('flowbite/plugin')({
            datatables: true,
        }),
    ],
}

