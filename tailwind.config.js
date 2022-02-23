const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                light: "#F5F5F5",
                dark: "#292929",
                purple: "#9303D7",
                pink: "#E835E0",
                grey: "#C4C4C4",
                danger: "#E20000",
                warning: "#FBCC53",
                add: "#278E09",
            },
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
        screens: {
            tablet: "768px",
            "sm-desktop": "992px",
            desktop: "1200px",
            "lg-desktop": "1900px",
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
