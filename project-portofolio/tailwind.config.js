export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      keyframes: {
        fadeUp: {
      '0%': { opacity: '0', transform: 'translateY(24px)' },
      '100%': { opacity: '1', transform: 'translateY(0)' },
      },
      },
      },
  },
  plugins: [],
}
