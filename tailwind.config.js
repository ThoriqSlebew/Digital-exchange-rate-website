/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#004080",
                secondary: "#1DCAF4",
                tertiary: "#FF6B00",
                quaternary: "#FFC000",
            },
            backgroundImage: {
                pattern: "url('../../public/img/bg.png')",
                1: "url('../../public/img/bg-1.png')",
                2: "url('../../public/img/bg-2.png')",
                3: "url('../../public/img/bg-3.png')",
                4: "url('../../public/img/bg-4.png')",
                5: "url('../../public/img/bg-5.png')",
                6: "url('../../public/img/bg-6.png')",
                7: "url('../../public/img/bg-7.png')",
                8: "url('../../public/img/bg-8.png')",
                9: "url('../../public/img/bg-9.png')",
                10: "url('../../public/img/bg-10.png')",
                11: "url('../../public/img/bg-11.png')",
                12: "url('../../public/img/bg-12.png')",
                13: "url('../../public/img/bg-13.png')",
            },
            fontFamily: {
                montserrat: ["Montserrat", "sans-serif"],
            },
        },
    },
    plugins: [],
};
