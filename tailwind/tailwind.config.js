const { gray, yellow } = require('tailwindcss/colors.js');
const plugin = require('tailwindcss/plugin');

// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	safelist: [
		'border-2',
		'mt-2',
		'h-[55px]',
		'w-full',
		'rounded',
		'border-[#EAEAEA]',
		'p-5',
		'outline-none',
		'placeholder:text-[#A0A0A0]',
		'text-body',
		'font-bold',
		'rounded-lg',
		'w-fit',
		'h-[60px]',
		'mt-10',
		'gap-x-2',
		'p-[18px]',
		'inline-block',
		'flex-row',
		'items-center',
		'text-xl',
		'text-gray-QG',
		'font-medium',
		'bg-yellow-QG',
	],
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files trigger a rebuild.
		'./theme/**/*.php',
		'./src/**/*.{js,jsx,ts,tsx}',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			fontFamily: {
				lato: ['lato', 'sans-serif'],
			},
			textShadow: {
				sm: '1px 1px 1px rgba(80, 128, 142, 0.9)', // Sombra ligera
				DEFAULT: '2px 2px 4px rgba(0, 0, 0, 0.3)', // Sombra por defecto
				lg: '3px 3px 6px rgba(0, 0, 0, 0.5)', // Sombra más pronunciada
			},
			fontSize: {
				h1: ['3.562rem', { lineHeight: '120%', fontWeight: '700' }],
				h2: ['3rem', { lineHeight: '120%', fontWeight: '500' }],
				h3: ['2.5rem', { lineHeight: '120%', fontWeight: '700' }],
				h4: ['2.062rem', { lineHeight: '120%', fontWeight: '700' }],
				h5: ['1.750rem', { lineHeight: '120%', fontWeight: '700' }],
				xl: ['1.438rem', '120%'],
				'xl-b': ['1.438rem', { lineHeight: '120%', fontWeight: '700' }],
				m: ['1.188rem', '120%'],
				'm-b': ['1.188rem', { lineHeight: '120%', fontWeight: '700' }],
				body: ['1rem', '120%'],
				'body-b': ['1rem', { lineHeight: '120%', fontWeight: '700' }],
				s: ['0.812rem', '120%'],
				's-b': ['0.812rem', { lineHeight: '120%', fontWeight: '700' }],
				xs: ['0.688rem', '120%'],
				'xs-b': ['0.688rem', { lineHeight: '120%', fontWeight: '700' }],
			},
			colors: {
				black: {
					primmary: '#353535',
				},
				gray: {
					QG: '#555B6E',
					700: '#909293',
					1000: '#D0D2D4',
				},
				green: {
					qg: '#50808E',
					modular: '#808000',
					10: '#3C6E71',
				},
				yellow: {
					QG: '#FBC30E',
					20: '#FFFCE1',
				},
				blue: {
					modular: '#284B63',
				},
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		plugin(function ({ matchUtilities, theme }) {
			matchUtilities(
				{
					'text-shadow': (value) => ({
						textShadow: value,
					}),
				},
				{ values: theme('textShadow') }
			);
		}),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
