/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter", "sans-serif"],
                serif: ["Merriweather", "serif"],
                mono: ["Fira Code", "monospace"],
            },
            typography: ({ theme }) => ({
                DEFAULT: {
                    css: {
                        "--tw-prose-body": theme("colors.gray[600]"),
                        "--tw-prose-headings": theme("colors.gray[900]"),
                        "--tw-prose-links": theme("colors.blue[600]"),
                        "--tw-prose-invert-body": theme("colors.gray[400]"),
                        "--tw-prose-invert-headings": theme("colors.white"),
                        "--tw-prose-invert-links": theme("colors.blue[400]"),
                    },
                },
            }),
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
