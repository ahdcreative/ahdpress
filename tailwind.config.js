const theme = require('./theme.json');
const ahdpress = require("@ahdcreative/tailwindcss-ahdpress");


module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: ahdpress.colorMapper(ahdpress.theme('settings.color.palette', theme)),
            fontSize: ahdpress.fontSizeMapper(ahdpress.theme('settings.typography.fontSizes', theme))
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'ls': ahdpress.theme('settings.layout.contentSize', theme),
            'xl': ahdpress.theme('settings.layout.wideSize', theme),
            '2xl': '1440px'
        }
    },
    plugins: [
        ahdpress.tw
    ]
};