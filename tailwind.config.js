const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('tw-elements/dist/plugin')
    ],
};
module.exports = {

    plugins: [
        require('flowbite/plugin')
    ]

}
module.exports = {

    content: [
        "./node_modules/flowbite/**/*.js"
    ]

}
module.exports = {
  content: ['./src/**/*.{html,js}', './node_modules/tw-elements/dist/js/**/*.js'],
  plugins: [
    require('tw-elements/dist/plugin')
  ]
}

