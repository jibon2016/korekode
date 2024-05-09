/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
      ],
  theme: {
    extend: {
        backgroundImage: {
            'header-bg': "url('/public/images/header_bg.jpg')",
          }
    },
  },
  plugins: [],
}

