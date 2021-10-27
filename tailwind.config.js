module.exports = {
  purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    container: {
        center: true,
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
