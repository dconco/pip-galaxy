/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./src/**/*.{php,html,js}",
		"./public/**/*.{php,html,js}",
		"./**/*.php",
		"./src/components/*.php",
		"./src/pages/*.php",
		"./src/layout/*.php",
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