/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.php",
    "./public/**/*.php",
    "./public/**/*.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      fontFamily: {
        'inter': ['Inter', 'sans-serif'],
        'space-grotesk': ['Space Grotesk', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

