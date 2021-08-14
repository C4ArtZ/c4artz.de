module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'white': '#eeeeee',
      },
      fontSize: {
        '10xl': '10rem',
      },
      animation: {
        'move-up-down': 'MoveUpDown 5s ease-in-out infinite',
      },
      keyframes: {
        MoveUpDown: {
          '0%, 100%': { transform: 'translateY(-0.3rem)' },
          '50%': { transform: 'translateY(0.3rem)' },
        }
      },
      gridTemplateRows: {
        'hero': '10rem 3rem',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
